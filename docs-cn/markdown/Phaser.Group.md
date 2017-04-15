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
| parent     | DisplayObject \| null  | 可选 | Game World | 该组将会被添加到参数指定的组或显示对象中。如果参数为 undefined 或 unspecified ，该组会被添加到 Game World 中。如果参数为 null ，该组不会被添加到任何对象中。 |
| name | string | 可选 | “group” | 该组的名称，调试时有用 |
| addToStage | boolean | 可选 | false | 是否把该组添加到 Game 舞台。如果要把该组添加到 Game World 舞台，可以设置为 false。  |
| enableBody  | boolean | 可选 | false | 是否开启该组的物理系统。如果要开启组里所有子元素的物理系统，可以设置为 true。 |
| physicsBodyType | integer | 可选 | 0 | 设置物理引擎的类型。详细的值可以查看 #physicsBodyType。 |

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html), [line 20](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-27)

#### 继承自:
> [PIXI.DisplayObjectContainer](https://www.phaser-china.com/docs/PIXI.DisplayObjectContainer.html)

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

> 继承自：[PIXI.DisplayObject#cacheAsBitmap](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#cacheBitmap)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 355](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-355)

**cameraOffset : Phaser.Point**

如果对象被设置成了fixedToCamera，这个值存储了摄像机偏移量。如果它的父亲也是fixedToCamera，那么偏移量是叠加的。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 210](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-210)

**\<readonly\>children : Array.\<DisplayObject\>**

组的子元素们。

> 继承自：[PIXI.DisplayObjectContainer#children](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#children)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 17](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-17)

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

**enableBody : boolean**

打开组的物理系统。所有组中的对象都会有body属性。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 146](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-146)

**enableBodyDebug : boolean**

如果为true，通过enableBody打开组的物理系统的同时，会创建一个调试对象。这个只适用于 P2 物理引擎。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 155](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-155)

**exists : boolean**

如果为true，则会update该组，否则跳过。  
默认值：true

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 100](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-100)

**filterArea : Rectangle**

矩形过滤器，可以在每一帧设置这个矩形。

> 继承自：[PIXI.DisplayObject#filterArea](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#filterArea)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 164](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-164)

**filters : Array.\<Filter\>**

设置显示对象的过滤器。这个只能在WEBGL模式下使用。你可以将该属性设置为null来移除它。

> 继承自：[PIXI.DisplayObject#filters](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#filters)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 307](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-307)

**fixedToCamera : boolean**

是否固定摄像机。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 203](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-203)

**\<internal\>game : Phaser.Game**

对当前正在运行的游戏的引用。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 38](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-38)

**hash : array**

哈希数组属于一个组，可以通过 Group.addToHash 和 Group.removeFromHash 添加任何子元素。  
只有该组里的子元素，才能被从哈希数组里添加和删除。  
哈希数组会自动使用Arcade物理引擎。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 223](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-223)

**height : Number**

显示对象容器的高度。

> 继承自：[PIXI.DisplayObjectContainer#height](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#height)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 61](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-61)

**hitArea : Rectangle|Circle|EllipselPolygon**

这是一个定义的区域，将会接受鼠标或者触摸的事件。  
类型：矩形|圆|椭圆|多边形

> 继承自：[PIXI.DisplayObject#hitArea](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#hitArea)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 62](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-62)

**ignoreDestroy : Boolean**

ignoreDestroy 属性设置为 true 的组，会忽略所有 destroy 方法。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 107](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-107)

**\<readonly\>length : integer**

该组的子元素总数。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 2215](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-2215)

**mask : PIXI.Graphics**

为显示对象设置一个遮罩。若要移除遮罩，请将该属性设置为空。

> 继承自：[PIXI.DisplayObject#mask](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#mask)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 282](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-282)

**name : string**

该组的名称，调试时有用。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 49](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-49)

**onDesteoy : Phaser.Signal**

该组被摧毁时，发送该信号。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 187](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-187)

**\<readonly\>parent : PIXI.DisplayObjectContainer**

该组将会被添加到参数指定的组或显示对象中。如果参数为 undefined 或 unspecified ，该组会被添加到 Game World 中。如果参数为 null ，该组不会被添加到任何对象中。

