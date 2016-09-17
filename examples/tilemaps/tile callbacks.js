
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.tilemap('map', 'assets/tilemaps/maps/tile_collision_test.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.image('ground_1x1', 'assets/tilemaps/tiles/ground_1x1.png');
    game.load.image('phaser', 'assets/sprites/arrow.png');
    game.load.spritesheet('coin', 'assets/sprites/coin.png', 32, 32);
}

var map;
var layer;
var sprite;
var cursors;

function create() {
    game.physics.startSystem(Phaser.Physics.ARCADE);
    // tilemap
    map = game.add.tilemap('map');
    map.addTilesetImage('ground_1x1');
    map.addTilesetImage('coin');
    map.setCollisionBetween(1, 12);
    // 碰撞到id为26的tile时，回调
    map.setTileIndexCallback(26, hitCoin, this);
    // 碰撞到2,0位置的tile时，回调
    map.setTileLocationCallback(2, 0, 1, 1, hitCoin, this);
    // game.device.canvasBitBltShift = false;
    layer = map.createLayer('Tile Layer 1');
    layer.resizeWorld();
    sprite = game.add.sprite(260, 100, 'phaser');
    sprite.anchor.set(0.5);
    game.physics.enable(sprite);
    sprite.body.setSize(16, 16, 8, 8);
    // 最大角速度
    sprite.body.maxAngular = 500;
    // 角速度阻尼
    sprite.body.angularDrag = 50;
    game.camera.follow(sprite);
    cursors = game.input.keyboard.createCursorKeys();
}

function hitCoin(sprite, tile) {
    tile.alpha = 0.2;
    layer.dirty = true;
    return false;
}

function update() {
    game.physics.arcade.collide(sprite, layer);
    sprite.body.velocity.x = 0;
    sprite.body.velocity.y = 0;
    sprite.body.angularVelocity = 0;
    if (cursors.left.isDown) {
        sprite.body.angularVelocity = -200;
    } else if (cursors.right.isDown) {
        sprite.body.angularVelocity = 200;
    }
    if (cursors.up.isDown) {
        game.physics.arcade.velocityFromAngle(sprite.angle, 200, sprite.body.velocity);
    }
}

function render() {
    game.debug.body(sprite);
}
