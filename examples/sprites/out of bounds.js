
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    game.load.image('alien', 'assets/sprites/space-baddie.png');
    game.load.image('ship', 'assets/sprites/shmup-ship.png');
}

var player;
var aliens;

function create() {
    player = game.add.sprite(400, 500, 'ship');
    player.anchor.setTo(0.5, 0.5);
    // 添加一个组
    aliens = game.add.group();
    // 启用物理属性
    aliens.enableBody = true;
    aliens.physicsBodyType = Phaser.Physics.ARCADE;

    for (var y = 0; y < 4; y++) {
        for (var x = 0; x < 10; x++) {
            var alien = aliens.create(200 + x * 48, y * 50, 'alien');
            alien.name = 'alien' + x.toString() + y.toString();
            // 检查游戏边界
            alien.checkWorldBounds = true;
            // 出了边界时的回调
            alien.events.onOutOfBounds.add(alienOut, this);
            // 给一个随机速度
            alien.body.velocity.y = 50 + Math.random() * 200;
        }
    }
}

function alienOut(alien) {
    // 重新放回顶上
    alien.reset(alien.x, 0);
    // 给一个随机速度
    alien.body.velocity.y = 50 + Math.random() * 200;
}
