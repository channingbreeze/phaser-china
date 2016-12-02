
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载一个“老式的”精灵集，注意和atlas的区别，37x45大小，18帧
    game.load.spritesheet('uniqueKey', 'assets/sprites/metalslug_mummy37x45.png', 37, 45, 18);
}

function create() {
	// 还是通过sprite加载
    var sprite = game.add.sprite(300, 200, 'uniqueKey');
    // 添加动画
    sprite.animations.add('walk');
    // 开始动画
    sprite.animations.play('walk', 50, true);
}
