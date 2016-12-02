
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('ball', 'assets/sprites/pangball.png');
}

function create() {
    game.stage.backgroundColor = '#6688ee';
    // 启动物理引擎
    game.physics.startSystem(Phaser.Physics.ARCADE);
    game.physics.arcade.gravity.y = 150;
    // 每2秒执行createBall，执行10次
    game.time.events.repeat(Phaser.Timer.SECOND * 2, 10, createBall, this);
}

function createBall() {
    var ball = game.add.sprite(game.world.randomX, 0, 'ball');
    game.physics.enable(ball, Phaser.Physics.ARCADE);
    // 物理属性
    ball.body.bounce.y = 0.9;
    ball.body.collideWorldBounds = true;
}

function render() {
    game.debug.text("Time until event: " + game.time.events.duration.toFixed(0), 32, 32);
    game.debug.text("Next tick: " + game.time.events.next.toFixed(0), 32, 64);
}
