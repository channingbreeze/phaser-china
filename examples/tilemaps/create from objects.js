
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {
	// 加载tilemap
    game.load.tilemap('map', 'assets/tilemaps/maps/features_test.json', null, Phaser.Tilemap.TILED_JSON);
    game.load.image('ground_1x1', 'assets/tilemaps/tiles/ground_1x1.png');
    game.load.image('walls_1x2', 'assets/tilemaps/tiles/walls_1x2.png');
    game.load.image('tiles2', 'assets/tilemaps/tiles/tiles2.png');
    game.load.image('phaser', 'assets/sprites/arrow.png');
    game.load.spritesheet('coin', 'assets/sprites/coin.png', 32, 32);
}

var cursors;
var map;
var coins;

var layer;
var sprite;

function create() {
	// tilemap
    map = game.add.tilemap('map');
    // 创建tilesetImage
    map.addTilesetImage('ground_1x1');
    map.addTilesetImage('walls_1x2');
    map.addTilesetImage('tiles2');
    // 设置碰撞
    map.setCollisionBetween(1, 12);
    // layer
    layer = map.createLayer('Tile Layer 1');
    layer.resizeWorld();
    // 物理系统
    game.physics.startSystem(Phaser.Physics.ARCADE);
    // 硬币组
    coins = game.add.group();
    coins.enableBody = true;

    //  And now we convert all of the Tiled objects with an ID of 34 into sprites within the coins group
    map.createFromObjects('Object Layer 1', 34, 'coin', 0, true, false, coins);
    // 让硬币转起来
    coins.callAll('animations.add', 'animations', 'spin', [0, 1, 2, 3, 4, 5], 10, true);
    coins.callAll('animations.play', 'animations', 'spin');
    // 箭头
    sprite = game.add.sprite(260, 100, 'phaser');
    sprite.anchor.set(0.5);
    game.physics.arcade.enable(sprite);
    // 调整碰撞大小
    sprite.body.setSize(32, 32, 0, 0);
    // 最大角速度
    sprite.body.maxAngular = 500;
    // 角速度阻力
    sprite.body.angularDrag = 50;
    game.camera.follow(sprite);
    cursors = game.input.keyboard.createCursorKeys();
}

function update() {
	// 设置碰撞
    game.physics.arcade.collide(sprite, layer);
    game.physics.arcade.overlap(sprite, coins, collectCoin, null, this);

    sprite.body.velocity.x = 0;
    sprite.body.velocity.y = 0;
    sprite.body.angularVelocity = 0;

    if (cursors.left.isDown) {
    	// 角速度
        sprite.body.angularVelocity = -300;
    } else if (cursors.right.isDown) {
        sprite.body.angularVelocity = 300;
    }
    if (cursors.up.isDown) {
    	// 沿着角度前进
        game.physics.arcade.velocityFromAngle(sprite.angle, 300, sprite.body.velocity);
    }
}

function collectCoin(player, coin) {
    coin.kill();
}

function render() {
    game.debug.body(sprite);
}
