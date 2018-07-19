
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

function preload() {

    game.stage.backgroundColor = '#007236';

    game.load.image('mushroom', 'assets/sprites/mushroom2.png');
    game.load.image('phaser', 'assets/sprites/sonic_havok_sanity.png');

}

var cursors;
var d;

function create() {

    //  Modify the world and camera bounds
    // game.world.setBounds(-2000, -2000, 4000, 4000);

    game.world.resize(3000, 600);

    for (var i = 0; i < 100; i++)
    {
        game.add.sprite(game.world.randomX, game.world.randomY, 'mushroom');
    }

    game.add.text(600, 800, "- phaser -", { font: "32px Arial", fill: "#330088", align: "center" });

    var g = game.add.group();
    g.x = 500;

    // d = game.add.sprite(1000, 300, 'phaser');
    d = g.create(100, 300, 'phaser');
    d.anchor.setTo(0.5, 0.5);

    cursors = game.input.keyboard.createCursorKeys();

}

function update() {

    d.angle += 1;

    if (cursors.up.isDown)
    {
        if (cursors.up.shiftKey)
        {
            d.angle++;
        }
        else
        {
            game.camera.y -= 4;
        }
    }
    else if (cursors.down.isDown)
    {
        if (cursors.down.shiftKey)
        {
            d.angle--;
        }
        else
        {
            game.camera.y += 4;
        }
    }

    if (cursors.left.isDown)
    {
        if (cursors.left.shiftKey)
        {
            game.world.rotation -= 0.05;
        }
        else
        {
            game.camera.x -= 4;
        }
    }
    else if (cursors.right.isDown)
    {
        if (cursors.right.shiftKey)
        {
            game.world.rotation += 0.05;
        }
        else
        {
            game.camera.x += 4;
        }
    }

}

function render() {

    game.debug.cameraInfo(game.camera, 32, 32);

}
