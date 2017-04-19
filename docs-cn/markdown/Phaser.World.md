# [Phaser](https://www.phaser-china.com/doc.html).World

### new World(game)

“这个世界不过是我们想象的画布。”——亨利·戴维·梭罗   
每个游戏只有一个世界，它是一个抽象的地方，所有的游戏对象都以坐标系的形式存在于其中。它不受舞台边界的限制，可以是任何大小。你可以通过摄像机来观察它。默认情况下，世界被创建时会与舞台的尺寸一样。

#### 参数:

| 参数名   | 参数类型    |  描述  |
| ------ | ----------- | ----------- |
| game   | Phaser.Game | 对当前正在运行的游戏的引用 |

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_World.js.html), [line 19](https://www.phaser-china.com/docs/src_core_World.js.html#sunlight-1-line-19)

#### 继承自:
> [Phaser.Group](https://www.phaser-china.com/docs/Phaser.Group.html)

## 成员

**\<readonly\>\_definedSize : boolean

如果为 true ，表示世界已经给出了明确定义的大小；如果为 false ，表示世界只是适配游戏的尺寸。

> 源码 - [core/World.js](https://www.phaser-china.com/docs/src_core_World.js.html),[line 41](https://www.phaser-china.com/docs/src_core_World.js.html#sunlight-1-line-41)

**\_height

属性：
| 属性名称   | 属性类型    |  描述  |
| ------ | ----------- | ----------- |
| height   | number | 为世界定义的高度 |

> 源码 - [core/World.js](https://www.phaser-china.com/docs/src_core_World.js.html),[line 51](https://www.phaser-china.com/docs/src_core_World.js.html#sunlight-1-line-51)

**\_width

属性：
| 属性名称   | 属性类型    |  描述  |
| ------ | ----------- | ----------- |
| width   | number | 为世界定义的宽度 |

> 源码 - [core/World.js](https://www.phaser-china.com/docs/src_core_World.js.html),[line 46](https://www.phaser-china.com/docs/src_core_World.js.html#sunlight-1-line-46)

**alive : boolean

该属性对于那些是其他组孩子的组有用，在其他组使用forEachAlive是知会遍历alive为true的组。
默认值：true

> 继承自：[Phaser.Group#alive](https://www.phaser-china.com/docs/Phaser.Group.html#alive)

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 93](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-93)

**alpha : number

整组的透明度。

> 继承自：[Phaser.Group#alpha](https://www.phaser-china.com/docs/Phaser.Group.html#alpha)

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 2300](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-2300)

**angle : number

整组旋转的角度。这对child的angle值没有影响，但是会叠加在child的旋转角度上。

> 继承自：[Phaser.Group#angle](https://www.phaser-china.com/docs/Phaser.Group.html#angle)

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 2232](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-2232)

