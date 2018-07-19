
var buddy, game;

game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', {preload: preload, create: create});

function preload() {
    game.plugins.add(Fabrique.Plugins.Spine);
    game.stage.disableVisibilityChange = true;

    game.load.spine('buddy', 'assets/skeleton/buddy_skeleton.json');
    game.load.image('button1', 'assets/skeleton/btn_01.png');
    game.load.image('button2', 'assets/skeleton/btn_02.png');
}

function create() {

    //create the spine object
    buddy = game.add.spine(400, 300, 'buddy');

    // play animation
    buddy.setAnimationByName(0, 'idle', true);
    var newSkin = buddy.createCombinedSkin('outfit02', 'vest', 'mask');

    var button1 = this.game.add.button(20, 20, 'button1', function () {
        buddy.setSkinByName('outfit01');
        buddy.setToSetupPose();
    });

    var button1 = this.game.add.button(20, 130, 'button2', function () {
        buddy.setSkinByName('outfit02');
        buddy.setToSetupPose();
    });
}
