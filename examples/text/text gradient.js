
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

var text = null;

function create() {
    text = game.add.text(game.world.centerX, game.world.centerY, "- phaser gradient text -");
    text.anchor.set(0.5);
    text.align = 'center';
    text.font = 'Arial';
    text.fontWeight = 'bold';
    text.fontSize = 70;
    // 创建一个渐变
    var grd = text.context.createLinearGradient(0, 0, 0, text.height);
    // 设置颜色
    grd.addColorStop(0, '#8ED6FF');   
    grd.addColorStop(1, '#004CB3');
    // 应用渐变
    text.fill = grd;
}
