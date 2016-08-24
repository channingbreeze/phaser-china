
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('chaos', 'assets/pics/hotshot-chaos_in_tokyo.png');
}

var sprite;
var mask;

function create() {
    sprite = game.add.sprite(0, 0, 'chaos');
    sprite.scale.set(2);
    // 添加一个graphics作为mask
    mask = game.add.graphics(0, 0);
    // 一个圆
    mask.beginFill(0xffffff);
    mask.drawCircle(100, 100, 100);
    // 应用mask
    sprite.mask = mask;

    game.input.addMoveCallback(move, this);
}

function move(pointer, x, y) {
	// 移动mask
	mask.x = x - 100;
	mask.y = y - 100;
}
