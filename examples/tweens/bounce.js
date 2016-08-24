
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('ball', 'assets/sprites/yellow_ball.png');
}

var ball;

function create() {
    ball = game.add.sprite(300, 0, 'ball');
    // 开始bounce
    startBounceTween();
}

function startBounceTween() {
    ball.y = 0;
    var bounce = game.add.tween(ball);
    bounce.to({ y: game.world.height-ball.height }, 1000 + Math.random() * 3000, Phaser.Easing.Bounce.In);
    // 结束的时候再开始
    bounce.onComplete.add(startBounceTween, this);
    bounce.start();
}
