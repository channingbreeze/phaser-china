
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('picture1', 'assets/pics/cougar_sanity_train.png');
    game.load.image('picture2', 'assets/pics/cougar-face_of_nature.png');
    game.load.image('picture3', 'assets/pics/destop-rewarding.png');
    game.load.image('picture4', 'assets/pics/destop-unknown.png');
    game.load.image('picture5', 'assets/pics/questar.png');
    game.load.image('picture6', 'assets/pics/seven_seas_andromeda_fairfax.png');
    game.load.image('picture7', 'assets/pics/slayer-sorry_im_the_beast.png');
}

var pictureA;
var pictureB;
var timer;
var current = 3;

function create() {
    game.stage.backgroundColor = '#000';
    // A、B两个图片交互
    pictureA = game.add.sprite(game.world.centerX, game.world.centerY, 'picture1');
    pictureA.anchor.setTo(0.5, 0.5);
    pictureA.scale.setTo(2, 2);
    pictureB = game.add.sprite(game.world.centerX, game.world.centerY, 'picture2');
    pictureB.anchor.setTo(0.5, 0.5);
    pictureB.scale.setTo(2, 2);
    pictureB.alpha = 0;
    // 定时器
    timer = game.time.create(false);
    // 3秒一次fadePictures
    timer.add(3000, fadePictures, this);
    // 开始
    timer.start();
}

function fadePictures() {
	// 交替淡入淡出AB
    var tween;
    if (pictureA.alpha === 1) {
        tween = game.add.tween(pictureA).to( { alpha: 0 }, 2000, Phaser.Easing.Linear.None, true);
        game.add.tween(pictureB).to( { alpha: 1 }, 2000, Phaser.Easing.Linear.None, true);
    } else {
        game.add.tween(pictureA).to( { alpha: 1 }, 2000, Phaser.Easing.Linear.None, true);
        tween = game.add.tween(pictureB).to( { alpha: 0 }, 2000, Phaser.Easing.Linear.None, true);
    }
    // 动画结束时准备下一张图片
    tween.onComplete.add(changePicture, this);
}

function changePicture() {
    if (pictureA.alpha === 0) {
        pictureA.loadTexture('picture' + current);
    } else {
        pictureB.loadTexture('picture' + current);
    }
    current++;
    if (current > 7) {
        current = 1;
    }
    // 3秒后fadePictures
    timer.add(3000, fadePictures, this);
}

function render() {
    game.debug.text("Time until event: " + timer.duration.toFixed(0), 10, 20);
}
