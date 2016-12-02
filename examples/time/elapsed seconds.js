
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { render: render });

function render() {
    game.debug.text('Elapsed seconds: ' + this.game.time.totalElapsedSeconds().toFixed(3), 32, 32);
}
