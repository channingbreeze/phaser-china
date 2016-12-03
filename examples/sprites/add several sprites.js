
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

var timer = 0;
var total = 0;

function preload() {
    game.load.spritesheet('mummy', 'assets/sprites/metalslug_mummy37x45.png', 37, 45, 18);
}

function create() {
	// 释放木乃伊，吼吼~~
    releaseMummy();
}

function releaseMummy() {
    var mummy = game.add.sprite(-(Math.random() * 800), game.world.randomY, 'mummy');
    mummy.scale.setTo(2, 2);
    // 随机旋转一个角度
    mummy.angle = game.rnd.angle();
    // 走起来
    mummy.animations.add('walk');
    mummy.animations.play('walk', 20, true);

    game.add.tween(mummy).to({ x: game.width + (1600 + mummy.x) }, 20000, Phaser.Easing.Linear.None, true);

    total++;
    timer = game.time.now + 100;
}

function update() {
	// 创建200个，100ms出一个
    if (total < 200 && game.time.now > timer) {
        releaseMummy();
    }
}
