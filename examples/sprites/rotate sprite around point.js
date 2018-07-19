
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.image('ship', 'assets/sprites/shmup-ship2.png');
    game.load.image('ball', 'assets/sprites/blue_ball.png');
}

var ship;
var orb;
var cursors;

function create() {
    game.stage.backgroundColor = '#001255';

    ship = game.add.sprite(400, 300, 'ship');
    ship.anchor.setTo(0.5, 0.5);
    // 启动物理特性
    game.physics.arcade.enable(ship);

    orb = game.add.sprite(400, 300, 'ball');
    orb.anchor.setTo(0.5);
    // orb.pivot是旋转的支点
    orb.pivot.x = 100;
    // 启动键盘输入
    cursors = game.input.keyboard.createCursorKeys();
}

function update() {
	// 键盘按键逻辑
    ship.body.velocity.x = 0;
    ship.body.velocity.y = 0;

    if (cursors.left.isDown) {
        ship.body.velocity.x = -300;
    } else if (cursors.right.isDown) {
        ship.body.velocity.x = 300;
    }

    if (cursors.up.isDown) {
        ship.body.velocity.y = -300;
    } else if (cursors.down.isDown) {
        ship.body.velocity.y = 300;
    }
    // 让球绕着飞船转
    preRender();
    orb.rotation += 0.05;
}

function preRender() {
	// 球的位置与飞船位置重合
    orb.x = ship.x;
    orb.y = ship.y;
}