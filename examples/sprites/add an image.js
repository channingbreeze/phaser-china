
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('pic', 'assets/pics/acryl_bladerunner.png');
}

function create() {
	// 在(100,100)的地方创建图片
    var image = game.add.image(100, 100, 'pic');
}
