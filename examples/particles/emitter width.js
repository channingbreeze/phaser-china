
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

var emitter;

function preload() {
    game.load.image('bubble', 'assets/particles/bubble.png');
    game.load.image('water', 'assets/skies/sunset.png');
}

function create() {
    game.add.image(0, 0, 'water');
    // 粒子器坐标点在(game.world.centerX, 200)，最大粒子数200
    emitter = game.add.emitter(game.world.centerX, 200, 200);
    // 发射器宽度，所以范围是game.world.centerX-400 ~ game.world.centerX+400
    emitter.width = 800;
    // 发射bubble
    emitter.makeParticles('bubble');
    // 最小速度和最大速度
    emitter.minParticleSpeed.set(0, 300);
    emitter.maxParticleSpeed.set(0, 400);
    // 旋转、透明度、尺寸范围
    emitter.setRotation(0, 0);
    emitter.setAlpha(0.3, 0.8);
    emitter.setScale(0.5, 0.5, 1, 1);
    // 重力
    emitter.gravity = -200;
    // false代表粒子不要一次性全部发射
    // 5000代表生命时长，每个粒子最多存在5s
    // 100代表频率，每100ms发射一个粒子
    emitter.start(false, 5000, 100);
}

function render() {
	// 粒子数
	game.debug.text(emitter.total, 32, 32);
}
