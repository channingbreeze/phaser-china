
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.atlas('atlas', 'assets/pics/texturepacker_test.png', 'assets/pics/texturepacker_test.json');
}

var chick;
var car;
var mech;
var cop;
var text;

function create() {
    game.stage.backgroundColor = '#404040';
    // 即使被拉伸的图像，在精确像素点击的情况下，还是能捕获
    chick = game.add.sprite(64, 64, 'atlas');
    chick.frameName = 'budbrain_chick.png';
    chick.inputEnabled = true;
    chick.input.pixelPerfectClick = true;
    chick.events.onInputDown.add(clicked, this);
    chick.scale.set(2);

    cop = game.add.sprite(650, 32, 'atlas');
    cop.frameName = 'ladycop.png';
    cop.inputEnabled = true;
    cop.input.pixelPerfectClick = true;
    cop.events.onInputDown.add(clicked, this);
    cop.scale.set(1, 2.5);

    car = game.add.sprite(100, 400, 'atlas');
    car.frameName = 'supercars_parsec.png';
    car.inputEnabled = true;
    car.input.pixelPerfectClick = true;
    car.events.onInputDown.add(clicked, this);
    car.scale.set(0.5);

    mech = game.add.sprite(240, 100, 'atlas');
    mech.frameName = 'titan_mech.png';
    mech.inputEnabled = true;
    mech.input.pixelPerfectClick = true;
    mech.events.onInputDown.add(clicked, this);
    mech.scale.set(1.5, 1);

    text = game.add.text(16, 16, 'Click a sprite', { fill: '#ffffff' });
}

function clicked(sprite) {
    text.text = 'You clicked ' + sprite.frameName;
}