> 继承自：[PIXI.DisplayObject#parent](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#parent)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 79](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-79)

**pendingDestroy : boolean**

如果为 true ，在下次更新时，将会销毁该组。如果想要在自己的一个回调或者子元素中销毁一个组，这是非常有用的。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 119](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-119)

**physycsBodyType : integer**

enableBody 属性为 true 时，使用的物理引擎。有效值为 Phaser.Physics.ARCADE、Phaser.Physics.P2JS、Phaser.Physics.NINJA 等。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 163](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-163)

**physicsSortDirection : integer**

如果组里包含 Arcade 物理引擎的精灵，可以通过该属性自定义排序方向。  
排序方向有：Phaser.Physics.Arcade.SORT_NONE、Phaser.Physics.Arcade.LEFT_RIGHT、Phaser.Physics.Arcade.RIGHT_LEFT、Phaser.Physics.Arcade.TOP_BOTTOM、Phaser.Physics.Arcade.BOTTOM_TOP。  
如果设置为 null ，该组将默认使用 Phaser.Physics.Arcade.sortDirection。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 181](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-181)

**\<readonly\>physicsType : number**

对象的常量物理体类型。

> 源码 - [core/Group.js](https://www.phaser-china.com/docs/src_core_Group.js.html),[line 86](https://www.phaser-china.com/docs/src_core_Group.js.html#sunlight-1-line-86)

**pivot : Point**

显示对象旋转的支点。

> 继承自：[PIXI.DisplayObject#pivot](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#pivot)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 30](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-30)

**position : Point**

对象相对于父元素的坐标。

> 继承自：[PIXI.DisplayObject#position](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#position)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 14](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-14)

**renderable : boolean**

对象是否可以渲染。

> 继承自：[PIXI.DisplayObject#renderable](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#renderable)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 71](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-71)

**rotation : Number**

对象旋转的弧度。

> 继承自：[PIXI.DisplayObject#rotation](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#rotation)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 38](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-38)

**scale :Point**

对象缩放的比例。

> 继承自：[PIXI.DisplayObject#scale](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#scale)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 22](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-22)

**\<readonly\> stage : Stage**

舞台。

> 继承自：[PIXI.DisplayObject#stage](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#stage)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 88](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-88)

**visible : boolean**

对象的可见性。

> 继承自：[PIXI.DisplayObject#visible](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#visible)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 54](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-54)

**width :Number**

显示对象容器的宽度。

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 32](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-32)

**\<readonly\> worldAlpha : Number**

对象的可见性。

> 继承自：[PIXI.DisplayObject#worldAlpha](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#worldAlpha)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 97](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-97)

**\<readonly\> worldPosition : Point**

显示对象基于游戏世界变换的坐标。

> 继承自：[PIXI.DisplayObject#worldPosition](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#worldPosition)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 116](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-116)

**\<readonly\> worldRotation : Number**

显示对象基于游戏世界变换的旋转弧度。

> 继承自：[PIXI.DisplayObject#worldRotation](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#worldRotation)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 136](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-136)

**\<readonly\> worldScale : Point**

显示对象基于游戏世界变换的缩放比例。

> 继承自：[PIXI.DisplayObject#worldScale](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#worldScale)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 126](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-126)

**worldVisible : boolean**

精灵是否全局可见。

> 继承自：[PIXI.DisplayObject#worldVisible](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#worldScale)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 258](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-258)

**x : Number**

显示对象相对于父元素的x轴坐标。

> 继承自：[PIXI.DisplayObject#x](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#x)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 719](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-719)

**y : Number**

显示对象相对于父元素的y轴坐标。

> 继承自：[PIXI.DisplayObject#y](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#y)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 737](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-737)

## 方法

**addChild(child) → {PIXI.DisplayObject}**

向容器添加子元素。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| child | PIXI.DisplayObject | 需要被添加到容器中的显示对象 |

#### 返回值：

PIXI.DisplayObject - 被添加到容器中的显示对象

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 91](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-91)

**addChildAt(child, index) → {PIXI.DisplayObject}**

向容器中的指定索引添加子元素。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| child | PIXI.DisplayObject | 需要被添加到容器中的显示对象 |  
| index | Number | 指定的索引 |

#### 返回值：

PIXI.DisplayObject - 被添加到容器中的显示对象

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 103](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-103)

**destroy()**

摧毁这个显示对象，以及所有对它的引用。

> 继承自：[PIXI.DisplayObject#destroy](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#destroy)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 223](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-223)

**generateTexture(resolution, scaleMode, renderer) → {PIXI.Texture}**

生成一个显示对象的纹理，可以用来创建精灵。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| resolution | Number | 纹理生成的分辨率 |  
| scaleMode | Number | 比例模式 |  
| renderer | PIXI.CanvasRenderer \| PIXI.WebGLRenderer | 用于生成纹理的渲染器 |

#### 返回值：

PIXI.Texture - 图形对象的纹理

> 继承自：[PIXI.DisplayObject#generateTexture](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#generateTexture)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 542](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-542)

**getBounds() → {Rectangle}**

获取显示对象容器的矩形边界。

#### 返回值：

Rectangle - 矩形

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 307](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-307)

**getChildAt(index) → {PIXI.DisplayObject}**

返回指定索引的子元素。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| index | Number | 指定的索引 |  

#### 返回值：

PIXI.DisplayObject - 根据索引找到的子元素

> 继承自：[PIXI.DisplayObject#generateTexture](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#generateTexture)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 194](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-194)

**getChildIndex(child) → {Number}**

返回子元素的索引。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| child | PIXI.DisplayObject | 需要获取索引的显示对象 |  

#### 返回值：

Number - 索引

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 159](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-159)

**getLocalBounds() → {Rectangle}**

获取显示对象容器的非局部矩形边界。

#### 返回值：

Rectangle - 矩形

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 367](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-367)

**preUpdate()**

空方法，被需要它的类重写。

> 继承自：[PIXI.DisplayObject#preUpdate](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#preUpdate)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 533](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-533)

**removeChild(child) → {PIXI.DisplayObject}**

从容器中移除一个子元素。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| child | PIXI.DisplayObject | 需要被移除的显示对象 |  

#### 返回值：

PIXI.DisplayObject - 被移除的子元素

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 211](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-211)

**removeChildAt(index) → {PIXI.DisplayObject}**

从容器中移除一个指定索引的子元素。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| index | Number | 指定的索引 |  

#### 返回值：

PIXI.DisplayObject - 被移除的子元素

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 226](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-226)

**removeChildren(beginIndex, endIndex)**

移除开始索引到结束索引范围内的所有子元素。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| beginIndex | Number | 开始索引，默认为0 |  
| endIndex | Number | 结束索引，默认为容器里的子元素总数 |

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 244](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-244)

**removeStageReference()**

移除容器及其所有子元素当前舞台的引用。

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 407](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-407)

**setChildIndex(child, index)**

更改容器中指定子元素的索引。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| child | PIXI.DisplayObject | 想要改变索引的子元素 |  
| index | Number | 子元素的新索引 |

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 176](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-176)

**setStageReference(stage)**

设置容器的舞台引用。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| stage | Stage | 设置引用的舞台 |  

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 391](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-391)

**swapChildren(child, child2)**

交换容器中2个子元素的位置。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| child | PIXI.DisplayObject | - |  
| child2 | PIXI.DisplayObject | - |

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 134](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-134)

**toGlobal(position) → {Point}**

计算显示对象的全局位置。

#### 参数:

| 参数名称 | 参数类型 | 描述 |  
| ------ | ------ | ------ |  
| position | Point | 游戏世界原点 |  

#### 返回值：

Point - 表示该对象的位置的点对象

> 继承自：[PIXI.DisplayObject#toGlobal](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#toGlobal)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 576](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-576)

**toLocal(position, from) → {Point}**

计算显示对象相对于另一点的局部位置。

#### 参数:

| 参数名称 | 参数类型 | 是否可选 | 描述 |  
| ------ | ------ | ------ | ------ |  
| position | Point |  | 游戏世界原点 |  
| from | PIXI.DisplayObject | <可选> | 用于计算全局位置的显示对象 |

#### 返回值：

Point - 表示该对象的位置的点对象

> 继承自：[PIXI.DisplayObject#toLocal](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#toLocal)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 590](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-590)

**updateCache()**

生成并更新此对象的缓存精灵。

> 继承自：[PIXI.DisplayObject#updateCache](https://www.phaser-china.com/docs/PIXI.DisplayObject.html#updateCache)

> 源码 - [pixi/display/DisplayObjectContainer.js](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html),[line 566](https://www.phaser-china.com/docs/src_pixi_display_DisplayObject.js.html#sunlight-1-line-566)
