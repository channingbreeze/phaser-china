
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create });

// Google WebFont Loader 会先查找该配置
WebFontConfig = {
	// 所有字体资源加载后调用active，我们延迟一秒调用createText，否则可能加载不出来
    active: function() { game.time.events.add(Phaser.Timer.SECOND, createText, this); },
    // 想要加载的字体
    google: {
      families: ['Revalia']
    }
};

function preload() {
	// 加载 Google WebFont Loader
    game.load.script('webfont', 'http://localhost/phaser-china/assets/text/webfont.js');
}

var text = null;
var grd;

function create() {
    game.stage.setBackgroundColor(0x2d2d2d);
}

function createText() {
	// 文本
    text = game.add.text(game.world.centerX, game.world.centerY, "- phaser -\nrocking with\ngoogle web fonts");
    text.anchor.setTo(0.5);
    text.font = 'Revalia';
    text.fontSize = 60;
    // 渐变
    grd = text.context.createLinearGradient(0, 0, 0, text.canvas.height);
    grd.addColorStop(0, '#8ED6FF');   
    grd.addColorStop(1, '#004CB3');
    text.fill = grd;
    text.align = 'center';
    text.stroke = '#000000';
    text.strokeThickness = 2;
    text.setShadow(5, 5, 'rgba(0,0,0,0.5)', 5);
    // 允许拖拽
    text.inputEnabled = true;
    text.input.enableDrag();
    // 事件
    text.events.onInputOver.add(over, this);
    text.events.onInputOut.add(out, this);
}

function out() {
    text.fill = grd;
}

function over() {
    text.fill = '#ff00ff';
}
