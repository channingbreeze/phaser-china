
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('mouse', 'assets/sprites/mouse_jim_sachs.png');
}

function create() {
    game.stage.backgroundColor = '#943021';
    game.add.sprite(0, 100, 'mouse');
    // 捕获鼠标事件，鼠标事件将不会触发浏览器默认行为
    game.input.mouse.capture = true;
}

function render() {
	// 鼠标的左键，中键，右键
    game.debug.text("Left Button: " + game.input.activePointer.leftButton.isDown, 300, 132);
    game.debug.text("Middle Button: " + game.input.activePointer.middleButton.isDown, 300, 196);
    game.debug.text("Right Button: " + game.input.activePointer.rightButton.isDown, 300, 260);
}
