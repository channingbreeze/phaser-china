
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

// 文本
var text;
// 计数器
var counter = 0;

function preload () {
    game.load.image('einstein', 'assets/pics/ra_einstein.png');
}

function create() {
	// 将图片放在游戏区域中心
    var image = game.add.sprite(game.world.centerX, game.world.centerY, 'einstein');
    // 将图片锚点设置为中心
    image.anchor.set(0.5);
    // 允许图片响应输入
    image.inputEnabled = true;
    // 在(250,16)处创建白色文字
    text = game.add.text(250, 16, '', { fill: '#ffffff' });
    // 图片点击时回调listener，上下文为this
    image.events.onInputDown.add(listener, this);
}

function listener () {
	// 计数
    counter++;
    // 修改文本
    text.text = "You clicked " + counter + " times!";
}
