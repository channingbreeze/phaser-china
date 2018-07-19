
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, render: render });

var rope;
var debugKey;
var shouldDebug = false;

function preload() {
    game.load.image('snake', 'assets/sprites/snake.png');
}

function create() {
    var count = 0;
    // 蛇的图片宽度918
    var length = 918 / 20;
    var points = [];
    // 绳子的节点
    for (var i = 0; i < 20; i++) {
        points.push(new Phaser.Point(i * length, 0));
    }
    // 创建一个绳子
    rope = game.add.rope(32, this.game.world.centerY, 'snake', null, points);
    rope.scale.set(0.8);
    // 动画
    rope.updateAnimation = function() {
        count += 0.1;
        for (var i = 0; i < this.points.length; i++) {
            this.points[i].y = Math.sin(i * 0.5 + count) * 20;
        }
    };
    // debug
    debugKey = game.input.keyboard.addKey(Phaser.Keyboard.D);
    debugKey.onDown.add(toggleDebug);
}

function render() {
    if (shouldDebug) {
        game.debug.ropeSegments(rope);
    }
    game.debug.text('(D) to show debug', 20, 32);
}

function toggleDebug() {
	// 反转debug
    shouldDebug = !shouldDebug;
}
