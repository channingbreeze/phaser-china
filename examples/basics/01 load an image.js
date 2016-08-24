
// 前面两个参数代表游戏区域 800x600 px
// Phaser.AUTO表示自动选择Canvas或者webGL
// 'phaser-example'表示将游戏区域放在id为phaser-example的元素中
// 最后一个参数指定回调，preload预加载资源，create创建游戏
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载一个图片，之后可通过 einstein 来引用
    game.load.image('einstein', 'assets/pics/ra_einstein.png');
}

function create() {
	// 在(0,0)位置显示该图片
    game.add.sprite(0, 0, 'einstein');
}
