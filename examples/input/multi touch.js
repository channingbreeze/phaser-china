
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create, render: render });

function create() {
    game.stage.backgroundColor = '#454645';
    // Phaser默认允许两点触摸，addPointer可以增加触摸点，现在是6点触摸
    // 注意：iOS上，6点会触发一个app手势，这点我们无能为力
    game.input.addPointer();
    game.input.addPointer();
    game.input.addPointer();
    game.input.addPointer();
}

function render() {
    // 调试信息
    game.debug.pointer(game.input.mousePointer);
    game.debug.pointer(game.input.pointer1);
    game.debug.pointer(game.input.pointer2);
    game.debug.pointer(game.input.pointer3);
    game.debug.pointer(game.input.pointer4);
    game.debug.pointer(game.input.pointer5);
    game.debug.pointer(game.input.pointer6);
}
