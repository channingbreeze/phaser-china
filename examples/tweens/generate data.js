
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create, update: update });

function preload() {
    game.load.image('wasp', 'assets/sprites/wasp.png');
    game.load.image('sky', 'assets/skies/cavern1.png');
}

var bugs;
var index = 0;
var data;
var pos = [];

function create() {
    game.add.image(0, 0, 'sky');
    var tweenData = { x: 0, y: 0 };
    // 使用game.make创建出来的东西，不会被自动加入到游戏世界中去，这是和game.add不同的地方
    tween = game.make.tween(tweenData).to( { x: 100, y: 400 }, 2000, "Sine.easeInOut");
    tween.yoyo(true);
    // 生成tween的数据，1秒钟60帧
    data = tween.generateData(60);
    // 精灵组
    bugs = game.add.group();
    pos.push(new Phaser.Point(32, 0));
    pos.push(new Phaser.Point(300, 100));
    pos.push(new Phaser.Point(600, 70));
    bugs.create(pos[0].x, pos[0].y, 'wasp');
    bugs.create(pos[1].x, pos[1].y, 'wasp');
    bugs.create(pos[2].x, pos[2].y, 'wasp');
}

function update() {
    // 应用tween数据
    bugs.getAt(0).x = pos[0].x + data[index].x;
    bugs.getAt(0).y = pos[0].y + data[index].y;
    // 取一半
    bugs.getAt(1).x = pos[1].x + (data[index].x / 2);
    bugs.getAt(1).y = pos[1].y + data[index].y;
    // x反向
    bugs.getAt(2).x = pos[2].x - data[index].x;
    bugs.getAt(2).y = pos[2].y + data[index].y;
    index++;
    // 重复播放
    if (index === data.length) {
        index = 0;
    }
}
