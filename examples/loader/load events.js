
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.spritesheet('button', 'assets/buttons/button_sprite_sheet.png', 193, 71);
}

var text;
var button;
var x = 32;
var y = 80;

function create() {
    game.stage.backgroundColor = '#182d3b';
    // 监听加载的事件
    game.load.onLoadStart.add(loadStart, this);
    game.load.onFileComplete.add(fileComplete, this);
    game.load.onLoadComplete.add(loadComplete, this);
    // 按钮
    button = game.add.button(game.world.centerX - 95, 400, 'button', start, this, 2, 1, 0);
    // 文字
    text = game.add.text(32, 32, 'Click to start load', { fill: '#ffffff' });
}

function start() {
	// 资源
    game.load.image('picture1', 'assets/pics/mighty_no_09_cover_art_by_robduenas.jpg');
    game.load.image('picture2', 'assets/pics/cougar_dragonsun.png');
    game.load.image('picture3', 'assets/pics/trsipic1_lazur.jpg');
    game.load.image('picture4', 'assets/pics/archmage_in_your_face.png');
    game.load.image('picture5', 'assets/pics/acryl_bladerunner.png');
    game.load.image('picture6', 'assets/pics/acryl_bobablast.png');
    game.load.image('picture7', 'assets/pics/alex-bisleys_horsy_5.png');
    // 开始加载
    game.load.start();
    // 按钮隐藏
    button.visible = false;
}

function loadStart() {
	// 开始加载
	text.setText("Loading ...");
}

function fileComplete(progress, cacheKey, success, totalLoaded, totalFiles) {
	// 文件加载进度
	text.setText("File Complete: " + progress + "% - " + totalLoaded + " out of " + totalFiles);
	var newImage = game.add.image(x, y, cacheKey);
	newImage.scale.set(0.3);
	x += newImage.width + 20;
	if (x > 700) {
		x = 32;
		y += 332;
	}
}

function loadComplete() {
	// 加载结束
	text.setText("Load Complete");
}
