
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.spritesheet('item', 'assets/buttons/number-buttons-90x90.png', 90, 90);
}

function create() {
	var item;
	// 在左侧加一些精灵
    for (var i = 0; i < 6; i++) {
        item = game.add.sprite(90, 90 * i, 'item', i);
        // 允许拖拽
        item.inputEnabled = true;
        item.input.enableDrag();
        // 变成90X90的格子，第三个参数是拖拽时是否只能落在格子里，第四个参数是在release的时候snap
        item.input.enableSnap(90, 90, false, true);
        // drop的回调
        item.events.onDragStop.add(fixLocation);
    }
}

function render() {
    game.debug.text('Group Left.', 100, 560);
    game.debug.text('Group Right.', 280, 560);
}

function fixLocation(item) {
	// drop之后再调整下位置
    if (item.x < 90) {
        item.x = 90;
    } else if (item.x > 180 && item.x < 270) {
        item.x = 180;
    } else if (item.x > 360) {
        item.x = 270;
    }
}
