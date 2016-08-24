
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create, render: render });

var counters = [];
var text = [];
var timerEvents = [];
var i = 9;

function create() {
    game.stage.backgroundColor = '#6688ee';
    for (var i = 0; i < 10; i++) {
        counters[i] = 0;
        text[i] = game.add.text(game.world.centerX, 80 + (40 * i), 'Counter ' + i + ' = 0', { font: "32px Arial", fill: "#ffffff", align: "center" });
        text[i].anchor.setTo(0.5, 0);
        // 250ms到1000ms随机一个时间，执行updateCounter
        timerEvents[i] = game.time.events.loop(game.rnd.integerInRange(250, 1000), updateCounter, this, i);
    }
    // 点击后removeCounter
    game.input.onDown.add(removeCounter, this);
}

function updateCounter(idx) {
    counters[idx]++;
    text[idx].setText('Counter ' + idx + ' = ' + counters[idx]);
}

function removeCounter() {
    if (i >= 0) {
        // 移除timer
        game.time.events.remove(timerEvents[i]);
        // 文字
        text[i].style.fill = '#3344aa';
        text[i].setText('Counter ' + i + ' removed');
        i--;
    }
}

function render() {
    game.debug.text("Queued events: " + game.time.events.length + ' - click to remove', 32, 32);
}
