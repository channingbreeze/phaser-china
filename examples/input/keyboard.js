
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

var ufo;
var leftBtn;
var rightBtn;
var speed = 4;

function preload() {
	// 设置游戏边界
    game.world.setBounds(0, 0, 1280, 600);

    game.load.image('ground', 'assets/tests/ground-2x.png');
    game.load.image('river', 'assets/tests/river-2x.png');
    game.load.image('sky', 'assets/tests/sky-2x.png');
    game.load.image('cloud0', 'assets/tests/cloud-big-2x.png');
    game.load.image('cloud1', 'assets/tests/cloud-narrow-2x.png');
    game.load.image('cloud2', 'assets/tests/cloud-small-2x.png');

    game.load.spritesheet('button', 'assets/buttons/arrow-button.png', 112, 95);

    game.load.image('ufo', 'assets/sprites/ufo.png');
}

function create() {
    // 背景
    game.add.tileSprite(0, 0,1280,600, 'sky');
    game.add.sprite(0, 360, 'ground');
    game.add.sprite(0, 400, 'river');
    game.add.sprite(200, 120, 'cloud0');
    game.add.sprite(-60, 120, 'cloud1');
    game.add.sprite(900, 170, 'cloud2');
    // 创建精灵
    ufo = game.add.sprite(320, 240, 'ufo');
    ufo.anchor.setTo(0.5, 0.5);
    // 摄像机跟随精灵
    game.camera.follow(ufo);
    // 方向
    leftBtn = game.add.sprite(160 - 112, 200, 'button', 0);
    leftBtn.alpha = 0;
    rightBtn = game.add.sprite(640 - 112, 200, 'button', 1);
    rightBtn.alpha = 0;
}

function update() {
	// 按键逻辑
    if (game.input.keyboard.isDown(Phaser.Keyboard.LEFT)) {
        ufo.x -= speed;
        ufo.angle = -15;
        leftBtn.alpha = 0.6;
    } else if (game.input.keyboard.isDown(Phaser.Keyboard.RIGHT)) {
        ufo.x += speed;
        ufo.angle = 15;
        rightBtn.alpha = 0.6;
    } else {
        ufo.rotation = 0;
        leftBtn.alpha = rightBtn.alpha = 0;
    }
}

function render() {
    game.debug.text('Hold left/right to move the ufo.');
}
