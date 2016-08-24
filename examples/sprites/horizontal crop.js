
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update : update });

function preload() {
    game.load.image('trsi', 'assets/pics/trsipic1_lazur.jpg');
}

var pic;
var cropRect;

function create() {
    pic = game.add.image(game.world.centerX, 550, 'trsi');
    pic.anchor.setTo(0.5, 1);
    // crop是裁剪的意思，这里定义一个裁剪矩形
    cropRect = new Phaser.Rectangle(0, 0, 0, pic.height);
    // 对cropRect.width做一个tween动画
    var tween = game.add.tween(cropRect).to( { width: pic.width }, 3000, Phaser.Easing.Bounce.Out, false, 0, 1000, true);
    // 应用裁剪
    pic.crop(cropRect);
    // 开始动画
    tween.start();
}

function update () {
	// 更新裁剪
    pic.updateCrop();
}
