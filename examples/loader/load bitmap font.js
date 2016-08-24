
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
	// 加载图片字体，这里需要一个png和一个XML
	// XML文件要是UTF-8编码，一般使用工具生成，windows下可用BMFont：http://www.angelcode.com/products/bmfont/，mac下可用Glyph Designer：http://www.71squared.com/en/glyphdesigner
    game.load.bitmapFont('desyrel', 'assets/fonts/bitmapFonts/desyrel.png', 'assets/fonts/bitmapFonts/desyrel.xml');
}

var text;

function create() {
    game.stage.backgroundColor = '#0072bc';
    // 使用bitmap字体
    text = game.add.bitmapText(200, 100, 'desyrel', 'Bitmap Fonts!', 64);
}

function update() {
    text.setText('Bitmap Fonts!\nx: ' + Math.round(game.input.x) + ' y: ' + Math.round(game.input.y));
}
