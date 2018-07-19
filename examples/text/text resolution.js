
var config = {
    "width": 800,
    "height": 600,
    "renderer": Phaser.CANVAS,
    "parent": 'phaser-example',
    "resolution": window.devicePixelRatio,
    "state": { "create": create }
};

var game = new Phaser.Game(config);

function create() {
    game.stage.backgroundColor = '#5d5d5d';
    var text = game.add.text(32, 164, "High DPI Text",  { font: "Bold 86px Arial", fill: '#ffffff' });
    // 在一个高分辨率的设备上能够看到区别
    var text2 = game.add.text(32, 300, "Low DPI Text",  { font: "Bold 86px Arial", fill: '#ffffff' });
    text2.resolution = 1;
}
