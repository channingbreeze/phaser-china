
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('arrow', 'assets/sprites/arrow.png');
}

var sprite;

function create() {

    game.physics.startSystem(Phaser.Physics.ARCADE);

    game.stage.backgroundColor = '#0072bc';

    sprite = game.add.sprite(400, 300, 'arrow');
    sprite.anchor.setTo(0.5, 0.5);

}

function update() {

    //  This will update the sprite.rotation so that it points to the currently active pointer
    //  On a Desktop that is the mouse, on mobile the most recent finger press.
    sprite.rotation = game.physics.arcade.angleToPointer(sprite);

}

function render() {

    game.debug.spriteInfo(sprite, 32, 32);

}
