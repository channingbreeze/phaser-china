
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载json文件
    game.load.json('version', 'assets/version.json');
}

function create() {
    game.stage.backgroundColor = '#0072bc';
    // 从cache中获取json
    var phaserJSON = game.cache.getJSON('version');
    // 文本显示
    var text = game.add.text(100, 100, "Current Phaser version: " + phaserJSON.version, { fill: '#ffffff' });
    text.setShadow(2, 2, 'rgba(0,0,0,0.5)', 0);
    var text2 = game.add.text(100, 200, "Name: " + phaserJSON.name, { fill: '#ffffff' });
    text2.setShadow(2, 2, 'rgba(0,0,0,0.5)', 0);
    var text3 = game.add.text(100, 300, "Released: " + phaserJSON.released, { fill: '#ffffff' });
    text3.setShadow(2, 2, 'rgba(0,0,0,0.5)', 0);
}
