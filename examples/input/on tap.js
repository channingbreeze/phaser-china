
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('TheEnd', 'assets/pics/TheEnd_by_Iloe_and_Made.jpg');
    game.load.image('BountyHunter', 'assets/pics/Bounty_Hunter_by_Anathematixs_Desire.png');
}

var pic;

function create() {
    pic = game.add.sprite(game.world.centerX, game.world.centerY, 'TheEnd');
    pic.alpha = 0.5;
    pic.anchor.set(0.5);
    pic.scale.set(0.6);
    game.add.text(16, 16, "tap or double-tap the image", { font: "32px Arial", fill: "#ffffff" });
    // tap，和click的区别是tap可以在手机上响应，click不行
    game.input.onTap.add(onTap, this);
}

function onTap(pointer, doubleTap) {
	// 是否双击
    if (doubleTap) {
        // 更换图片
        if (pic.key === 'TheEnd') {
            pic.loadTexture('BountyHunter');
        } else {
            pic.loadTexture('TheEnd');
        }
    } else {
        // 单击，按下时间小于game.input.tapRate，否则不会触发单击事件
        pic.alpha = (pic.alpha === 0.5) ? 1 : 0.5;
    }
}
