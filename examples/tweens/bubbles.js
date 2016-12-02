
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.image('space', 'assets/pics/thalion-rain.png');
    game.load.image('ball', 'assets/particles/bubble256.png');
}

var bg;

function create() {
	// 背景用tileSprite
    bg = game.add.tileSprite(0, 0, 800, 600, 'space');
    var delay = 0;
    for (var i = 0; i < 40; i++) {
        var sprite = game.add.sprite(-100 + (game.world.randomX), 600, 'ball');
        // 0.1~0.6随机数
        sprite.scale.set(game.rnd.realInRange(0.1, 0.6));
        // 4000到6000随机数
        var speed = game.rnd.between(4000, 6000);
        // tween
        game.add.tween(sprite).to({ y: -256 }, speed, Phaser.Easing.Sinusoidal.InOut, true, delay, 1000, false);
        delay += 200;
    }
}

function update() {
	// 让背景移动
    bg.tilePosition.y += 0.4;
}
