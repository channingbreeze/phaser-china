
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    // 加载atlasXML，需要一个png和一个xml，XML以UTF-8形式保存
	game.load.atlasXML('seacreatures', 'assets/sprites/seacreatures.png', 'assets/sprites/seacreatures.xml');
    // 水下的场景
    game.load.image('undersea', 'assets/pics/undersea.jpg');
    game.load.image('coral', 'assets/pics/seabed.png');
}

var jellyfish;

function create() {
    game.add.sprite(0, 0, 'undersea');
    // 游泳
    jellyfish = game.add.sprite(330, 100, 'seacreatures');
    jellyfish.animations.add('swim', Phaser.Animation.generateFrameNames('greenJellyfish', 0, 39, '', 4), 30, true);
    jellyfish.animations.play('swim');
    game.add.sprite(0, 466, 'coral');
    // y方向上运动
    game.add.tween(jellyfish).to({ y: 250 }, 4000, Phaser.Easing.Quadratic.InOut, true, 0, 10000, true);
}
