<?php 
if(isset($subdir)) {
	$path = "../";
} else {
	$path = "";
}
?>
<!DOCTYPE html>
<head>
	<title>Phaser小站</title>
	<meta charset="utf-8" />
	<meta name="Keywords" content="Phaser，Phaser小站，HTML5，游戏，HTML5游戏，游戏引擎，游戏框架，HTML5游戏引擎，HTML5游戏框架" />
	<meta name="Description" content="Phaser小站是一个为phaser而生的网站，以宣传和发展Phaser为使命。本站提供一切关于Phaser的案例、源码、教程、教学视频。" />
	<link href="<?php echo $path;?>css/global.css" rel="stylesheet" />
	<link href="<?php echo $path;?>css/common.css" rel="stylesheet" />
	<link href="<?php echo $path;?>css/doc.css" rel="stylesheet" />
	<script src="<?php echo $path;?>js/lib/jquery.js"></script>
	<script src="js/handleLogin.js"></script>
	<?php include_once 'partials/statistics.php';?>
</head>
<body>
	<?php include_once 'partials/header.php'; ?>
	<div class="docBanner">
		<div class="middleDiv">
			<div class="tips">
				如果你的英语过了四级，请看：
				<a href="<?php echo $path;?>docs/Index.html" target="_blank">英文原版</a>
			</div>
		</div>
	</div>
	<div class="middleDiv">
		<div class="docTitleDiv">
			<ul>
				<li class="level0"><b>Core</b></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-game.html">Game</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-group.html">Group</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-world.html">World</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-loader.html">Loader</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-cache.html">Cache</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-time.html">Time</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-camera.html">Camera</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-state-manager.html">StateManager</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-tween-manager.html">TweenManager</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-sound-manager.html">SoundManager</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-input-manager.html">InputManager</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-scale-manager.html">ScaleManager</a></li>
				<li class="level0"><b>Came Objects</b></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-factory.html">Factory(game.add)</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-creator.html">Creator(game.make)</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-sprite.html">Sprite</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-image.html">Image</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-sound.html">Sound</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-video.html">Video</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-particle-emitter.html">Particle Emitter</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-particle.html">Particle</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-text.html">Text</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-tween.html">Tween</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-bitmap-text.html">BitmapText</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-tilemap.html">Tilemap</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-bitmap-data.html">BitmapData</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-retro-font.html">RetroFont</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-button.html">Button</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-animation.html">Animation</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-graphics.html">Graphics</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-render-texture.html">RenderTexture</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-tile-sprite.html">TileSprite</a></li>
				<li class="level0"><b>Geometry</b></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-circle.html">Circle</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-ellipse.html">Ellipse</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-line.html">Line</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-matrix.html">Matrix</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-point.html">Point</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-polygon.html">Polygon</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-rectangle.html">Rectangle</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-rounded-rectangle.html">Rounded Rectangle</a></li>
				<li class="level0"><b>Physics</b></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-arcade-physics.html">Arcade Physics</a></li>
				<li class="level2"><a href="<?php echo $path;?>docs-cn/doc-a-body.html">Body</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-p2-physics.html">P2 Physics</a></li>
				<li class="level2"><a href="<?php echo $path;?>docs-cn/doc-p-body.html">Body</a></li>
				<li class="level2"><a href="<?php echo $path;?>docs-cn/doc-spring.html">Spring</a></li>
				<li class="level2"><a href="<?php echo $path;?>docs-cn/doc-collision-group.html">CollisionGroup</a></li>
				<li class="level2"><a href="<?php echo $path;?>docs-cn/doc-contact-material.html">ContactMaterial</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-ninja-physics.html">Ninja Physics</a></li>
				<li class="level2"><a href="<?php echo $path;?>docs-cn/doc-n-body.html">Body</a></li>
				<li class="level0"><b>Input</b></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-input-handler.html">Input Handler</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-pointer.html">Pointer</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-device-button.html">Device Button</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-mouse.html">Mouse</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-keyboard.html">Keyboard</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-key.html">Key</a></li>
				<li class="level1"><a href="<?php echo $path;?>docs-cn/doc-gamepad.html">Gamepad</a></li>
			</ul>
		</div>
		<div class="docDetailDiv">