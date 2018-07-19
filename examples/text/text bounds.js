
var game = new Phaser.Game(800, 600, Phaser.AUTO, 'phaser-example', { preload: preload, create: create });

var text;
var ipsum = "Click to change alignment\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quid ergo aliud intellegetur nisi uti ne quae pars naturae neglegatur?\n\nSi longus, levis; Ita relinquet duas, de quibus etiam atque etiam consideret. Optime, inquam. Sed quanta sit alias, nunc tantum possitne esse tanta.\n\nQuid, si etiam iucunda memoria est praeteritorum malorum?";

//  h = 水平, v = 垂直, a = 文本对齐方式
var align = [ 
    { h: 'left', v: 'top', a: 'left' },
    { h: 'center', v: 'top', a: 'center' },
    { h: 'right', v: 'top', a: 'right' },
    { h: 'left', v: 'middle', a: 'left' },
    { h: 'center', v: 'middle', a: 'center' },
    { h: 'right', v: 'middle', a: 'right' },
    { h: 'left', v: 'bottom', a: 'left' },
    { h: 'center', v: 'bottom', a: 'center' },
    { h: 'right', v: 'bottom', a: 'right' }
];

var i = 0;

function preload() {
    game.load.image('bg', 'assets/skies/deepblue.png');
}

function create() {
    game.add.image(0, 0, 'bg');
    var style = { font: "16px Arial", fill: "#fff", 
        align: "left",
        boundsAlignH: "left", 
        boundsAlignV: "top", 
        wordWrap: true, wordWrapWidth: 300 };
    text = game.add.text(0, 0, ipsum, style);
    // 设置文本区域
    text.setTextBounds(16, 16, 768, 568);
    game.input.onDown.add(changeAlign, this);
}

function changeAlign() {
    i++;
    if (i === align.length) {
        i = 0;
    }
    text.align = align[i].a;
    text.boundsAlignH = align[i].h;
    text.boundsAlignV = align[i].v;
}
