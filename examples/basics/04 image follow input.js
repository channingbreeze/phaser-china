
// update会在每一帧循环，render会在每次渲染时调用
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('phaser', 'assets/sprites/phaser.png');
}

// 精灵
var sprite;

function create() {
    sprite = game.add.sprite(game.world.centerX, game.world.centerY, 'phaser');
    sprite.anchor.set(0.5);

    // 精灵启动物理引擎，这样才会有body属性
    game.physics.arcade.enable(sprite);
}

function update () {
	// 如果鼠标距离和精灵距离大于8
    if (game.physics.arcade.distanceToPointer(sprite, game.input.activePointer) > 8) {
        // 让精灵以300的速度靠近鼠标(或者Touch)
        game.physics.arcade.moveToPointer(sprite, 300);
    } else {
        // 精灵速度设为0
        sprite.body.velocity.set(0);
    }
}

function render () {
	// 在(32,32)的地方打印输入的调试信息
	game.debug.inputInfo(32, 32);
}
