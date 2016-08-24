
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载各种资源
	game.load.image('image', 'assets/sprites/phaser2.png');
    game.load.text('html', 'http://localhost/phaser-china');
    game.load.tilemap('mario', 'assets/tilemaps/maps/super_mario.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.audio('sfx', [ 'assets/audio/SoundEffects/squit.mp3', 'assets/audio/SoundEffects/squit.ogg' ]);
}

function create() {
	// 检查是否在缓存中
    var image = game.cache.checkImageKey('image');
    var text = game.cache.checkTextKey('html');
    var tilemap = game.cache.checkTilemapKey('mario');
    var audio = game.cache.checkSoundKey('sfx');
    // 故意检测一个不在缓存的
    var broken = game.cache.checkImageKey('playerHead');
    // 输出信息
    game.add.text(40, 40, 'Check Image Key: ' + image, { fill: '#ffffff' });
    game.add.text(40, 80, 'Check Text Key: ' + text, { fill: '#ffffff' });
    game.add.text(40, 120, 'Check Tilemap Key: ' + tilemap, { fill: '#ffffff' });
    game.add.text(40, 160, 'Check Audio Key: ' + audio, { fill: '#ffffff' });
    game.add.text(40, 200, 'Check Image 2 Key: ' + broken, { fill: '#ffffff' });
}
