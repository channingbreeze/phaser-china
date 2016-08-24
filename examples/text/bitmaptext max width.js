
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.bitmapFont('gem', 'assets/fonts/bitmapFonts/gem.png', 'assets/fonts/bitmapFonts/gem.xml');
}

var bpmText;
var text = "Lorem ipsum ";
var words = [ 
    'dolor', 'sit', 'amet', 'consectetuer', 'adipiscing', 'elit', 'aenean', 
    'commodo', 'ligula', 'eget', 'massa', 'sociis', 'natoque', 'penatibus',
    'et', 'magnis', 'dis', 'parturient', 'montes' ];
var run = 5;
var current = 2;

function create() {
    game.stage.backgroundColor = 0x272822;
    bmpText = game.add.bitmapText(32, 32, 'gem', text, 16);
    // 设置文本的最大宽度
    bmpText.maxWidth = 400;
    // 创建一个标记
    var marker = game.add.graphics(432, 0);
    marker.beginFill(0xa6e22e);
    marker.drawRect(0, 0, 1, game.height);
    marker.endFill();
    // 写200个单词
    game.time.events.repeat(100, 200, addText, this);
}

function addText() {
	// 随机选一个单词
    var word = game.rnd.pick(words);
    if (current === 0) {
        // 每句话首字母大写
        word = word[0].toUpperCase() + word.slice(1);
    }
    text += word;
    current++;
    // 一句话结束
    if (current === run) {
        text += ". ";
        run = game.rnd.between(3, 6);
        current = 0;
    } else {
        text += " ";
    }
    bmpText.text = text;
}
