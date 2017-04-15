# [Phaser](https://www.phaser-china.com/doc.html).Group

### new Group(game, parent, name, addToStage, enableBody, physicsBodyType)

组是一个用来显示精灵对象和图片对象的容器。
组的局部变换会被应用到组里的子元素。例如，当组被移动/旋转/缩放时，所有的子元素也会被移动/旋转/缩放。
此外，组提供对快速池和对象回收的支持。
组也是一个显示对象，可以作为子对象嵌套在其他组中。

#### 参数:

| 参数名   | 参数类型        | 是否可选 | 默认值 |  描述  |
| ------ | ----------- | ----------- | ----------- | ----------- |
| game   | Phaser.Game |   |   | 对当前正在运行的游戏的引用 |
| parent     | DisplayObject &#124; null  | 可选 | Game World | 该组将会被添加到参数指定的组或显示对象中。如果参数为 undefined 或 unspecified ，该组会被添加到 Game World 中。如果参数为 null ，该组不会被添加到任何对象中。 |
| name | string | 可选 | “group” | 该组的名称，调试时有用 |
| addToStage | boolean | 可选 | false | 是否把该组添加到 Game 舞台。如果要把该组添加到 Game World 舞台，可以设置为 false。  |
| enableBody  | boolean | 可选 | false | 是否开启该组的物理系统。如果要开启组里所有子元素的物理系统，可以设置为 true。 |
| physicsBodyType | integer | 可选 | 0 | 设置物理引擎的类型。详细的值可以查看 #physicsBodyType。 |

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html), [line 20](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-27)

#### 继承自:
PIXI.DisplayObjectContainer

## 成员

**< static, constant > RETURN_CHILD : integer**

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 126](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-256)
