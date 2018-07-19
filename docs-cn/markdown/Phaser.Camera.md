# [Phaser](https://www.phaser-china.com/doc.html).Camera

### new Camera(game, id, x, y, width, height)

摄像机是你观察整个游戏世界的视窗。它有postion和size属性，并且只会呈现在视窗范围之内的游戏对象。游戏在启动时会在底层自动的创建一个和舞台尺寸相同摄像机。你可以通过Phaser.Camera.x/y来移动这个摄像机的位置。

#### 参数:

| 参数名   | 参数类型        | 描述                              |
| ------ | ----------- | ---------------------------------------- |
| game   | Phaser.Game | Game reference to the currently running game. |
| id     | number      | 在现在还不会被用到，等到Phaser支持多个摄像机的时候才能使用         |
| x      | number      | 摄像机在x轴上的位置                               |
| y      | number      | 摄像机在y轴上的位置                               |
| width  | number      | 摄像机视窗的宽度                                 |
| height | number      | 摄像机视窗的高度                                 |

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 20](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-20)

## 成员

**< static, constant > FOLLOW_LOCKON :number**

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 126](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-126)

**< static, constant > FOLLOW_PLATFORMER :number**

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 132](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-132)

**< static, constant > FOLLOW_TOPDOWN :number**

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 138](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-138)

**<  static, constant  > FOLLOW_TOPDOWN_TIGHT :number**

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 144](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-144)

**atLimit :boolean**

摄像机是否与游戏世界的边界一致。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 76](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-76)

**bounds :Phaser.Rectangle**

bounds是摄像机移动的边界，摄像机无法移动到矩形的范围之外。在默认情况下，它会设置为游戏世界的范围大小。bounds可以出现在游戏世界的任何地方，并且可以根据你的需要而随时更新。如果你不希望这个摄像机的移动是有边界限制的，可以将这个属性设置为null。bounds的数值可以设定为世界坐标中的任意值，(0,0)是为于世界坐标的左上方。

摄像机的边界为矩形，设置为null可以在任何地方移动。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 54](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-54)

**deadzone :Phaser.Rectangle**

在deadzone中移动矩形并不会导致摄像机移动。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 59](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-59)

**displayObject :PIXI.DisplayObject**

所有游戏对象由displayObject来添加。通过World.boot来设置。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 87](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-87)

**game :Phaser.Game**

当前运行游戏的引用。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 25](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-25)

**height :number**

摄像机的高度。在默认情况下，它是和游戏世界的尺寸相同，且无法直接修改。只能通过get和set方法来设置/取得相应的值

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 500](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-500)

**id :number**

预留给未来多个摄像机的设置。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 36](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-36)

**position :Phaser.Point**

摄像机的位置。如果位于游戏世界的边界之外，这个值会自动调整。通过get和set方法来设置/获取摄像机的position。position使用Phaser.Point对象。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 458](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-458)

**roundPx :boolean**

如果摄像机的roundPx设置为true，那么它将会调用view.floor作为其循环更新的一部分，使其边界保持为一个整数。如果你不想这样，设置roundPx的值为false。

默认值：true

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 71](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-71)

**scale :Phaser.Point**

所有显示对象的缩放比例。由world.boot设置。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 92](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-92)

**target :Phaser.Sprite**

当摄像机正在追踪一个Sprite的时候，target将成为其引用，否则为null。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 82](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-82)

**<readonly\> totalInView :number**

摄相机能够看到的所有autoCull设置为true的Sprite总数。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 98](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-98)

**view :Phaser.Rectangle**

摄像机的视窗。我们能通过这个视窗看到所渲染的游戏世界（通过默认的尺寸设置）。x/y的值为世界坐标，而不是屏幕坐标，width/height的值采用像素为单位来渲染。如果Sprite的autoCull属性设置为了true，那么在摄像机的视口范围之外都是不会渲染显示的。如果为false则是总是渲染。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 45](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-45)

**visible :boolean**

设置摄像机的可见性

默认值：true

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 65](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-65)

**width :number**

摄像机的宽度。默认情况下为游戏世界的尺寸相同。无法直接修改。通过get/set方法来获取/设置相应的值。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 483](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-483)

**world :Phaser.World**

对游戏世界的引用

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 30](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-30)

**x :number**

摄像机的在x轴上的坐标。当这个值超过了游戏世界的边界时会自动收紧。通过get/set方法来设置/获取相机的x坐标。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 412](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-412)

**y :number**

摄像机的在y轴上的坐标。当这个值超过了游戏世界的边界时会自动收紧。通过get/set方法来设置/获取相机的x坐标。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 435](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-435)

## 方法

**checkBounds()**

确保摄像机不会在游戏世界之外。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 325](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-325)

**focusOn(displayObject)**

使摄像机焦点立即移动到displayObject的位置。

#### 参数：

| 参数名          | 参数类型 | 描述             |
| ------------- | ---- | ----------------------- |
| displayObject | any  | displayObject必须要有x/y属性。 |

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 217](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-217)

**focusOnXY(x, y)**

使摄像机焦点立即移动到对应坐标的位置。

#### 参数：

| 参数名 | 参数类型   | 描述 |
| ---- | ------ | ----------- |
| x    | number | x坐标         |
| y    | number | y坐标         |

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 228](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-228)

**follow(target, style)**

设置摄像机跟随的sprite。

如果你发现在镜头跟随着某一个sprite到某个位置时会做一个不完整像素的轻微抖动。你可以通过设置game.renderer.renderSession.roundPixels = true来强制为完整的像素渲染。

#### 参数：

| 参数名   | 参数类型                                     | 描述                              |
| ------ | ---------------------------------------- | ---------------------------------------- |
| target | Phaser.Sprite \| Phaser.Image \| Phaser.Text | 摄像机所要追踪的对象。设置null来取消追踪                   |
| style  | < optional \>                           | 补充一个现有的"deadzone"预制。如果你使用了一个自定义的"deadzone"，忽略这个参数，并在调用follow()函数之后手动指定"deadzone"。 |

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 159](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-159)

**preUpdate()**

摄像机的预更新。设置视窗中的计数器总数为0。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 148](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-148)

**reset()**

重置摄像机的位置到坐标（0,0），如果你之前设定了摄像机跟随目标，将会取消跟随状态

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 395](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-395)

**setBoundsToWorld()**

使摄像机的边界与游戏世界的边界相同。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 312](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-312)

**setPosition(x, y)**

辅助性函数。用来同时设置摄像机的x和y坐标属性，而不需要使用game.camera.x 和 game.camera.y。

#### 参数：

| 参数名 | 参数类型   | 描述 |
| ---- | ------ | ----------- |
| x    | number | x坐标         |
| y    | number | y坐标         |

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 361](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-361)

**setSize(width, height)**

通过参数来设置摄像机视口矩形的大小尺寸。

#### 参数：

| 参数名   | 参数类型   | 描述 |
| ------ | ------ | ----------- |
| width  | number | 所需宽度        |
| height | number | 所需高度        |

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 381](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-381)

**unfollow()**

使摄相机的跟随目标为null，如果摄像机正在跟随某一目标，将会停止。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 206](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-206)

**update()**

更新焦点和滚动。

> 源码 - [core/Camera.js](https://www.phaser-china.com/docs/src_core_Camera.js.html), [line 240](https://www.phaser-china.com/docs/src_core_Camera.js.html#sunlight-1-line-240)
