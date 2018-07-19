
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {

	game.load.spritesheet('spinner', 'assets/sprites/bluemetal_32x32x4.png', 32, 32);
	game.load.image('phaser', 'assets/sprites/phaser.png');

}

var sprites;

function create() {

	//	Here we create a group, populate it with sprites, give them all a random velocity
	//	and then check the group against itself for collision

	sprites = game.add.group();

	for (var i = 0; i < 30; i++)
	{
		var s = sprites.create(game.rnd.integerInRange(100, 700), game.rnd.integerInRange(32, 200), 'spinner');
		s.animations.add('spin', [0,1,2,3]);
		s.play('spin', 20, true);
		game.physics.enable(s, Phaser.Physics.ARCADE);
		s.body.velocity.x = game.rnd.integerInRange(-200, 200);
		s.body.velocity.y = game.rnd.integerInRange(-200, 200);
	}

	//	Here we'll create a new group
	var groupB = game.make.group();

	//	And add a sprite into it
	groupB.create(16, 16, 'phaser');

	//	It becomes a child of the Sprites group
	sprites.add(groupB);

	//	This will set physics properties on all group children that have a 'body' (i.e. it will skip the groupB)
	sprites.setAll('body.collideWorldBounds', true);
	sprites.setAll('body.bounce.x', 1);
	sprites.setAll('body.bounce.y', 1);
	sprites.setAll('body.minBounceVelocity', 0);

}

function update() {

	game.physics.arcade.collide(sprites);

}
