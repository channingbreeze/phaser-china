
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('grid', 'assets/tests/debug-grid-1920x1920.png');
    game.load.image('atari', 'assets/sprites/atari800xl.png');
}

function create() {
    game.add.sprite(0, 0, 'grid');
    var atari1 = game.add.sprite(300, 300, 'atari');
    // 启动输入系统
    atari1.inputEnabled = true;
    // 允许拖拽，第一个参数true代表拖拽的时候鼠标位于精灵中心
    atari1.input.enableDrag(true);
}
