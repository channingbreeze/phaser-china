
var game = new Phaser.Game(800, 600, Phaser.WEBGL, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('logo', 'assets/sprites/phaser2.png');
}

var logo;
var text;
var tween;
var method = 0;

function create() {
    logo = this.add.sprite(0, 0, 'logo');
    logo.scale.set(0.5);
    // 文字
    var style = { font: "48px Arial", fill: "#ff0044", align: "center" };
    text = game.add.text(game.world.centerX, game.world.centerY, "Linear Interpolation", style);
    text.anchor.set(0.5);
    // 宽高
    var w = game.width - logo.width;
    var h = game.height - logo.height;
    // 可以传一个数组作为tween的目标，它会使用interpolation进行数组中每个元素之间的转换
    tween = game.add.tween(logo).to( { x: [ w, w, 0, 0 ], y: [ 0, h, h, 0 ] }, 4000, "Sine.easeInOut", true, -1, false);
    tween.onLoop.add(changeMethod, this);
}

function changeMethod() {
    method++;
    if (method === 1) {
    	// 贝塞尔
        tween.interpolation(Phaser.Math.bezierInterpolation);
        text.text = "Bezier Interpolation";
    } else if (method === 2) {
    	// 样条曲线
        tween.interpolation(Phaser.Math.catmullRomInterpolation);
        text.text = "CatmullRom Interpolation";
    } else if (method === 3) {
        method = 0;
        // 线性
        tween.interpolation(Phaser.Math.linearInterpolation);
        text.text = "Linear Interpolation";
    }
}
