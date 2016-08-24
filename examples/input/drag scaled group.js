
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('grid', 'assets/tests/debug-grid-1920x1920.png');
    game.load.image('atari', 'assets/sprites/atari800xl.png');
}

function create() {
    game.add.sprite(0, 0, 'grid');
    // 创建一个组
    var group = game.add.group();
    // 设置组的scale
    group.scale.set(1.5);
    var atari1 = group.create(100, 100, 'atari');
    // 设置精灵的scale，总的scale=1.5X0.7=1.05
    atari1.scale.set(0.7);
    atari1.inputEnabled = true;
    atari1.input.enableDrag(false);
    // 普通精灵
    var atari2 = game.add.sprite(500, 300, 'atari');
    atari2.inputEnabled = true;
    atari2.input.enableDrag(true);
}
