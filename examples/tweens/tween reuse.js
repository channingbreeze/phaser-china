
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('beball', 'assets/sprites/beball1.png');
    game.load.image('bikkuriman', 'assets/sprites/bikkuriman.png');
    game.load.image('darkwing_crazy', 'assets/sprites/darkwing_crazy.png');
}

var sprites;
var tween;

function create() {
    game.stage.backgroundColor = '#2384e7';
    // 创建一个组
    sprites = game.add.group();
    sprites.create(100, 100, 'beball');
    sprites.create(200, 100, 'bikkuriman');
    sprites.create(300, 100, 'darkwing_crazy');
    sprites.create(400, 100, 'beball');
    sprites.create(500, 100, 'bikkuriman');
    sprites.create(600, 100, 'darkwing_crazy');
    // cursor代表当前指向的sprite，一开始是第一个
    tween = game.add.tween(sprites.cursor).to( { y: 500 }, 2000, Phaser.Easing.Bounce.Out, true);
    tween.onComplete.add(tween2, this);
}

function tween2() {
	// 下移一个，这时cursor代表第二个
    sprites.next();
    tween = game.add.tween(sprites.cursor).to( { alpha: 0 }, 2000, Phaser.Easing.Bounce.Out, true);
    tween.onComplete.add(tween3, this);
}

function tween3() {
    sprites.next();
    tween = game.add.tween(sprites.cursor.scale).to( { x: 2, y: 2 }, 2000, Phaser.Easing.Bounce.Out, true);
    tween.onComplete.add(tween4, this);
}

function tween4() {
    sprites.next();
    tween = game.add.tween(sprites.cursor).to( { y: 500, alpha: 0.2 }, 2000, Phaser.Easing.Bounce.Out, true);
    tween.onComplete.add(tween5, this);
}

function tween5() {
    sprites.next();
    tween = game.add.tween(sprites.cursor).to( { x: 100 }, 2000, Phaser.Easing.Bounce.Out, true);
    tween.onComplete.add(tween6, this);
}

function tween6() {
    sprites.next();
    tween = game.add.tween(sprites.cursor).to( { x: 300, y: 400 }, 2000, Phaser.Easing.Bounce.Out, true);
}
