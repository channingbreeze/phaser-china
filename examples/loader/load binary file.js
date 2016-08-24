
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

function preload() {
	// 加载二进制文件，如果在外域加载，要考虑跨域
    game.load.binary('mod', 'assets/audio/protracker/global_trash_3_v2.mod', binaryLoadCallback, this);
}

function binaryLoadCallback(key, data) {
	// 这里要return数据到cache中，否则在cache中什么都没有
    return new Uint8Array(data);
}

function create() {
    game.stage.backgroundColor = '#0072bc';
    // 获取二进制文件
    var buffer = game.cache.getBinary('mod');
    // 根据特定格式取得signature
    var signature = getString(buffer, 1080, 1084);
    var text = game.add.text(32, 32, "Signature: " + signature, { fill: '#ffffff' });
    text.setShadow(2, 2, 'rgba(0,0,0,0.5)', 0);
    // 根据特定格式取得title
    var title = getString(buffer, 0, 20)
    var text2 = game.add.text(32, 64, "Title: " + title, { fill: '#ffffff' });
    text2.setShadow(2, 2, 'rgba(0,0,0,0.5)', 0);
}

function getString(buffer, start, end) {
    var output = '';
    for (var i = start; i < end; i++) {
        output += String.fromCharCode(buffer[i]);
    }
    return output;
}
