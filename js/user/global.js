/**
<<<<<<< Updated upstream
=======
* @author       Chris Campbell <iforce2d@gmail.com>
>>>>>>> Stashed changes
* @author       Richard Davey <rich@photonstorm.com>
* @copyright    2015 Photon Storm Ltd.
* @license      {@link http://choosealicense.com/licenses/no-license/|No License}
* 
<<<<<<< Updated upstream
* @description  This example requires the Particle Storm Plugin to run.
*               For more details please see http://phaser.io/shop/plugins/particlestorm
*/

var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, render: render });

var manager = null;
var emitter = null;
var particle = null;

function preload() {

    game.forceSingleUpdate = true;

    game.load.image('logo', 'assets/particlestorm/logo-flat.png');

    game.load.path = 'assets/particlestorm/particles/';

    game.load.images(['ball1', 'block1', 'block2', 'block3', '4x4', 'spark']);

}

function create() {

    manager = this.game.plugins.add(Phaser.ParticleStorm);

    //  Emit children within a rectangle shape - rect.x/y is relative to parent, not absolute

    var parent = {
        image: 'block1',
        lifespan: 6000,
        vx: 2,
        emit: { name: "child", value: 0.05, rect: { x: -16, y: -16, width: 32, height: 32 } }
    };

    var child = {
        lifespan: 4000,
        image: '4x4',
        sendToBack: true,
        vx: { min: -1, max: -2 }
    };

    manager.addData('basic', parent);
    manager.addData('child', child);

    emitter = manager.createEmitter();

    emitter.addToWorld();

    //  Emit a single parent particle (which will automatically spawn children)
    particle = emitter.emit('basic', 100, 350);

    //  Emit a new one on click
    game.input.onDown.add(release, this);

    game.add.image(432, 487, 'logo');

}

function release(pointer) {

    //emitter.emit('basic', 0, pointer.y);

}

function render() {

    game.debug.text("Click to release", 32, 32);
    game.debug.text("Lifespan: " + particle.lifePercent + '%', 32, 64);

    emitter.debug(432, 522);
=======
* @description  This example requires the Phaser Box2D Plugin to run.
*               For more details please see http://phaser.io/shop/plugins/box2d
*/

var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {

    game.load.image('atari', 'assets/sprites/atari130xe.png');

}

var sprite;
var cursors;

function create() {

    game.stage.backgroundColor = '#124184';

    //  Enable Box2d physics
    game.physics.startSystem(Phaser.Physics.BOX2D);

    //  Add a sprite
    sprite = game.add.sprite(200, 200, 'atari');

    //  Enable for physics. This creates a default rectangular body.
    game.physics.box2d.enable(sprite);

    //  Modify a few body properties
    sprite.body.fixedRotation = true;

    game.add.text(5, 5, 'Use arrow keys to move.', { fill: '#ffffff', font: '14pt Arial' });

    cursors = game.input.keyboard.createCursorKeys();

}

function update() {

    sprite.body.setZeroVelocity();

    if (cursors.left.isDown)
    {
        sprite.body.moveLeft(400);
    }
    else if (cursors.right.isDown)
    {
        sprite.body.moveRight(400);
    }

    if (cursors.up.isDown)
    {
        sprite.body.moveUp(400);
    }
    else if (cursors.down.isDown)
    {
        sprite.body.moveDown(400);
    }
>>>>>>> Stashed changes

}
