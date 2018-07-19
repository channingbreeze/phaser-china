
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('grid', 'assets/tests/debug-grid-1920x1920.png');
    game.load.image('ship', 'assets/sprites/ship.png');
    game.load.image('ball', 'assets/sprites/pangball.png');
}

var angle = 0;
var dragSprite;
var copySprite;

function create() {
    game.add.sprite(0, 0, 'grid').alpha = 0.4;
    dragSprite = game.add.sprite(game.world.centerX, game.world.centerY, 'ship');
    dragSprite.anchor.set(0.5);
    dragSprite.inputEnabled = true;
    dragSprite.input.enableDrag();
    // 拖拽事件
    dragSprite.events.onDragStart.add(dragStart);
    dragSprite.events.onDragUpdate.add(dragUpdate);
    dragSprite.events.onDragStop.add(dragStop);
    // 小球
    copySprite = game.add.sprite(dragSprite.x + 200, dragSprite.y, 'ball');
    copySprite.anchor.set(0.5);
    copySprite.alpha = 0.5;
}

function dragStart() {
    copySprite.alpha = 1;
}

function dragUpdate(sprite, pointer, dragX, dragY, snapPoint) {
	// 旋转
    angle += 0.01;
    copySprite.x = dragSprite.x + 200 * Math.cos(angle);
    copySprite.y = dragSprite.y + 200 * Math.sin(angle);
}

function dragStop() {
    copySprite.alpha = 0.5;
}
