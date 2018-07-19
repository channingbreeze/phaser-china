
var buddy, game;

game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', {preload: preload, create: create});

function preload() {
    game.plugins.add(Fabrique.Plugins.Spine);
    game.stage.disableVisibilityChange = true;

    game.load.spine('goblin', 'assets/skeleton/goblins.json');
    game.load.image('button1', 'assets/skeleton/btn_01.png');
    game.load.image('button2', 'assets/skeleton/btn_02.png');
}

function create() {
    //create the spine object
    goblin = game.add.spine(400, 600, 'goblin');
    goblin.setAnimationByName(0, 'walk', true);
    goblin.setSkinByName('goblin');
    goblin.setToSetupPose();

    //Add skin switch button
    var button1 = this.game.add.button(20, 20, 'button1', function() {
        goblin.setSkinByName('goblin');
        goblin.setToSetupPose();
    });
    var button1 = this.game.add.button(20, 130, 'button2', function() {
        goblin.setSkinByName('goblingirl');
        goblin.setToSetupPose();
    });
}
