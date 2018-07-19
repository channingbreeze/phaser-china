
MonsterBunny = function (game, rotateSpeed) {
	// 随机位置
    Phaser.Sprite.call(this, game, game.world.randomX, game.world.randomY, 'bunny');
    this.anchor.setTo(0.5, 0.5);
    this.rotateSpeed = rotateSpeed;
    var randomScale = 0.1 + Math.random();
    this.scale.setTo(randomScale, randomScale)
    // 加入场景
    game.add.existing(this);
};

MonsterBunny.prototype = Object.create(Phaser.Sprite.prototype);
MonsterBunny.prototype.constructor = MonsterBunny;

MonsterBunny.prototype.update = function() {
    this.angle += this.rotateSpeed;
};

var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('bunny', 'assets/sprites/bunny.png');
}

function create() {
    for (var i = 0.1; i < 2; i += 0.1) {
        new MonsterBunny(game, i);
    }
}
