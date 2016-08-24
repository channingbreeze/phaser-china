
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('ball', 'assets/sprites/pangball.png');
}

var counter = 0;
var text = 0;

function create() {
	// 背景色
    game.stage.backgroundColor = '#6688ee';
    // 文本
    text = game.add.text(game.world.centerX, game.world.centerY, 'Counter: 0', { font: "64px Arial", fill: "#ffffff", align: "center" });
    text.anchor.setTo(0.5, 0.5);
    // 每秒钟调用一次updateCounter
    game.time.events.loop(Phaser.Timer.SECOND, updateCounter, this);
}

function updateCounter() {
    counter++;
    text.setText('Counter: ' + counter);
}

function render() {
    game.debug.text("Time until event: " + game.time.events.duration.toFixed(0), 32, 32);
    game.debug.text("Next tick: " + game.time.events.next.toFixed(0), 32, 64);
}
