
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

var text;

function create() {
	game.stage.setBackgroundColor(0x2d2d2d);
    text = game.add.text(game.world.centerX, game.world.centerY, '- phaser text stroke -');
    text.anchor.set(0.5);
    text.align = 'center';
    text.font = 'Arial Black';
    text.fontSize = 50;
    text.fontWeight = 'bold';
    text.stroke = '#000000';
    text.strokeThickness = 8;
    text.fill = '#43d637';
    // 文本颜色
    text.addColor('#ff00ff', 9);
    text.addColor('#43d637', 13);
    // 文本描边的颜色
    text.addStrokeColor('#ff0000', 13);
    text.addStrokeColor('#000000', 20);
}
