
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

var text = null;
var textReflect = null;

function create() {
    game.stage.backgroundColor = 0x3b0760;
    text = game.add.text(game.world.centerX, game.world.centerY, "- PHASER -");
    text.anchor.set(0.5);
    text.align = 'center';
    text.font = 'Arial';
    text.fontWeight = 'bold';
    text.fontSize = 70;
    text.fill = '#ffffff';
    // 创建倒影文字
    textReflect = game.add.text(game.world.centerX, game.world.centerY + 50, "- PHASER -");
    textReflect.anchor.set(0.5);
    textReflect.align = 'center';
    // 这里是关键
    textReflect.scale.y = -1;
    textReflect.font = 'Arial';
    textReflect.fontWeight = 'bold';
    textReflect.fontSize = 70;
    // 渐变
    var grd = textReflect.context.createLinearGradient(0, 0, 0, text.canvas.height);
    grd.addColorStop(0, 'rgba(255,255,255,0)');
    grd.addColorStop(1, 'rgba(255,255,255,0.08)');
    textReflect.fill = grd;
}
