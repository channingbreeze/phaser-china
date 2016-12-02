
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

WebFontConfig = {
    active: function() { game.time.events.add(Phaser.Timer.SECOND, createText, this); },
    google: {
      families: ['Finger Paint']
    }
};

var text;

function preload() {
    game.load.image('bg', 'assets/skies/deepblue.png');
    game.load.script('webfont', 'http://localhost/phaser-china/assets/text/webfont.js');
}

function create() {
    game.add.image(0, 0, 'bg');
}

function createText() {
	// 样式
    var style = { font: "28px Finger Paint", fill: "#fff", tabs: [ 150, 150, 200 ] };
    text = game.add.text(32, 64, "Armor\tSpells\tDamage\tWeapons", style);
    text.setShadow(-3, 3, 'rgba(0,0,0,0.5)', 0);
    var text2 = game.add.text(32, 180, "100\tFire\t+50\tAxe\n67\tIce\t+23\tStaff", style);
    text2.setShadow(-3, 3, 'rgba(0,0,0,0.5)', 0);
}
