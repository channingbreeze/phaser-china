
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

function preload() {
    // 这是从TexturePacker生成的JSON文件和图片加载的资源，可以把几个精灵图片合在一起
    game.load.atlas('atlas', 'assets/pics/texturepacker_test.png', 'assets/pics/texturepacker_test.json');
}

var chick;	// 小鸡
var car;	// 汽车
var mech;	// 机械
var robot;	// 机器人
var cop;	// 警察

function create() {
    game.stage.backgroundColor = '#404040';
    
    chick = game.add.sprite(64, 64, 'atlas');
    // 设置frameName，budbrain_chick.png在assets/pics/texturepacker_test.json中定义了
    chick.frameName = 'budbrain_chick.png';
    // 也可以通过索引设置
    // chick.frame = 0;

    cop = game.add.sprite(600, 64, 'atlas');
    cop.frameName = 'ladycop.png';

    robot = game.add.sprite(50, 300, 'atlas');
    robot.frameName = 'robot.png';

    car = game.add.sprite(100, 400, 'atlas');
    car.frameName = 'supercars_parsec.png';

    mech = game.add.sprite(250, 100, 'atlas');
    mech.frameName = 'titan_mech.png';
}
