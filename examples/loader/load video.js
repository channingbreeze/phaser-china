
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, render: render });

function preload() {
	// 加载视频
    game.load.video('chrome', 'assets/video/chrome.webm');
}

var video;
var sprite;

function create() {
    game.stage.backgroundColor = '#232323';
    video = game.add.video('chrome');
    // 添加视频
    sprite = video.addToWorld(game.world.centerX, game.world.centerY, 0.5, 0.5, 2, 2);
    // 循环播放
    video.play(true);
    // 点击时pause
    game.input.onDown.add(pause, this);
}

function pause() {
	// 暂停和继续
    video.paused = (video.paused) ? false : true;
}

function render() {
	// 调试信息
    game.debug.text("Video Time: " + video.currentTime, 32, 20);
    game.debug.text("Video Duration: " + video.duration, 550, 20);
    game.debug.text("Video Progress: " + Math.round(video.progress * 100) + "%", 32, 590);
    game.debug.text("Video Playing: " + video.playing, 550, 590);
}
