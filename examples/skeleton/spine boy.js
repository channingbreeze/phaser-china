
var buddy, game;

game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', {preload: preload, create: create});

function preload() {
    game.plugins.add(Fabrique.Plugins.Spine);
    game.stage.disableVisibilityChange = true;

    game.load.spine('spineboy', 'assets/skeleton/spineboy.json');
}

function create() {
    //create the spine object
    spineboy = game.add.spine(400, 600, 'spineboy');
    // set up the mixes!
    spineboy.setMixByName('walk', 'jump', 0.2);
    spineboy.setMixByName('jump', 'walk', 0.4);

    spineboy.setAnimationByName(0, 'walk', false);
    game.input.onDown.add(function () {
        spineboy.setAnimationByName(0, 'jump', false);
        spineboy.addAnimationByName(0, 'walk', true);
    });
}
