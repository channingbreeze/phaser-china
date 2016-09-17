
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
	// csv的tilemap
	game.load.tilemap('map', 'assets/tilemaps/csv/catastrophi_level2.csv', null, Phaser.Tilemap.CSV);
    game.load.image('tiles', 'assets/tilemaps/tiles/catastrophi_tiles_16.png');
}

var map;
var layer;
var cursors;

function create() {
	// 创建tilemap，指定每个tile的大小，16x16
	map = game.add.tilemap('map', 16, 16);
	// image添加上
	map.addTilesetImage('tiles');
	// layer
	layer = map.createLayer(0);
    layer.resizeWorld();
    cursors = game.input.keyboard.createCursorKeys();
    var help = game.add.text(16, 16, 'Arrows to scroll', { font: '14px Arial', fill: '#ffffff' });
    help.fixedToCamera = true;
}

function update() {
    if (cursors.left.isDown) {
        game.camera.x -= 4;
    } else if (cursors.right.isDown) {
        game.camera.x += 4;
    }
    if (cursors.up.isDown) {
        game.camera.y -= 4;
    } else if (cursors.down.isDown) {
        game.camera.y += 4;
    }
}

function render() {
}
