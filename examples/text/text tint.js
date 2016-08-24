
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

var clicks = 0;

function create() {
    var text = game.add.text(game.world.centerX, game.world.centerY, "Click me", { font: "65px Arial", fill: "#ffff00", align: "center" });
    text.anchor.set(0.5);
    text.inputEnabled = true;
    text.events.onInputDown.add(down, this);
}

function down(item) {
    clicks++;
    item.text = "clicked " + clicks + " times";
    // tint可以改变颜色
    item.tint = (item.tint === 0xffffff) ? 0xff0000 : 0xffffff;
}
