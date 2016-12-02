
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 指定一个key，必须在所有image中唯一，再指定一个图片
    game.load.image('imageKey', 'assets/sprites/phaser2.png');
}

function create() {
	// 显示图片
    game.add.sprite(0, 0, 'imageKey');
}
