
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('grid', 'assets/tests/debug-grid-1920x1920.png');
    game.load.image('atari1', 'assets/sprites/atari130xe.png');
    game.load.image('atari2', 'assets/sprites/atari800xl.png');
}

function create() {
    game.add.sprite(0, 0, 'grid');
    atari1 = game.add.sprite(128, 128, 'atari1');
    atari2 = game.add.sprite(256, 256, 'atari2');
    // input使能
    atari1.inputEnabled = true;
    atari2.inputEnabled = true;
    // 允许拖拽
    atari1.input.enableDrag();
    atari2.input.enableDrag();
    // 拖动和松手的时候都按照格子
    atari1.input.enableSnap(32, 32, true, true);
    // 拖动的时候自由，松开的时候按照格子
    atari2.input.enableSnap(32, 32, false, true);
}
