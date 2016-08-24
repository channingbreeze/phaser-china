
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
	game.load.image('phaser', 'assets/sprites/phaser1.png');
}

var sprite;

function create() {
	game.stage.backgroundColor = '#2384e7';
	// 把精灵放在游戏区域上方
	sprite = game.add.sprite(game.world.centerX, -200, 'phaser');
	sprite.anchor.set(0.5);
	// 让它运动到游戏区域中间
	game.add.tween(sprite).to( { y: game.world.centerY }, 4000, Phaser.Easing.Bounce.Out, true);
}
