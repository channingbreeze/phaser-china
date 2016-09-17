
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('bunny', 'assets/sprites/bunny.png');
}

var bunny;

function create() {
    bunny = game.add.sprite(game.world.centerX, game.world.centerY, 'bunny');
    bunny.alpha = 0.5;
    bunny.anchor.set(0.5);
    bunny.inputEnabled = true;
}

function update() {
	// 鼠标是否在bunny上
    if (bunny.input.pointerOver()) {
        bunny.alpha = 1;
    } else {
        bunny.alpha = 0.5;
    }
}

function render() {
    game.debug.text("Over: " + bunny.input.pointerOver(), 32, 32);
    game.debug.text(game.input.mouse.locked, 320, 32);
}
