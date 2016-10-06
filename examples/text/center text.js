
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

var text;

function preload() {
    game.load.image('bg', 'assets/skies/deepblue.png');
}

function create() {
    game.add.image(0, 0, 'bg');
    // 绘制一个蓝色的条
    var bar = game.add.graphics();
    bar.beginFill(0x000000, 0.2);
    bar.drawRect(0, 100, 800, 100);
    // 文本
    var style = { font: "bold 32px Arial", fill: "#fff", boundsAlignH: "center", boundsAlignV: "middle" };
    text = game.add.text(0, 0, "phaser 2.4 text bounds", style);
    text.setShadow(3, 3, 'rgba(0,0,0,0.5)', 2);
    // x:0 y:100 width:800 height:100
    text.setTextBounds(0, 100, 800, 100);
}
