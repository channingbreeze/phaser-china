
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.stage.backgroundColor = '#007236';
    game.load.image('ball', 'assets/sprites/shinyball.png');
    game.load.image('mushroom', 'assets/sprites/mushroom2.png');
    game.load.image('phaser', 'assets/sprites/sonic_havok_sanity.png');
}

var cursors;

function create() {
    // 设置游戏世界的边界
    game.world.setBounds(-1000, -1000, 2000, 2000);
    for (var i = 0; i < 100; i++) {
        game.add.image(game.world.randomX, game.world.randomY, 'mushroom');
    }
    game.add.image(-16, -16, 'ball');
    // 创建一个方向键对象
    cursors = game.input.keyboard.createCursorKeys();
    var text = game.add.text(32, 32, 'Cursors to move. Shift + Up / Down to Rotate World', { fill: '#ffffff' });
}

function update() {
    // 上
    if (cursors.up.isDown) {
        // 是否按下shift
        if (cursors.up.shiftKey) {
            game.world.rotation += 0.05;
        } else {
            game.camera.y -= 4;
        }
    } else if (cursors.down.isDown) {
        if (cursors.down.shiftKey) {
            game.world.rotation -= 0.05;
        } else {
            game.camera.y += 4;
        }
    }
    if (cursors.left.isDown) {
        game.camera.x -= 4;
    } else if (cursors.right.isDown) {
        game.camera.x += 4;
    }
}

function render() {
    game.debug.cameraInfo(game.camera, 32, 500);
}
