
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

function create() {
    game.stage.setBackgroundColor(0xefefef);
    var text = createText(100, 'shadow 5');
    // 前两个参数控制x和y的距离，第三个是颜色，第四个是模糊度
    text.setShadow(3, 3, 'rgba(0,0,0,0.5)', 5);
    text = createText(300, 'shadow 0');
    text.setShadow(5, 5, 'rgba(0,0,0,0.5)', 15);
    text = createText(500, 'shadow 10');
    text.setShadow(-5, 5, 'rgba(0,0,0,0.5)', 0);
}

function createText(y, text) {
    var text = game.add.text(game.world.centerX, y, text);
    text.anchor.set(0.5);
    text.align = 'center';
    // 文本样式
    text.font = 'Arial Black';
    text.fontSize = 50;
    text.fontWeight = 'bold';
    text.fill = '#ff00ff';
    return text;
}
