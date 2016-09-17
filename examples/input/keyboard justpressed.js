
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.image('phaser', 'assets/sprites/phaser-dude.png');
    game.load.image('bullet', 'assets/misc/bullet0.png');
}

var sprite;
var bullet;
var bullets;
var bulletTime = 0;

var leftKey;
var rightKey;
var spaceKey;

var textLeft;
var textRight;
var textSpace;
var textLeft2;
var textRight2;
var textSpace2;

function create() {
    game.physics.startSystem(Phaser.Physics.ARCADE);
    game.stage.backgroundColor = '#2d2d2d';
    // 子弹组
    bullets = game.add.group();
    bullets.enableBody = true;
    bullets.physicsBodyType = Phaser.Physics.ARCADE;
    // 创建10个子弹
    bullets.createMultiple(10, 'bullet');
    bullets.callAll('events.onOutOfBounds.add', 'events.onOutOfBounds', resetBullet, this);
    bullets.setAll('checkWorldBounds', true);

    sprite = game.add.sprite(400, 550, 'phaser');

    game.physics.enable(sprite, Phaser.Physics.ARCADE);
	
	// 注册按键事件
	this.leftKey = game.input.keyboard.addKey(Phaser.Keyboard.LEFT);
	this.rightKey = game.input.keyboard.addKey(Phaser.Keyboard.RIGHT);
	this.spaceKey = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);

    // 截取事件，防止按键事件响应浏览器默认行为
    game.input.keyboard.addKeyCapture([ Phaser.Keyboard.LEFT, Phaser.Keyboard.RIGHT, Phaser.Keyboard.SPACEBAR ]);
	
	// 一些调试文本
	this.textLeft = game.add.text(20, 20, "Left was pressed 250 ms ago? NO", { font: "16px Arial", fill: "#ffffff", align: "center" });
	this.textRight = game.add.text(20, 60, "Right was pressed 500 ms ago? NO", { font: "16px Arial", fill: "#ffffff", align: "center" });
	this.textSpace = game.add.text(20, 100, "Space was pressed 1000 ms ago? NO", { font: "16px Arial", fill: "#ffffff", align: "center" });
	
	this.textLeft2 = game.add.text(600, 20, "Is left still down? NO", { font: "16px Arial", fill: "#ffffff", align: "center" });
	this.textRight2 = game.add.text(600, 60, "Is right still down? NO", { font: "16px Arial", fill: "#ffffff", align: "center" });
	this.textSpace2 = game.add.text(600, 100, "Is space still down? NO", { font: "16px Arial", fill: "#ffffff", align: "center" });
}

function update() {
    sprite.body.velocity.x = 0;
    sprite.body.velocity.y = 0;

	// isDown为真，表示按键按下
    if (this.leftKey.isDown) {
        sprite.body.velocity.x = -200;
		this.textLeft2.text = "Is left still down? YES";
    } else {
		this.textLeft2.text = "Is left still down? NO";
	}
	
    if (this.rightKey.isDown) {
        sprite.body.velocity.x = 200;
		this.textRight2.text = "Is right still down? YES";
    } else {
		this.textRight2.text = "Is right still down? NO";
	}

    if (this.spaceKey.isDown) {
        fireBullet();
		this.textSpace2.text = "Is space still down? YES";
    } else {
		this.textSpace2.text = "Is space still down? NO";
	}
	
	// leftKey现在还在按下，而且按下时间不超过250ms，适合用来做组合键，想想拳皇
	if (this.leftKey.downDuration(250)) {
		this.textLeft.text = "Left was pressed 250 ms ago? YES";
	} else {
		this.textLeft.text = "Left was pressed 250 ms ago? NO";
	}
	
	if (this.rightKey.downDuration(500)) {
		this.textRight.text = "Right was pressed 500 ms ago? YES";
	} else {
		this.textRight.text = "Right was pressed 500 ms ago? NO";
	}
	
	if (this.spaceKey.downDuration(1000)) {
		this.textSpace.text = "Space was pressed 1000 ms ago? YES";
	} else {
		this.textSpace.text = "Space was pressed 1000 ms ago? NO";
	}
}

function fireBullet () {
    if (game.time.now > bulletTime) {
    	// 从子弹池获取一个子弹，false代表不存在于屏幕中（被kill）
        bullet = bullets.getFirstExists(false);
        if (bullet) {
            bullet.reset(sprite.x + 6, sprite.y - 8);
            bullet.body.velocity.y = -300;
            bulletTime = game.time.now + 250;
        }
    }
}

// 子弹到屏幕外，会调用此函数
function resetBullet (bullet) {
    bullet.kill();
}
