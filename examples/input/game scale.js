
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('melon', 'assets/sprites/melon.png');
}

var cursors;

function create() {
    game.world.setBounds(0, 0, 2000, 2000);
    for (var i = 0; i < 1000; i++) {
        game.add.sprite(game.world.randomX, game.world.randomY, 'melon');
    }
    // 方向键
    cursors = game.input.keyboard.createCursorKeys();
}

function update() {
	if (cursors.left.isDown) {
        game.camera.x -= 2;
    } else if (cursors.right.isDown) {
        game.camera.x += 2;
    }
    if (cursors.up.isDown) {
        game.camera.y -= 2;
    } else if (cursors.down.isDown) {
        game.camera.y += 2;
    }
}

function render() {
    game.debug.inputInfo(16, 16);
}
