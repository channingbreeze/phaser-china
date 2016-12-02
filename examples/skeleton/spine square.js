
window.onload = function() {

  var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });
  
  function preload () {
    game.plugins.add(Fabrique.Plugins.Spine);
    game.load.spine('square', "assets/skeleton/square.json");
  }

  function create () {
    square = game.add.spine(400, 300, "square");

	square.setMixByName("happy", "sad", 0.2);
	square.setMixByName("sad", "happy", 0.4);
	
	square.setAnimationByName(0, "happy", true);
	game.input.onDown.add(function () {
	  square.setAnimationByName(0, "sad", false);
    });
  }

};
