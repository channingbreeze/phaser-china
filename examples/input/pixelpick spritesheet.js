
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.spritesheet('mummy', 'assets/sprites/metalslug_mummy37x45.png', 37, 45, 18);
}

var b;

function create() {
    Phaser.Canvas.setSmoothingEnabled(game.context, false);
    b = game.add.sprite(game.world.centerX, game.world.centerY, 'mummy');
    b.anchor.set(0.5);
    b.scale.set(6);
    b.smoothed = false;
    b.animations.add('walk');
    b.animations.play('walk', 5, true);
    // 使能输入事件
    b.inputEnabled = true;
    b.input.pixelPerfectOver = true;
    b.input.useHandCursor = true;
}

function render() {
    game.debug.spriteInputInfo(b, 32, 32);
    game.debug.geom(b.input._tempPoint);
}
