
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('einstein', 'assets/pics/ra_einstein.png');
}

function create() {
    var image = game.add.sprite(0, 0, 'einstein');
    // 图片启动物理引擎
    game.physics.enable(image, Phaser.Physics.ARCADE);
    // 设置水平速度150
    image.body.velocity.x = 150;
}
