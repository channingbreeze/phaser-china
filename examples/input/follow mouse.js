
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.image('ball', 'assets/sprites/shinyball.png');
}

var sprite;

function create() {
    sprite = game.add.sprite(game.world.centerX, game.world.centerY, 'ball');
    game.physics.enable(sprite, Phaser.Physics.ARCADE);
}

function update() {
    // 鼠标按下时动
    if (game.input.mousePointer.isDown) {
        // 400表示速度
        game.physics.arcade.moveToPointer(sprite, 400);
        // 已经到达鼠标了，就不动了
        if (Phaser.Rectangle.contains(sprite.body, game.input.x, game.input.y)) {
            sprite.body.velocity.setTo(0, 0);
        }
    } else {
        sprite.body.velocity.setTo(0, 0);
    }
}
