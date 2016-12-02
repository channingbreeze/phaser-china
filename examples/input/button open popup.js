
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.spritesheet('button', 'assets/buttons/button_sprite_sheet.png', 193, 71);
    game.load.image('background', 'assets/pics/bubble-on.png');
    game.load.image('close', 'assets/sprites/orb-red.png');
}

var button;
var popup;
var tween = null;

function create() {
    game.stage.backgroundColor = '#4b0049';
    button = game.add.button(game.world.centerX - 95, 460, 'button', openWindow, this, 2, 1, 0);
    // 手型
    button.input.useHandCursor = true;
    // 弹层
    popup = game.add.sprite(game.world.centerX, game.world.centerY, 'background');
    popup.alpha = 0.8;
    popup.anchor.set(0.5);
    popup.inputEnabled = true;
    popup.input.enableDrag();
    // 关闭按钮
    var pw = (popup.width / 2) - 30;
    var ph = (popup.height / 2) - 8;
    var closeButton = game.make.sprite(pw, -ph, 'close');
    closeButton.inputEnabled = true;
    // 优先级
    closeButton.input.priorityID = 1;
    closeButton.input.useHandCursor = true;
    closeButton.events.onInputDown.add(closeWindow, this);
    popup.addChild(closeButton);
    popup.scale.set(0.1);
}

function openWindow() {
    if ((tween !== null && tween.isRunning) || popup.scale.x === 1) {
        return;
    }
    tween = game.add.tween(popup.scale).to( { x: 1, y: 1 }, 1000, Phaser.Easing.Elastic.Out, true);
}

function closeWindow() {
    if (tween && tween.isRunning || popup.scale.x === 0.1) {
        return;
    }
    tween = game.add.tween(popup.scale).to( { x: 0.1, y: 0.1 }, 500, Phaser.Easing.Elastic.In, true);
}

function render() {
    game.debug.text("Click to open window + drag + close", 32, 32);
}
