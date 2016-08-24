
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
	// 通过XMLHttpRequest加载text
    game.load.text('html', 'http://localhost/phaser-china');
}

var text;

function create() {
    game.stage.backgroundColor = '#0072bc';
    // 从cache中得到text
    var html = game.cache.getText('html');
    text = html.split('\n');
}

function render() {
	// 显示前20行
    for (var i = 0; i < 30; i++) {
        game.debug.text(text[i], 32, i * 20);
    }
}
