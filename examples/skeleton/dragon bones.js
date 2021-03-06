
//instantiate the game
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload () {
    // the texture atlas image that includes the images for the dragon bones sprite 
    // (loaded independently to make it easily accessible to dragonbones)
    game.load.image('dragon_image', 'assets/skeleton/dragon_atlas.png');
    // the texture atlas data (TexturePacker JSON Array format) for the dragon bones sprite 
    // (loaded independently to make it easily accessible to dragonbones)
    game.load.json('dragon_atlas', 'assets/skeleton/dragon_atlas.json');
    // load the texture atlas again so that it's content is registered in the atlas frame cache
    game.load.atlas('atlas1', 'assets/skeleton/dragon_atlas.png', 'assets/skeleton/dragon_atlas.json');  
    // the dragonbones skeleton data
    game.load.json('dragon', 'assets/skeleton/dragon_skeleton.json');         
}

function create () {
    //call setup method for dragon bones
    addDragonBones();
    //start a run-loop for dragonbones, firing every 20ms
    game.time.events.loop(20, update, this);

}

function update() {
    // call advanceTime on the dragonBones world clock
    // to progress the animation.
    // For simplicity just using a hardcoded value of 0.02 secs
    // but ideally should evaluate how much time has really passed since last call
    // and send that value through instead
    dragonBones.animation.WorldClock.clock.advanceTime(0.02)
}


function addDragonBones(){

    //give dragonBones a reference to the game object
    dragonBones.game = game;

    // hardcoded ids for the dragonBones elements to target
    var armatureName = "Dragon";//PigDragonBones";
    var skeletonId = "Dragon";//piggy";
    var animationId = "walk";//run";
    // fetch the skeletonData from cache
    var skeletonJSON = game.cache.getJSON('dragon');
    // fetch the atlas data from cache
    var atlasJson = game.cache.getJSON('dragon_atlas');
    // make an array listing the names of which images to use from the atlas
    //var partsList = ["arm_front", "head_ninja", "body", "fore_leg", "rear_leg", "rear arm"];
    var partsList = [
                "armL.png",
                "armR.png",
                "armUpperL.png",
                "armUpperR.png",
                "beardL.png",
                "beardR.png",
                "body.png",
                "clothes1.png",
                "eyeL.png",
                "eyeR.png",
                "hair.png",
                "handL.png",
                "handR.png",
                "head.png",
                "legL.png",
                "legR.png",
                "tail.png",
                "tailTip.png"
                ];
    // fetch the atlas image
    var texture = game.cache.getImage("dragon_image");
    // and the atlas id
    var atlasId = 'atlas1';
    // pass the variables all through to a utility method to generate the dragonBones armature

    var config = {
        armatureName: armatureName,
        skeletonId: skeletonId,
        animationId: animationId,
        atlasId: atlasId,
        partsList: partsList
    };

    var armature = dragonBones.makeArmaturePhaser(config, skeletonJSON, atlasJson, texture);


    //var armature = dragonBones.makePhaserArmature(armatureName, skeletonId, animationId, skeletonData, atlasJson, texture, partsList, atlasId);
    // get the root display object from the armature
    var bonesBase = armature.getDisplay();
    // position it
    bonesBase.x = 300;
    bonesBase.y = 500;
    // add it to the display list
    game.world.add(bonesBase);
}
