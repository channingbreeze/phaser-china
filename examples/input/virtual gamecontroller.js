
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update:update,render:render });

// 一些全局变量
var fireballs;
var fireRate = 300;
var nextFire = 0;
var nextJump = 0;
var player; 
var left=false;
var right=false;
var duck= false;
var fire=false;
var jump=false;

function preload() {
    // 精灵
    game.load.spritesheet('mario', 'assets/misc/mariospritesheet-small.png', 50, 50);
    // 一些图片素材
    game.load.image('ground', 'assets/misc/2048x48-ground.png');
    game.load.image('clouds', 'assets/misc/clouds.jpg');
    game.load.image('fireball', 'assets/misc/fireball.png',40,30);
    // 按钮
    game.load.spritesheet('buttonvertical', 'assets/buttons/buttons-big/button-vertical.png',64,64);
    game.load.spritesheet('buttonhorizontal', 'assets/buttons/buttons-big/button-horizontal.png',96,64);
    game.load.spritesheet('buttondiagonal', 'assets/buttons/buttons-big/button-diagonal.png',64,64);
    game.load.spritesheet('buttonfire', 'assets/buttons/buttons-big/button-round-a.png',96,96);
    game.load.spritesheet('buttonjump', 'assets/buttons/buttons-big/button-round-b.png',96,96);
    // 全屏
    game.scale.scaleMode = Phaser.ScaleManager.SHOW_ALL;
    game.scale.fullScreenScaleMode = Phaser.ScaleManager.EXACT_FIT;
}

function create() {
	// 在移动设备上全屏
    if (!game.device.desktop){ game.input.onDown.add(gofull, this); }
    // 开启物理系统
    game.physics.startSystem(Phaser.Physics.P2JS);
    game.physics.p2.gravity.y = 1200;
    game.world.setBounds(0, 0, 2000, 600);
    // 左边，右边，上边，下边，碰撞检测
    game.physics.p2.setBoundsToWorld(true, true, false, true, false);
    // 摩擦
    game.physics.p2.friction = 5; 
    clouds = game.add.tileSprite(0, 0, 2048, 600, 'clouds');
    ground = game.add.sprite(game.world.width/2, game.world.height-24, 'ground');
    game.physics.p2.enable(ground);
    // ground需要静止
    ground.body.static = true;
    // 子弹的group
    fireballs = game.add.group();
    fireballs.createMultiple(500, 'fireball', 0, false);
    // player
    player = game.add.sprite(350, game.world.height - 150, 'mario');
    game.physics.p2.enable(player);
    player.body.setCircle(22);
    // 不旋转
    player.body.fixedRotation=true;
    player.body.mass = 4;
    // 增加一些动画
    // key, framesarray, fps,repeat
    player.animations.add('walk', [1,2,3,4], 10, true);
    player.animations.add('duck', [11], 0, true);
    player.animations.add('duckwalk', [10,11,12], 3, true);
    // 相机跟随player
    game.camera.follow(player);
    // 创建虚拟按键
    //game, x, y, key, callback, callbackContext, overFrame, outFrame, downFrame, upFrame
    buttonjump = game.add.button(600, 500, 'buttonjump', null, this, 0, 1, 0, 1);
    // 相对相机固定
    buttonjump.fixedToCamera = true;
    buttonjump.events.onInputOver.add(function(){jump=true;});
    buttonjump.events.onInputOut.add(function(){jump=false;});
    buttonjump.events.onInputDown.add(function(){jump=true;});
    buttonjump.events.onInputUp.add(function(){jump=false;});

    buttonfire = game.add.button(700, 500, 'buttonfire', null, this, 0, 1, 0, 1);
    buttonfire.fixedToCamera = true;
    buttonfire.events.onInputOver.add(function(){fire=true;});
    buttonfire.events.onInputOut.add(function(){fire=false;});
    buttonfire.events.onInputDown.add(function(){fire=true;});
    buttonfire.events.onInputUp.add(function(){fire=false;});        

    buttonleft = game.add.button(0, 472, 'buttonhorizontal', null, this, 0, 1, 0, 1);
    buttonleft.fixedToCamera = true;
    buttonleft.events.onInputOver.add(function(){left=true;});
    buttonleft.events.onInputOut.add(function(){left=false;});
    buttonleft.events.onInputDown.add(function(){left=true;});
    buttonleft.events.onInputUp.add(function(){left=false;});

    buttonbottomleft = game.add.button(32, 536, 'buttondiagonal', null, this, 6, 4, 6, 4);
    buttonbottomleft.fixedToCamera = true;
    buttonbottomleft.events.onInputOver.add(function(){left=true;duck=true;});
    buttonbottomleft.events.onInputOut.add(function(){left=false;duck=false;});
    buttonbottomleft.events.onInputDown.add(function(){left=true;duck=true;});
    buttonbottomleft.events.onInputUp.add(function(){left=false;duck=false;});

    buttonright = game.add.button(160, 472, 'buttonhorizontal', null, this, 0, 1, 0, 1);
    buttonright.fixedToCamera = true;
    buttonright.events.onInputOver.add(function(){right=true;});
    buttonright.events.onInputOut.add(function(){right=false;});
    buttonright.events.onInputDown.add(function(){right=true;});
    buttonright.events.onInputUp.add(function(){right=false;});

    buttonbottomright = game.add.button(160, 536, 'buttondiagonal', null, this, 7, 5, 7, 5);
    buttonbottomright.fixedToCamera = true;
    buttonbottomright.events.onInputOver.add(function(){right=true;duck=true;});
    buttonbottomright.events.onInputOut.add(function(){right=false;duck=false;});
    buttonbottomright.events.onInputDown.add(function(){right=true;duck=true;});
    buttonbottomright.events.onInputUp.add(function(){right=false;duck=false;});

    buttondown = game.add.button(96, 536, 'buttonvertical', null, this, 0, 1, 0, 1);
    buttondown.fixedToCamera = true;
    buttondown.events.onInputOver.add(function(){duck=true;});
    buttondown.events.onInputOut.add(function(){duck=false;});
    buttondown.events.onInputDown.add(function(){duck=true;});
    buttondown.events.onInputUp.add(function(){duck=false;});
};

