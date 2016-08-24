
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
	// atlas是地图集的意思，这里是一种资源，由png和json组成
    game.load.atlas('atlas', 'assets/sprites/seacreatures_json.png', 'assets/sprites/seacreatures_json.json');
}

var sprite;

function create() {
	// 选择其中一张图片，greenJellyfish0000在assets/sprites/seacreatures_json.json中定义了
    sprite = game.add.sprite(game.world.centerX, game.world.centerY, 'atlas', 'greenJellyfish0000');
    sprite.anchor.set(0.5);
    // tint是色彩的意思
    sprite.tint = Math.random() * 0xffffff;
    game.input.onDown.add(changeTint, this);
}

function changeTint() {
    sprite.tint = Math.random() * 0xffffff;
}

function update() {
	// 旋转
    sprite.rotation += 0.02;
}
