
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('bunny', 'assets/sprites/bunny.png');
}

var bunny;

function create() {
    bunny = game.add.sprite(game.world.centerX, game.world.centerY, 'bunny');
    bunny.anchor.set(0.5);
    bunny.inputEnabled = true;
    // 这样做每次鼠标移动都会检查精确像素，耗费非常大，你也可以仅仅在点击的时候进行精确像素检查，那将会好很多，选择正确的方法
    bunny.input.pixelPerfectOver = true;
    // 手型鼠标
    bunny.input.useHandCursor = true;
}

function update() {
    // 慢慢旋转
    bunny.angle += 0.05;
}

function render() {
    game.debug.spriteInputInfo(bunny, 32, 32);
    game.debug.geom(bunny.input._tempPoint);
}
