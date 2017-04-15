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
| parent     | DisplayObject \|&#124; null  | 可选 | Game World | 该组将会被添加到参数指定的组或显示对象中。如果参数为 undefined 或 unspecified ，该组会被添加到 Game World 中。如果参数为 null ，该组不会被添加到任何对象中。 |
| name | string | 可选 | “group” | 该组的名称，调试时有用 |
| addToStage | boolean | 可选 | false | 是否把该组添加到 Game 舞台。如果要把该组添加到 Game World 舞台，可以设置为 false。  |
| enableBody  | boolean | 可选 | false | 是否开启该组的物理系统。如果要开启组里所有子元素的物理系统，可以设置为 true。 |
| physicsBodyType | integer | 可选 | 0 | 设置物理引擎的类型。详细的值可以查看 #physicsBodyType。 |

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html), [line 20](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-27)

#### 继承自:
> PIXI.DisplayObjectContainer

## 成员

**< static, constant > RETURN_CHILD : integer**

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 256](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-256)

**< static, constant > RETURN_NONE : integer**

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 242](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-242)

**< static, constant > RETURN_TOTAL : integer**

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 249](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-249)

**< static, constant > SORT_ASCENDING : integer**

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 270](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-270)

**alive : boolean**

该属性对于那些是其他组孩子的组有用，在其他组使用forEachAlive是知会遍历alive为true的组。  
默认值：true。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 93](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-93)

**alpha : number**

整组的透明度。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 2300](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-2300)

**angle : number**

整组旋转的角度。这对child的angle值没有影响，但是会叠加在child的旋转角度上。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 2232](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-2232)

**cacheAsBitmap : boolean**

是否把显示对象作为位图缓存。它相当于给displayObject做了一个快照，这对于一些要提高性能的复杂的displayObjects有用。要移除该属性只需将此属性设置为"null"。

> 继承自：PIXI.DisplayObject#cacheAsBitmap。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 355](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-355)

**cameraOffset : Phaser.Point**

如果对象被设置成了fixedToCamera，这个值存储了摄像机偏移量。如果它的父亲也是fixedToCamera，那么偏移量是叠加的。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 210](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-210)

**<readonly>children : Array.<DisplayObject>**

组的子元素们。

> 继承自：PIXI.DisplayObjectContainer#children

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 17](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-17)

**classType : object**

当使用create或者createMultiple创建出来的对象类型，可以使用任何对象类型，但是它应该继承自Sprite或者Image，而且构造函数接受与Sprite或者Image同样的参数。也就是如下参数列表(game, x, y, key, frame)。  
默认值：Phaser.Sprite

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 130](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-130)

**cursor : DisplayObject**

组的光标正指向的对象。组的光标是一种用来遍历组的方式，配合next和previous。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 138](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-138)

**\<readonly\>cursorIndex : integer**

组的光标的索引。可以用next使其前进。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 193](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-193)


