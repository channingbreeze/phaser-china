
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

function create() {
    var text = "- phaser -\n with a sprinkle of \n pixi dust.";
    // 文字样式
    var style = { font: "65px Arial", fill: "#ff0044", align: "center" };
    // 显示文字
    var t = game.add.text(game.world.centerX-300, 0, text, style);
}
