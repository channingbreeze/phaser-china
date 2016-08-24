
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.spritesheet('shadow', 'assets/tests/tween/shadow.png', 138, 15);
    game.load.spritesheet('phaser', 'assets/tests/tween/phaser.png', 70, 90);
}

function create() {
    var item;
    var shadow;
    var tween;
    // 白色背景
    game.stage.backgroundColor = '#ffffff';
    for (var i = 0; i < 6; i++) {
        // 影子
        shadow = game.add.sprite(190 + 69 * i, 284, 'shadow');
        // 一开始不可见
        shadow.scale.setTo(0.0, 0.0);
        // 设置锚点
        shadow.anchor.setTo(0.5, 0.5);
        // 影子的动画
        game.add.tween(shadow.scale).to({x: 1.0, y: 1.0}, 2400, Phaser.Easing.Bounce.Out, true);
        // 字母
        item = game.add.sprite(190 + 69 * i, -50, 'phaser', i);
        item.anchor.setTo(0.5, 0.5);
        // 弹起效果
        tween = game.add.tween(item).to( { y: 245 }, 2400, Phaser.Easing.Bounce.Out, true);
    }
}
