
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {

    game.load.image('atari', 'assets/sprites/atari130xe.png');
    game.load.image('mushroom', 'assets/sprites/mushroom2.png');

}

var sprite1;
var sprite2;

function create() {

    game.physics.startSystem(Phaser.Physics.ARCADE);

    game.stage.backgroundColor = '#2d2d2d';

    sprite1 = game.add.sprite(300, 50, 'atari');
    sprite1.name = 'atari';

    game.physics.enable(sprite1, Phaser.Physics.ARCADE);

    sprite1.body.velocity.y = 100;

    //  This adjusts the collision body size.
    //  220x10 is the new width/height.
    //  See the offset bounding box for another example.
    sprite1.body.setSize(220, 10, 0, 0);

    sprite2 = game.add.sprite(400, 450, 'mushroom');
    sprite2.name = 'mushroom';

    game.physics.enable(sprite2, Phaser.Physics.ARCADE);

    sprite2.body.immovable = true;

}

function update() {

    game.physics.arcade.collide(sprite1, sprite2, collisionHandler, null, this);

}

function collisionHandler (obj1, obj2) {

    game.stage.backgroundColor = '#992d2d';

}

function render() {

    game.debug.body(sprite1);
    game.debug.body(sprite2);

}
