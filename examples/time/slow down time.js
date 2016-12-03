
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('ball', 'assets/sprites/pangball.png');
}

function create() {
	// 开启advancedTiming
	game.time.advancedTiming = true;
    // 设置desiredFps
	game.time.desiredFps = 60;
    // 设置slowMotion，slowMotion=2则速度变为原来一半
	game.time.slowMotion = 1;
	// 普通精灵
	this.ballMovement = game.add.sprite(100, 100, 'ball');
	this.ballMovement.anchor.set(0.5);
	this.ballMovement.vy = 0;
	// 动画精灵
	this.ballTween = game.add.sprite(150, 100, 'ball');
	this.ballTween.anchor.set(0.5);
	startFall(this.ballTween);
	// 粒子系统
    this.emitter = game.add.emitter(game.world.centerX, 200, 200);
    this.emitter.makeParticles('ball');
    this.emitter.start(false, 5000, 20);
    // 设置CPU浪费时间的长度
    this.wasteTime = 0;
    // 这里用到data.GUI，用来调试参数
	var gui = new dat.GUI();
	gui.add(this.game.time, "slowMotion", 1, 16).step(1);
	gui.add(this, "wasteTime", 0, 10).step(1);
	gui.add(this.game.time, "desiredFps", 10, 60).step(5);
	// fps错误通知
	this.game.fpsProblemNotifier.add(handleFpsProblem, this);
}

function update() {
	// 移动精灵
	this.ballMovement.y += this.ballMovement.vy;
	if (this.ballMovement.y > 400) {
		this.ballMovement.vy = -this.ballMovement.vy;
	} else {
		this.ballMovement.vy++;
	}
	// 浪费一段CPU时间，降低渲染效率
	// 这段代码没有意义，纯粹为了耗费CPU
	this.r = 0;
	for(var i = 0; i < this.wasteTime * 500000; i++) {
		var a = Math.sqrt(i);
		this.r += a * a;
	}
}

function render() {
	// fps参数
	game.debug.text('render FPS: ' + (game.time.fps || '--') , 2, 14, "#00ff00");
	if (game.time.suggestedFps !== null) {
		game.debug.text('suggested FPS: ' + game.time.suggestedFps, 2, 28, "#00ff00");
		game.debug.text('desired FPS: ' + game.time.desiredFps, 2, 42, "#00ff00");
	}
}

function startFall(_sprite) {
	// tween动画
	game.add.tween(_sprite).to({y:400}, 500, Phaser.Easing.Quadratic.InOut, true).onComplete.addOnce(bounceTween, this);
}

function bounceTween(_sprite) {
	game.add.tween(_sprite).to({y:100}, 500, Phaser.Easing.Quadratic.InOut, true).onComplete.addOnce(startFall, this);
}

function handleFpsProblem() {
	// 修正desiredFps
	game.time.desiredFps = game.time.suggestedFps;
}
