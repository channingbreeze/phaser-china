
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
	// 打包的资源
    game.load.pack('level1', 'assets/asset-pack1.json', null, this);
    game.load.image('test', 'assets/sprites/ilkke.png');
}

var pic;
var music;

function create() {
    game.stage.backgroundColor = '#182d3b';
    // 下面两个两个资源在pack中
    game.add.image(0, 0, 'starwars');
    game.add.image(0, 300, 'spaceship');
    // test是图片资源
    game.add.image(700, 360, 'test');
    // 下面的资源都在pack中
    music = game.sound.play('boden');
    game.add.bitmapText(380, 150, 'desyrel', 'Bitmap Fonts', 48);
    var mummy = game.add.sprite(370, 232, 'mummy');
    mummy.animations.add('walk');
    mummy.animations.play('walk', 20, true);
}

function render() {
	// 声音的信息
    game.debug.soundInfo(music, 370, 32);
    // 如果还在加载MP3
    if (music.isDecoding) {
        game.debug.text("Decoding MP3 ...", 32, 200);
    }
}
