
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

var emitter;
var x;

function preload() {
    game.load.image('bubble', 'assets/particles/bubble.png');
    game.load.image('water', 'assets/demoscene/blue-raster-floor.png');
}

function create() {
    game.add.tileSprite(0, 344, 800, 256, 'water');
    // 粒子器原点
    emitter = game.add.emitter(game.world.centerX, 32, 250);
    // 发射bubble粒子
    emitter.makeParticles('bubble');
    // x方向速度为0，y方向速度为200
    emitter.setXSpeed(0, 0);
    emitter.setYSpeed(200, 200);
    // 每一个被发射的粒子都在最上层
    emitter.bringToTop = true;
    emitter.setRotation(0, 0);
    // aplha 2s内从0.1变为1
    emitter.setAlpha(0.1, 1, 2000);
    // scale 4s内从0.1变为2
    emitter.setScale(0.1, 2, 0.1, 2, 4000);
    emitter.gravity = 100;
    // 发射粒子
    emitter.start(false, 5000, 50);
    // 发射点，相对于原点计算
    emitter.emitX = 200;
    // 发射点做tween动画
    game.add.tween(emitter).to( { emitX: 600 }, 2000, Phaser.Easing.Back.InOut, true, 0, Number.MAX_VALUE, true);
}
