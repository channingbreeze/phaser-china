
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('ship', 'assets/sprites/ship.png');
    game.load.image('array', 'assets/sprites/longarrow.png');
}

var angle = 0;
var dragSprite;
var copySprite;

function create() {
    game.stage.backgroundColor = '#2f0f1c';
    dragSprite = game.add.sprite(game.world.centerX, game.world.centerY, 'ship');
    dragSprite.anchor.set(0.5);
    dragSprite.inputEnabled = true;
    dragSprite.input.enableDrag();
    // 拖拽事件
    dragSprite.events.onDragStart.add(dragStart);
    dragSprite.events.onDragUpdate.add(dragUpdate);
    dragSprite.events.onDragStop.add(dragStop);
    // 箭头
    copySprite = game.add.sprite(dragSprite.x + 220, dragSprite.y, 'array');
    copySprite.anchor.set(0, 0.5);
    copySprite.alpha = 0.5;
    copySprite.angle = 180;
    var text = game.add.text(32, 32, "drag the ship", { font: "32px Arial", fill: "#f9b4cf" });
    text.setShadow(6, 6, 'rgba(0,0,0,0.8)', 5);
}

function dragStart() {
    copySprite.alpha = 1;
}

function dragUpdate(sprite, pointer, dragX, dragY, snapPoint) {
    angle += 0.01;
    copySprite.x = dragSprite.x + 220 * Math.cos(angle);
    copySprite.y = dragSprite.y + 220 * Math.sin(angle);
    copySprite.rotation = game.physics.arcade.angleToPointer(copySprite);
}

function dragStop() {
    copySprite.alpha = 0.5;
}
