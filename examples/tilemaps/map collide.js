
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.tilemap('mario', 'assets/tilemaps/maps/super_mario.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.image('tiles', 'assets/tilemaps/tiles/super_mario.png');
    game.load.image('player', 'assets/sprites/phaser-dude.png');
}

var map;
var tileset;
var layer;
var p;
var cursors;

function create() {
    game.physics.startSystem(Phaser.Physics.ARCADE);
    game.stage.backgroundColor = '#787878';
    map = game.add.tilemap('mario');
    map.addTilesetImage('SuperMarioBros-World1-1', 'tiles');
	// 设置碰撞，setCollisionBetween(13, 17)是编号从13到17的tile都设置碰撞
    map.setCollisionBetween(13, 17);
    map.setCollisionBetween(20, 25);
    map.setCollisionBetween(27, 29);
    map.setCollision(40);
    // layer
    layer = map.createLayer('World1');
    //layer.debug = true;
    layer.resizeWorld();
    // player
    p = game.add.sprite(32, 32, 'player');
    game.physics.enable(p);
    game.physics.arcade.gravity.y = 250;
    p.body.bounce.y = 0.2;
    p.body.linearDamping = 1;
    p.body.collideWorldBounds = true;
    // camera
    game.camera.follow(p);
    cursors = game.input.keyboard.createCursorKeys();
}

function update() {
    game.physics.arcade.collide(p, layer);
    p.body.velocity.x = 0;
    if (cursors.up.isDown) {
    	// onFloor才能往上跳
        if (p.body.onFloor()) {
            p.body.velocity.y = -200;
        }
    }
    if (cursors.left.isDown) {
        p.body.velocity.x = -150;
    } else if (cursors.right.isDown) {
        p.body.velocity.x = 150;
    }
}
