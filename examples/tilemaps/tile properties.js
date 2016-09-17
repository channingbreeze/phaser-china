
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载tilemap
    game.load.tilemap('map', 'assets/tilemaps/maps/tile_properties.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.image('tiles', 'assets/tilemaps/tiles/gridtiles.png');
}

var map;
var layer;
var marker;
var cursors;

function create() {
    game.physics.startSystem(Phaser.Physics.ARCADE);
    // 添加tilemap
    map = game.add.tilemap('map');
    map.addTilesetImage('tiles');
    // 创造层
    layer = map.createLayer('Tile Layer 1');
    layer.resizeWorld();
    // 白色框
    marker = game.add.graphics();
    marker.lineStyle(2, 0xffffff, 1);
    marker.drawRect(0, 0, 32, 32);
    // 鼠标事件
    game.input.addMoveCallback(updateMarker, this);
    game.input.onDown.add(getTileProperties, this);
    cursors = game.input.keyboard.createCursorKeys();
}

function getTileProperties() {
	// 获取x和y的tile坐标
    var x = layer.getTileX(game.input.activePointer.worldX);
    var y = layer.getTileY(game.input.activePointer.worldY);
    // 获取tile
    var tile = map.getTile(x, y, layer);
}

function updateMarker() {
    marker.x = layer.getTileX(game.input.activePointer.worldX) * 32;
    marker.y = layer.getTileY(game.input.activePointer.worldY) * 32;
}

