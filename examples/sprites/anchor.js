
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('pic', 'assets/pics/lance-overdose-loader_eye.png');
}

var sprite;
var point;
var dec = false;

function create() {
	// 背景颜色
    game.stage.backgroundColor = '#0072bc';
    // 初始化一个点，作为参照
    point = new Phaser.Point(300, 300);
    
    sprite = game.add.sprite(point.x, point.y, 'pic');
    game.input.onDown.add(updateAnchor, this);
}

function update() {
	// 进行旋转，注意与锚点的关系
    sprite.rotation += 0.01;
}

function updateAnchor() {
    if (dec) {
        sprite.anchor.x -= 0.1;
        sprite.anchor.y -= 0.1;
        if (sprite.anchor.x <= 0) {
            dec = false;
        }
    } else {
        sprite.anchor.x += 0.1;
        sprite.anchor.y += 0.1;
        if (sprite.anchor.x >= 1) {
            dec = true;
        }
    }
}

function render() {
	// 绿色的点
    game.debug.geom(point, 'rgb(0,255,0)');
    // 一位小数
    game.debug.text('Anchor X: ' + sprite.anchor.x.toFixed(1) + ' Y: ' + sprite.anchor.y.toFixed(1), 32, 32);
    game.debug.text('Sprite X: ' + sprite.x + ' Y: ' + sprite.y, 32, 64);
    game.debug.text('Click to adjust the anchor', 32, 96);
}
