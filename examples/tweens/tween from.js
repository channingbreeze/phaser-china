
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
	game.load.image('phaser', 'assets/sprites/phaser1.png');
}

var sprite;

function create() {
	game.stage.backgroundColor = '#2384e7';
	// 把精灵放在游戏区域中间
	sprite = game.add.sprite(game.world.centerX, game.world.centerY, 'phaser');
	sprite.anchor.set(0.5);
	// 使用tween.from，它会从上面运用到中间
	game.add.tween(sprite).from( { y: -200 }, 2000, Phaser.Easing.Bounce.Out, true);
}
