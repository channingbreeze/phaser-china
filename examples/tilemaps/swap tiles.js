
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.tilemap('desert', 'assets/tilemaps/maps/desert.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.image('tiles', 'assets/tilemaps/tiles/tmw_desert_spacing.png');
    game.load.image('car', 'assets/sprites/car90.png');
}

var map;
var layer;
var cursors;
var sprite;

function create() {
    map = game.add.tilemap('desert');
    map.addTilesetImage('Desert', 'tiles');
    layer = map.createLayer('Ground');
    layer.resizeWorld();
    sprite = game.add.sprite(450, 80, 'car');
    sprite.anchor.setTo(0.5, 0.5);
    game.physics.enable(sprite, Phaser.Physics.ARCADE);
    game.camera.follow(sprite);
    cursors = game.input.keyboard.createCursorKeys();
    game.input.onDown.addOnce(swapTiles, this);
}

function swapTiles() {
	// 交换tile
    map.swap(30, 31);
}

function update() {
    sprite.body.velocity.x = 0;
    sprite.body.velocity.y = 0;
    sprite.body.angularVelocity = 0;
    if (cursors.left.isDown) {
        sprite.body.angularVelocity = -200;
    } else if (cursors.right.isDown) {
        sprite.body.angularVelocity = 200;
    }
    if (cursors.up.isDown) {
        sprite.body.velocity.copyFrom(game.physics.arcade.velocityFromAngle(sprite.angle, 300));
    }
}

function render() {
    game.debug.text('Click to swap tiles', 32, 32, 'rgb(0,0,0)');
    game.debug.text('Tile X: ' + layer.getTileX(sprite.x), 32, 48, 'rgb(0,0,0)');
    game.debug.text('Tile Y: ' + layer.getTileY(sprite.y), 32, 64, 'rgb(0,0,0)');
}
