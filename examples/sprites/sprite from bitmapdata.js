
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { create: create });

function create() {
	// 创建一个bitmap对象
    var bmd = game.add.bitmapData(128,128);
    // 使用Canvas的api进行绘制
    bmd.ctx.beginPath();
    bmd.ctx.rect(0, 0, 128, 128);
    bmd.ctx.fillStyle = '#ff0000';
    bmd.ctx.fill();
    // 用bitmap对象创建精灵
    var sprite = game.add.sprite(200, 200, bmd);
}
