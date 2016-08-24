
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { create: create });

var content = [
    "The sky above the port was the color of television, tuned to a dead channel.",
    "`It's not like I'm using,' Case heard someone say, as he shouldered his way ",
    "through the crowd around the door of the Chat. `It's like my body's developed",
    "this massive drug deficiency.' It was a Sprawl voice and a Sprawl joke.",
    "The Chatsubo was a bar for professional expatriates; you could drink there for",
    "a week and never hear two words in Japanese.",
    "",
    "Ratz was tending bar, his prosthetic arm jerking monotonously as he filled a tray",
    "of glasses with draft Kirin. He saw Case and smiled, his teeth a webwork of",
    "East European steel and brown decay. Case found a place at the bar, between the",
    "unlikely tan on one of Lonny Zone's whores and the crisp naval uniform of a tall",
    "African whose cheekbones were ridged with precise rows of tribal scars. `Wage was",
    "in here early, with two joeboys,' Ratz said, shoving a draft across the bar with",
    "his good hand. `Maybe some business with you, Case?'",
    "",
    "Case shrugged. The girl to his right giggled and nudged him.",
    "The bartender's smile widened. His ugliness was the stuff of legend. In an age of",
    "affordable beauty, there was something heraldic about his lack of it. The antique",
    "arm whined as he reached for another mug.",
    "",
    "",
    "From Neuromancer by William Gibson"
];

var line = [];
var wordIndex = 0;
var lineIndex = 0;
var wordDelay = 120;
var lineDelay = 400;

function create() {
    text = game.add.text(32, 32, '', { font: "15px Arial", fill: "#19de65" });
    nextLine();
}

function nextLine() {
    if (lineIndex === content.length) {
        // 结束
        return;
    }
    // 当前行拆分成单词数组
    line = content[lineIndex].split(' ');
    // 词索引清零
    wordIndex = 0;
    // 处理单词
    game.time.events.repeat(wordDelay, line.length, nextWord, this);
    // 行索引加一
    lineIndex++;
}

function nextWord() {
    // 添加下一个词
    text.text = text.text.concat(line[wordIndex] + " ");
    // 下一个词
    wordIndex++;
    // 最后一个词
    if (wordIndex === line.length) {
        // 加一个回车
        text.text = text.text.concat("\n");
        // 延迟一会儿添加下一行
        game.time.events.add(lineDelay, nextLine, this);
    }
}
