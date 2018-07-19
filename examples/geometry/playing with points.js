
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', {create: create, update: update, render: render });

var p1;
var p2;
var p3;
var p4;

var d2 = 1;
var d3 = 4;
var d4 = 16;

function create() {

    p1 = new Phaser.Point(game.world.centerX, game.world.centerY);
    p2 = new Phaser.Point(p1.x - 50, p1.y - 50);
    p3 = new Phaser.Point(p2.x - 50, p2.y - 50);
    p4 = new Phaser.Point(p3.x - 50, p3.y - 50);

}

function update() {

    p2.rotate(p1.x, p1.y, d2, true, 150);
    p3.rotate(p2.x, p2.y, d3, true, 100);
    p4.rotate(p3.x, p3.y, d4, true, 50);

}

function render() {

    game.context.strokeStyle = 'rgb(0,255,255)';
    game.context.beginPath();
    game.context.moveTo(p1.x, p1.y);
    game.context.lineTo(p2.x, p2.y);
    game.context.lineTo(p3.x, p3.y);
    game.context.lineTo(p4.x, p4.y);
    game.context.stroke();
    game.context.closePath();

    game.context.fillStyle = 'rgb(255,255,0)';
    game.context.fillRect(p1.x, p1.y, 4, 4);

    game.context.fillStyle = 'rgb(255,0,0)';
    game.context.fillRect(p2.x, p2.y, 4, 4);

    game.context.fillStyle = 'rgb(0,255,0)';
    game.context.fillRect(p3.x, p3.y, 4, 4);

    game.context.fillStyle = 'rgb(255,0,255)';
    game.context.fillRect(p4.x, p4.y, 4, 4);

}
