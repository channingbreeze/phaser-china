
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

var sprite;

function preload() {
	// 加载精灵集，每一帧大小37x45，总共18帧
    game.load.spritesheet('ms', 'assets/sprites/metalslug_mummy37x45.png', 37, 45, 18);
}

function create() {
    sprite = game.add.sprite(40, 100, 'ms');
    // 添加动画
    sprite.animations.add('walk');
    // 播放动画
    sprite.animations.play('walk', 50, true);
    // 10s跑到屏幕右边，最后一个参数true表示自动开始
    game.add.tween(sprite).to({ x: game.width }, 10000, Phaser.Easing.Linear.None, true);
}

function update() {
	// x>=300时，精灵变大
    if (sprite.x >= 300) {
        sprite.scale.x += 0.01;
        sprite.scale.y += 0.01;
    }
}
