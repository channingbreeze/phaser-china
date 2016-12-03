
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载图集
    game.load.atlasJSONHash('bot', 'assets/sprites/running_bot.png', 'assets/sprites/running_bot.json');
}

function create() {
	// 同样的方法创建精灵
    var bot = game.add.sprite(200, 200, 'bot');
    // 添加一个动画，叫做run
    bot.animations.add('run');
    // 进行动画，每秒15帧，循环播放
    bot.animations.play('run', 15, true);
}
