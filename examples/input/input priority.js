
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
    game.load.image('manga', 'assets/pics/manga-girl.png');
    game.load.image('disk', 'assets/sprites/copy-that-floppy.png');
    game.load.image('card', 'assets/sprites/mana_card.png');
}

function create() {
    game.stage.backgroundColor = '#4b0049';
    var manga = game.add.sprite(100, 100, 'manga');
    manga.inputEnabled = true;
    manga.input.enableDrag(false, false, true);
    // 优先级高
    manga.input.priorityID = 2;
    var disk = game.add.sprite(200, 200, 'disk');
    disk.alpha = 0.7;
    disk.inputEnabled = true;
    disk.input.enableDrag(false, false, true);
    disk.input.priorityID = 1;
    var card = game.add.sprite(300, 300, 'card');
    card.inputEnabled = true;
    card.input.enableDrag(false, false, true);
    // 优先级低
    card.input.priorityID = 0;
}

function render() {
    game.debug.text("Drag the Sprites", 32, 32);
}
