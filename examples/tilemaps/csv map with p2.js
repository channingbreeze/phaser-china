
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.tilemap('map', 'assets/tilemaps/csv/catastrophi_level2.csv', null, Phaser.Tilemap.CSV);
    game.load.image('tiles', 'assets/tilemaps/tiles/catastrophi_tiles_16.png');
    game.load.image('player', 'assets/sprites/tinycar.png');
}

var map;
var layer;
var cursors;
var player;

function create() {
    game.physics.startSystem(Phaser.Physics.P2JS);
    // csv map
    map = game.add.tilemap('map', 16, 16);
    map.addTilesetImage('tiles');
    layer = map.createLayer(0);
    layer.resizeWorld();
    map.setCollisionBetween(54, 83);
    // 只有设置了碰撞的才能被看见
    game.physics.p2.convertTilemap(map, layer);
    player = game.add.sprite(48, 48, 'player');
    // p2物理引擎
    game.physics.p2.enable(player);
    game.physics.p2.setBoundsToWorld(true, true, true, true, false);
    game.camera.follow(player);
    cursors = game.input.keyboard.createCursorKeys();
    var help = game.add.text(16, 16, 'Arrows to move', { font: '14px Arial', fill: '#ffffff' });
    help.fixedToCamera = true;
}

function update() {
    if (cursors.left.isDown) {
        // 左转
    	player.body.rotateLeft(100);
    } else if (cursors.right.isDown) {
        player.body.rotateRight(100);
    } else {
        player.body.setZeroRotation();
    }
    if (cursors.up.isDown) {
    	// 前进
        player.body.thrust(400);
    } else if (cursors.down.isDown) {
    	// 后退
    	player.body.reverse(400);
    }
}

function render() {
}
