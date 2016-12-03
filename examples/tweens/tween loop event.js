
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.spritesheet('balls', 'assets/sprites/balls.png', 17, 17);
}

var ball;
var tween;
var bounces = 10;

function create() {
    ball = game.add.sprite(400, 0, 'balls', 0);
    // 2.5秒延迟
    tween = game.add.tween(ball).to( { y: game.world.height - ball.height }, 1500, Phaser.Easing.Bounce.Out, true, 2500, 10);
    // 2.5秒延迟后会回调此函数
    tween.onStart.add(onStart, this);
    // 重复的时候回调此函数
    tween.onLoop.add(onLoop, this);
    // 结束的时候回调此函数
    tween.onComplete.add(onComplete, this);
}

function onStart() {
	// 将delay设为0，后面的重复都不会有delay
	tween.delay(0);
}

function onLoop() {
	bounces--;
	if (ball.frame === 5) {
		ball.frame = 0;
	} else {
		ball.frame++;
	}
}

function onComplete() {
	// 最后让它移动到旁边
    tween = game.add.tween(ball).to( { x: 800 - ball.width }, 2000, Phaser.Easing.Exponential.Out, true);
}

function render() {
	game.debug.text('Bounces: ' + bounces, 32, 32);
}
