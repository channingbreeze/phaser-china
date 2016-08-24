
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
	game.load.image('tile', 'assets/sprites/p2.jpeg');
	game.load.spritesheet('monster', 'assets/sprites/pixi_monsters.png', 154, 170);
}

function create() {
	// 我们把游戏世界的区域放大一点，这样地震左右摇动时不至于超出边界
	var margin = 50;
	// 四边都增加一个margin
	var x = -margin;
	var y = -margin;
	var w = game.world.width + margin * 2;
	var h = game.world.height + margin * 2;
	// 设置游戏区域
	game.world.setBounds(x, y, w, h);
	// 设置相机
	game.world.camera.position.set(0);
	// 设置精灵
	game.add.tileSprite(x, y, w, h, 'tile');
	game.add.sprite(100, 100, 'monster', 0);
	game.add.sprite(500, 100, 'monster', 0);
	game.add.sprite(100, 400, 'monster', 0);
	game.add.sprite(500, 400, 'monster', 0);
	// 调用方法
	addQuake();
}

function addQuake() {
	// rumble是隆隆作响的意思，这里rumbleOffset指地震的振幅
	var rumbleOffset = 10;
	// 设置tween的参数
	var properties = { x : game.camera.x - rumbleOffset };
	var duration = 100;
	var repeat = 4;
	var ease = Phaser.Easing.Bounce.InOut;
	var autoStart = false;
	var delay = 1000;
	var yoyo = true;
	// 给相机一个动画
	var quake = game.add.tween(game.camera).to(properties, duration, ease, autoStart, delay, 4, yoyo);
	// 完了之后再来，这样就会无限循环
	quake.onComplete.addOnce(addQuake);
	// 开始动画
	quake.start();
}