function update() {
    // 按键的逻辑实现
    if (left && !duck) {
        player.scale.x = -1;
        player.body.moveLeft(500);
        player.animations.play('walk');
    } else if (right && !duck) {
        player.scale.x = 1;
        player.body.moveRight(500);
        player.animations.play('walk');
    } else if (duck && !left && !right) {
        player.body.velocity.x=0;
        player.animations.play('duck');
    } else if (duck && right) {
        player.scale.x = 1;
        player.body.moveRight(200);
        player.animations.play('duckwalk');
    } else if (duck && left) {
        player.scale.x = -1;
        player.body.moveLeft(200);
        player.animations.play('duckwalk');
    } else {
        player.loadTexture('mario', 0);
    }
    // 换成另外一种贴图
    if (jump){ jump_now(); player.loadTexture('mario', 5);}
    if (fire){fire_now(); player.loadTexture('mario', 8); }
    // 蹲下的时候，设置另外一个大小
    // radius,offsetx,offsety
    if (duck){ player.body.setCircle(16,0,6);}else{ player.body.setCircle(22);}
    // this works around a "bug" where a button gets stuck in pressed state
    if (game.input.currentPointers == 0 && !game.input.activePointer.isMouse){ 
    	fire=false; right=false; left=false; duck=false; jump=false;
    }
};

function render(){
    game.debug.text('jump:' + jump + ' duck:' + duck + ' left:' + left + ' right:' + right + ' fire:' + fire, 20, 20);
}

// some useful functions
function gofull() { game.scale.startFullScreen(false);}
// jump with small delay
function jump_now(){ 
    if (game.time.now > nextJump ){
        player.body.moveUp(600);
        nextJump = game.time.now + 900;
    }
}
function fire_now() {
    if (game.time.now > nextFire){
        nextFire = game.time.now + fireRate;
        // get the first created fireball that no exists atm
        var fireball = fireballs.getFirstExists(false); 
        if (fireball) {
        	// come to existance !
            fireball.exists = true;
            // remove the fireball after 2500 milliseconds - back to non-existance
            fireball.lifespan=2500;
            // if player looks to the left - create the fireball on his left side
            if(player.scale.x == -1) {
                fireball.reset(player.x-20, player.y);
                game.physics.p2.enable(fireball);
                fireball.body.moveLeft(800);
                fireball.body.moveDown(180);
            } else {
                fireball.reset(player.x+20, player.y);
                game.physics.p2.enable(fireball);
                fireball.body.moveRight(800);
                fireball.body.moveDown(180);
            }
            fireball.body.setCircle(10);
        }
    }
}
