
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('space', 'assets/misc/starfield.png', 138, 15);
    game.load.image('logo', 'assets/sprites/phaser2.png');
}

function create() {
	// tile是瓦片的意思
    game.add.tileSprite(0, 0, 800, 600, 'space');
    var sprite = game.add.sprite(game.world.centerX, game.world.centerY, 'logo');
    sprite.anchor.setTo(0.5, 0.5);
    // 设置透明度
    sprite.alpha = 0;
    // 创建一个tween，2s内alpha变为1，自动开始，延时0s，一直重复
    var tween = game.add.tween(sprite).to( { alpha: 1 }, 2000, "Linear", true, 0, -1);
    // yoyo会在下一次动画前会先把alpha再变为0，3000代表3s后执行yoyo动画
    tween.yoyo(true, 3000);
}
