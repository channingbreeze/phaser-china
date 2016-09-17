
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

var word = "phaser";
var correct = [];
var bmd;

function create() {
    // 一个统计数组
    for (var i = 0; i < word.length; i++) {
        correct[word[i]] = false;
    }
    // bitmap用来画出word
    bmd = game.make.bitmapData(800, 200);
    bmd.context.font = '64px Arial';
    bmd.context.fillStyle = '#ffffff';
    bmd.context.fillText(word, 64, 64);
    bmd.addToWorld();
    // 绑定按键事件
    game.input.keyboard.addCallbacks(this, null, null, keyPress);
}

function keyPress(char) {
    // 清空画布
    bmd.cls();
    var x = 64;

    // 循环统计数组
    for (var i = 0; i < word.length; i++) {
        var letter = word.charAt(i);
        if (char === letter) {
            correct[letter] = true;
        }
        // 正确的字母变色
        if (correct[letter]) {
            bmd.context.fillStyle = '#00ff00';
        } else {
            bmd.context.fillStyle = '#ffffff';
        }
        bmd.context.fillText(letter, x, 64);
        // 光标移动
        x += bmd.context.measureText(letter).width;
    }
}
