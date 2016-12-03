
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render  });

var sprite;
var counter = 0;
var step = Math.PI * 2 / 360;

function preload() {
    game.load.image('sprite', 'assets/sprites/phaser2.png');
}

function create() {
	// 开启物理引擎
    game.physics.startSystem(Phaser.Physics.ARCADE);
    sprite = game.add.sprite(game.world.centerX, game.world.centerY, 'sprite');
    sprite.anchor.set(0.5);
    // 开启物理属性
    game.physics.arcade.enable(sprite);
}

function update() {
    var tStep = Math.sin(counter);
    sprite.body.y = 120 + tStep * 60;
    counter += step;
}

function render() {
	// 显示精灵体
    game.debug.body(sprite);
}
