
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create, render: render });

var timer;
var total = 0;

function create() {
    game.stage.backgroundColor = '#000';
    // 创建定时器
    timer = game.time.create(false);
    // 每2秒updateCounter
    timer.loop(2000, updateCounter, this);
    // 手动开始
    timer.start();
}

function updateCounter() {
    total++;
}

function render() {
    game.debug.text('Time until event: ' + timer.duration.toFixed(0), 32, 32);
    game.debug.text('Loop Count: ' + total, 32, 64);
}
