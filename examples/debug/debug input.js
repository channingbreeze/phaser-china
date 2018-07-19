
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

var sprite;
var counter = 0;
var step = Math.PI * 2 / 360;

function preload() {
    game.load.image('sprite', 'assets/sprites/phaser2.png');
}

function create() {
    sprite = game.add.sprite(0, 0, 'sprite');
    sprite.alpha = 0.5;
    sprite.x = game.width / 2;
    sprite.anchor.x = sprite.anchor.y = 0.5;
    // 开启输入
    sprite.inputEnabled = true;
}

function update() {
    var tStep = Math.sin( counter );
    sprite.y = (game.height/2) + tStep * 30;
    sprite.rotation += Phaser.Math.degToRad( 0.1 * tStep );
    counter += step;
}

function render() {
    // 显示鼠标信息
    game.debug.inputInfo(32, 32);
    // 显示精灵的交互信息
    game.debug.spriteInputInfo(sprite, 32, 130);
    // 显示鼠标动态信息
    game.debug.pointer( game.input.activePointer );
}
