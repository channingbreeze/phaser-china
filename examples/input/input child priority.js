
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('background', 'assets/pics/bubble-on.png');
    game.load.image('close', 'assets/sprites/orb-red.png');
}

var popup;
var tween;

function create() {
    game.stage.backgroundColor = '#4b0049';
    // 弹层
    popup = game.add.sprite(game.world.centerX, game.world.centerY, 'background');
    popup.anchor.set(0.5);
    popup.inputEnabled = true;
    popup.input.enableDrag();
    var pw = (popup.width / 2) - 30;
    var ph = (popup.height / 2) - 8;
    // 关闭按钮
    var closeButton = game.make.sprite(pw, -ph, 'close');
    closeButton.inputEnabled = true;
    closeButton.input.priorityID = 1;
    closeButton.events.onInputDown.add(closeWindow, this);
    popup.addChild(closeButton);
    // 先隐藏
    popup.scale.set(0);
    game.input.onDown.add(openWindow, this);
}

function openWindow() {
    if ((tween && tween.isRunning) || popup.scale.x === 1) {
        return;
    }
    tween = game.add.tween(popup.scale).to( { x: 1, y: 1 }, 1000, Phaser.Easing.Elastic.Out, true);
}

function closeWindow() {
    if (tween.isRunning || popup.scale.x === 0) {
        return;
    }
    tween = game.add.tween(popup.scale).to( { x: 0, y: 0 }, 500, Phaser.Easing.Elastic.In, true);
}

function render() {
    game.debug.text("Click to open window + drag + close", 32, 32);
}
