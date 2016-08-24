
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 瓦片地图，一般由两个部分组成，图片和数据，数据可以在文件中通过第二个参数传入，也可以是一个变量，通过第三个参数传入，第四个参数也可以是Phaser.Tilemap.CSV
    game.load.tilemap('mario', 'assets/tilemaps/maps/super_mario.json', null, Phaser.Tilemap.TILED_JSON);
    // 加载对应的图片
    game.load.image('tiles', 'assets/tilemaps/tiles/super_mario.png');
}

var map;
var layer;

function create() {
    game.stage.backgroundColor = '#787878';
    // 地图
    map = game.add.tilemap('mario');
    // 添加TilesetImage，第一个参数是名字
    map.addTilesetImage('SuperMarioBros-World1-1', 'tiles');
    // 创建一个层
    layer = map.createLayer('World1');
}
