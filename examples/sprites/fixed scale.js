
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create});

function preload() {
    game.load.image('disk', 'assets/sprites/copy-that-floppy.png');
    game.load.image('ball', 'assets/sprites/mushroom2.png');
}

var parent;
var child;

function create() {
	// 父精灵
    parent = game.add.sprite(100, 100, 'disk');
    parent.name = 'disk';
    // 子精灵
    child = game.make.sprite(0, 0, 'ball');
    parent.addChild(child);
    // 设置子精灵的缩放范围
    child.setScaleMinMax(1, 2);
    // 2s内变为原来3倍大小，线性，自动开始，0延时，重覆1000次，来回播放
    game.add.tween(parent.scale).to( { x: 3, y: 3 }, 2000, Phaser.Easing.Linear.None, true, 0, 1000, true);
}
