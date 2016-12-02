
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create});

function preload() {
    game.load.image('disk', 'assets/sprites/darkwing_crazy.png');
}

function create() {
    for (var i = 0; i < 15; i++) {
        // 随机建立一个精灵
        var sprite = game.add.sprite(game.world.randomX, game.world.randomY, 'disk');
        // 获取-2到6的一个随机数
        var rand = game.rnd.realInRange(-2, 6);
        // 设置缩放
        sprite.scale.setTo(rand, rand);
        // 也可以这样设置缩放
        // sprite.scale.x = rand;
        // sprite.scale.y = rand;
    }
}
