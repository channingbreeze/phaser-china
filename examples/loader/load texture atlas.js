
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载atlas json格式的资源
    game.load.atlas('test', 'assets/sprites/atlas_hash_trim.png', 'assets/sprites/atlas_json_array_trim.json');
    // 水下的场景
    game.load.image('undersea', 'assets/pics/undersea.jpg');
    game.load.image('coral', 'assets/pics/seabed.png');
}

var octopus;

function create() {
    game.add.sprite(0, 0, 'undersea');
    game.add.sprite(0, 0, 'test');
    game.add.sprite(0, 466, 'coral');
}
