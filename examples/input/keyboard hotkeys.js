
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.image('phaser', 'assets/sprites/phaser-dude.png');
    game.load.image('logo', 'assets/sprites/phaser_tiny.png');
    game.load.image('pineapple', 'assets/sprites/pineapple.png');
}

var key1;
var key2;
var key3;

function create() {
    game.stage.backgroundColor = '#736357';
    game.add.text(0, 0, 'Press one, two or three !', {} );
    // 数字键
    key1 = game.input.keyboard.addKey(Phaser.Keyboard.ONE);
    key1.onDown.add(addPhaserDude, this);
    key2 = game.input.keyboard.addKey(Phaser.Keyboard.TWO);
    key2.onDown.add(addPhaserLogo, this);
    key3 = game.input.keyboard.addKey(Phaser.Keyboard.THREE);
    key3.onDown.add(addPineapple, this);
}

function update() {
	// 鼠标在游戏区域
    if (game.input.activePointer.withinGame) {
        game.input.enabled = true;
        game.stage.backgroundColor = '#736357';
    } else {
        game.input.enabled = false;
        game.stage.backgroundColor = '#731111';
    }
}

function addPhaserDude () {
    game.add.sprite(game.world.randomX, game.world.randomY, 'phaser');
}

function addPhaserLogo () {
    game.add.sprite(game.world.randomX, game.world.randomY, 'logo');
}

function addPineapple () {
    game.add.sprite(game.world.randomX, game.world.randomY, 'pineapple');
}
