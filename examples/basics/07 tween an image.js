
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

var sprite;

function preload() {
    game.load.image('einstein', 'assets/pics/ra_einstein.png');
}

function create() {
    sprite = game.add.sprite(0, 0, 'einstein');
    // 添加一个Tween动画
    tween = game.add.tween(sprite);
    // 5秒内线性移动到x为100处
    tween.to({ x: 100 }, 5000, 'Linear', true, 0);
}
