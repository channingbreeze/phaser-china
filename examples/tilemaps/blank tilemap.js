
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
    game.load.image('ground_1x1', 'assets/tilemaps/tiles/ground_1x1.png');
}

var map;
var layer1;
var layer2;
var layer3;

var marker;
var currentTile = 0;
var currentLayer;

var cursors;
var showLayersKey;
var layer1Key;
var layer2Key;
var layer3Key;

function create() {
    game.stage.backgroundColor = '#2d2d2d';
    // 一个空的tilemap
    map = game.add.tilemap();
    // 创建一个tilesetImage，用来编辑地图
    map.addTilesetImage('ground_1x1');
    // 40x30的tilemap
    layer1 = map.create('level1', 40, 30, 32, 32);
    layer1.scrollFactorX = 0.5;
    layer1.scrollFactorY = 0.5;
    // resize
    layer1.resizeWorld();
    layer2 = map.createBlankLayer('level2', 40, 30, 32, 32);
    layer2.scrollFactorX = 0.8;
    layer2.scrollFactorY = 0.8;
    layer3 = map.createBlankLayer('level3', 40, 30, 32, 32);
    // 这里设置当前图层
    currentLayer = layer3;
    // tile选择器，自定义函数
    createTileSelector();
    // updateMarker回调
    game.input.addMoveCallback(updateMarker, this);
    // 按键输入
    cursors = game.input.keyboard.createCursorKeys();
    showLayersKey = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
    layer1Key = game.input.keyboard.addKey(Phaser.Keyboard.ONE);
    layer2Key = game.input.keyboard.addKey(Phaser.Keyboard.TWO);
    layer3Key = game.input.keyboard.addKey(Phaser.Keyboard.THREE);
    showLayersKey.onDown.add(changeLayer, this);
    layer1Key.onDown.add(changeLayer, this);
    layer2Key.onDown.add(changeLayer, this);
    layer3Key.onDown.add(changeLayer, this);
}

function changeLayer(key) {
    switch (key.keyCode) {
        case Phaser.Keyboard.SPACEBAR:
            layer1.alpha = 1;
            layer2.alpha = 1;
            layer3.alpha = 1;
            break;
        case Phaser.Keyboard.ONE:
            currentLayer = layer1;
            layer1.alpha = 1;
            layer2.alpha = 0.2;
            layer3.alpha = 0.2;
            break;
        case Phaser.Keyboard.TWO:
            currentLayer = layer2;
            layer1.alpha = 0.2;
            layer2.alpha = 1;
            layer3.alpha = 0.2;
            break;
        case Phaser.Keyboard.THREE:
            currentLayer = layer3;
            layer1.alpha = 0.2;
            layer2.alpha = 0.2;
            layer3.alpha = 1;
            break;
    }
}

function pickTile(sprite, pointer) {
    currentTile = game.math.snapToFloor(pointer.x, 32) / 32;
}

function updateMarker() {
    marker.x = currentLayer.getTileX(game.input.activePointer.worldX) * 32;
    marker.y = currentLayer.getTileY(game.input.activePointer.worldY) * 32;
    if (game.input.mousePointer.isDown) {
        // 放置一个tile
    	map.putTile(currentTile, currentLayer.getTileX(marker.x), currentLayer.getTileY(marker.y), currentLayer);
        // 填充一片4x4区域
    	//map.fill(currentTile, currentLayer.getTileX(marker.x), currentLayer.getTileY(marker.y), 4, 4, currentLayer);
    }
}

function update() {
    if (cursors.left.isDown) {
        game.camera.x -= 4;
    } else if (cursors.right.isDown) {
        game.camera.x += 4;
    }
    if (cursors.up.isDown) {
        game.camera.y -= 4;
    } else if (cursors.down.isDown) {
        game.camera.y += 4;
    }
}

function render() {
    game.debug.text('Current Layer: ' + currentLayer.name, 16, 550);
    game.debug.text('1-3 Switch Layers. SPACE = Show All. Cursors = Move Camera', 16, 570);
}

function createTileSelector() {
    //  Our tile selection window
    var tileSelector = game.add.group();
    // TODO：去掉也没影响啊
    var tileSelectorBackground = game.make.graphics();
    tileSelectorBackground.beginFill(0x000000, 0.5);
    tileSelectorBackground.drawRect(0, 0, 800, 34);
    tileSelectorBackground.endFill();
    tileSelector.add(tileSelectorBackground);
    // 选择tile的条
    var tileStrip = tileSelector.create(1, 1, 'ground_1x1');
    tileStrip.inputEnabled = true;
    tileStrip.events.onInputDown.add(pickTile, this);
    // 相对摄像机固定
    tileSelector.fixedToCamera = true;
    // 黑边框
    marker = game.add.graphics();
    marker.lineStyle(2, 0x000000, 1);
    marker.drawRect(0, 0, 32, 32);
}
