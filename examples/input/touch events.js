
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create, render: render });

function create() {
    game.stage.backgroundColor = '#454645';
    // 各种事件
    game.input.onUp.add(function() {
      console.log('UP');
    });
    game.input.onDown.add(function() {
      console.log('DOWN');
    });
    game.input.onTap.add(function() {
      console.log('TAP');
    });
}

function render() {
    // 调试信息
    game.debug.pointer(game.input.mousePointer);
    game.debug.pointer(game.input.pointer1);
    game.debug.pointer(game.input.pointer2);
}
