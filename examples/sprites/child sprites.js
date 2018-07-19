
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update, render: render });

var parent;
var child;

function preload() {
    game.load.image('mushroom', 'assets/sprites/mushroom2.png');
    game.load.spritesheet('mummy', 'assets/sprites/metalslug_mummy37x45.png', 37, 45, 18);
}

function create() {
    parent = game.add.sprite(100, 100, 'mushroom');
    // 增加子精灵，位置是相对父精灵计算的
    parent.addChild(game.make.sprite(-50, -50, 'mummy'));
    parent.addChild(game.make.sprite(100, 0, 'mummy'));
    parent.addChild(game.make.sprite(200, 200, 'mummy'));
    // 这个精灵会走得更快
    child = parent.addChild(game.make.sprite(0, 100, 'mummy'));
}

function update() {
	// 父精灵移动
    parent.x += 0.1;
    // 子精灵移动，所以child的速度比其他的快
    child.x += 0.1;

}

function render() {
    game.debug.text(parent.width, 32, 32);
    // 画出绿色的块
    game.debug.geom(parent.getBounds());
}
