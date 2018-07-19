
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('mushroom', 'assets/sprites/mushroom2.png');
}

function create() {
	// 在(200,200)的地方创建一个精灵
    var test = game.add.sprite(200, 200, 'mushroom');
}
