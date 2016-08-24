
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
	// 加载声音，第二个参数是一个数组，是同一个音效的不同格式的文件，这里有mp3和ogg(火狐喜欢ogg)，浏览器会依次尝试是否可以加载该音效
    game.load.audio('boden', ['assets/audio/bodenstaendig_2000_in_rock_4bit.mp3', 'assets/audio/bodenstaendig_2000_in_rock_4bit.ogg']);
}

var music;

function create() {
    game.stage.backgroundColor = '#182d3b';
    // 播放音乐
    music = game.sound.play('boden');
}

function render() {
	// 调试信息
    game.debug.soundInfo(music, 32, 32);
    // 判断是否还在解码MP3
    if (music.isDecoding) {
        game.debug.text("Decoding MP3 ...", 32, 200);
    }
}
