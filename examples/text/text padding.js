
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

WebFontConfig = {
    active: function() { game.time.events.add(Phaser.Timer.SECOND, createText, this); },
    google: {
      families: ['Fontdiner Swanky']
    }
};

function preload() {
    game.load.script('webfont', 'http://localhost/phaser-china/assets/text/webfont.js');
}

var text = null;
var grd;

function create() {
    game.stage.setBackgroundColor(0x2d2d2d);
}

function createText() {
    text = game.add.text(game.world.centerX, game.world.centerY, "- phaser -\nrocking with\ngoogle web fonts");
    text.anchor.setTo(0.5);
    text.font = 'Fontdiner Swanky';
    text.fontSize = 60;
    // 下面这一句设置padding
    text.padding.set(10, 16);
    grd = text.context.createLinearGradient(0, 0, 0, text.canvas.height);
    grd.addColorStop(0, '#8ED6FF');   
    grd.addColorStop(1, '#004CB3');
    text.fill = grd;
    text.align = 'center';
    text.stroke = '#000000';
    text.strokeThickness = 2;
    text.setShadow(5, 5, 'rgba(0,0,0,0.5)', 5);
    text.inputEnabled = true;
    text.input.enableDrag();
    text.events.onInputOver.add(over, this);
    text.events.onInputOut.add(out, this);
}

function out() {
    text.fill = grd;
}

function over() {
    text.fill = '#ff00ff';
}
