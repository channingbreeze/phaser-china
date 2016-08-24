
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('bisley', 'assets/pics/alex-bisleys_horsy_5.png');
}

var picture;

function create() {
    game.stage.backgroundColor = '#6688ee';
    picture = game.add.sprite(game.world.centerX, game.world.centerY, 'bisley');
    picture.anchor.setTo(0.5, 0.5);
    // 4秒后fadePicture
    game.time.events.add(Phaser.Timer.SECOND * 4, fadePicture, this);
}

function fadePicture() {
	// 淡出
    game.add.tween(picture).to( { alpha: 0 }, 2000, Phaser.Easing.Linear.None, true);
}

function render() {
    game.debug.text("Time until event: " + game.time.events.duration, 32, 32);
}
