
// 这是一个自定义的游戏对象
MonsterBunny = function (game, x, y, rotateSpeed) {
    // 继承Phaser.Sprite
	Phaser.Sprite.call(this, game, x, y, 'bunny');
    this.rotateSpeed = rotateSpeed;
};

// 继承Phaser.Sprite的原型
MonsterBunny.prototype = Object.create(Phaser.Sprite.prototype);
MonsterBunny.prototype.constructor = MonsterBunny;

/**
 * 这个update被自动被World.update调用
 */
MonsterBunny.prototype.update = function() {
    this.angle += this.rotateSpeed;
};

var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('bunny', 'assets/sprites/bunny.png');
}

function create() {
	// 第一个自定义精灵
    var wabbit = new MonsterBunny(game, 200, 300, 1);
    wabbit.anchor.setTo(0.5, 0.5);
    // 第二个自定义精灵
    var wabbit2 = new MonsterBunny(game, 600, 300, 0.5);
    wabbit2.anchor.setTo(0.5, 0.5);
    // 加入场景
    game.add.existing(wabbit);
    game.add.existing(wabbit2);
}
