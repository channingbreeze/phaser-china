
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.tilemap('mario', 'assets/tilemaps/maps/super_mario.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.image('tiles', 'assets/tilemaps/tiles/super_mario.png');
    game.load.image('player', 'assets/sprites/phaser-dude.png');
}

var map;
var layer;
var p;
var cursors;

function create() {
    map = game.add.tilemap('mario');
    // 此处的SuperMarioBros-World1-1与json中tilesets的name对应
    map.addTilesetImage('SuperMarioBros-World1-1', 'tiles');
    // 此处与json中layer的name对应
    layer = map.createLayer('World1');
    // resizeWorld会根据tilemap重新设置world的大小
    layer.resizeWorld();
    // wrap为true会填充整个区域
    layer.wrap = true;
    cursors = game.input.keyboard.createCursorKeys();
}

function update() {
    if (cursors.left.isDown) {
        game.camera.x -= 8;
    } else if (cursors.right.isDown) {
        game.camera.x += 8;
    }
    if (cursors.up.isDown) {
        game.camera.y -= 8;
    } else if (cursors.down.isDown) {
        game.camera.y += 8;
    }
}
