
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {

	game.load.spritesheet('spinner', 'assets/sprites/bluemetal_32x32x4.png', 32, 32);

}

var sprites;

function create() {

	//	Here we create a group, populate it with sprites, give them all a random velocity
	//	and then check the group against itself for collision

	sprites = game.add.physicsGroup(Phaser.Physics.ARCADE);

	for (var i = 0; i < 90; i++)
	{
		var s = sprites.create(game.rnd.integerInRange(100, 700), game.rnd.integerInRange(32, 200), 'spinner');
		s.animations.add('spin', [0, 1, 2, 3]);
		s.play('spin', 20, true);
		s.body.velocity.set(game.rnd.integerInRange(-200, 200), game.rnd.integerInRange(-200, 200));
	}

	sprites.setAll('body.collideWorldBounds', true);
	sprites.setAll('body.bounce.x', 1);
	sprites.setAll('body.bounce.y', 1);

}

function update() {

	game.physics.arcade.collide(sprites);

}
