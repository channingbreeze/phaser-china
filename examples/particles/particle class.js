
// 自定义粒子
MonsterParticle = function (game, x, y) {
	// 从cache中取出纹理
    Phaser.Particle.call(this, game, x, y, game.cache.getBitmapData('particleShade'));
};
// 继承自Phaser.Particle
MonsterParticle.prototype = Object.create(Phaser.Particle.prototype);
MonsterParticle.prototype.constructor = MonsterParticle;
// 创建游戏
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create, render: render });
// create方法
function create() {
    game.stage.backgroundColor = '#003663';
    // 产生一个BitmapData作为Particle的纹理
    var bmd = game.add.bitmapData(64, 64);
    // 径向渐变（类似Canvas的渐变）
    var radgrad = bmd.ctx.createRadialGradient(32, 32, 4, 32, 32, 32);
    radgrad.addColorStop(0, 'rgba(1, 159, 98, 1)');
    radgrad.addColorStop(1, 'rgba(1, 159, 98, 0)');
    bmd.context.fillStyle = radgrad;
    bmd.context.fillRect(0, 0, 64, 64);
    // 把数据放入cache
    game.cache.addBitmapData('particleShade', bmd);
    // 创建粒子发射器
    emitter = game.add.emitter(game.world.centerX, 200, 200);
    emitter.width = 800;
    // 设置粒子，使用我们自定义的粒子
    emitter.particleClass = MonsterParticle;
    emitter.makeParticles();
    // 设置属性
    emitter.minParticleSpeed.set(0, 300);
    emitter.maxParticleSpeed.set(0, 400);
    emitter.setRotation(0, 0);
    emitter.setScale(0.1, 1, 0.1, 1, 12000, Phaser.Easing.Quintic.Out);
    emitter.gravity = -200;
    // 发射
    emitter.start(false, 5000, 100);
    // 鼠标按下的事件处理
    game.input.onDown.add(updateBitmapDataTexture, this);
}

function updateBitmapDataTexture() {
	// 获取缓存中的数据
    var bmd = game.cache.getBitmapData('particleShade');
    // 清除矩形
    bmd.context.clearRect(0, 0, 64, 64);
    // 重新生成纹理
    var radgrad = bmd.ctx.createRadialGradient(32, 32, 4, 32, 32, 32);
    // 随机一个颜色
    var c = Phaser.Color.getRGB(Phaser.Color.getRandomColor(0, 255, 255));
    radgrad.addColorStop(0, Phaser.Color.getWebRGB(c));
    c.a = 0;
    radgrad.addColorStop(1, Phaser.Color.getWebRGB(c));
    bmd.context.fillStyle = radgrad;
    bmd.context.fillRect(0, 0, 64, 64);
}

function render() {
    game.debug.text('Click to regenerate the texture', 16, 28);
}
