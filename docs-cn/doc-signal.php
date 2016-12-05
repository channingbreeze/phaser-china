<?php ini_set("include_path", "../"); ?>
<?php $subdir=1; ?>
<?php include_once 'partials/docHead.php'; ?>

<p class="title"><a href="../doc.html">Phaser</a>.Signal</p>
<p class="keywords">new Signal()</p>
<p class="indent">信号是phaser用于处理事件和事件调度的，可以通过绑定一个回调/函数来监听信号，Signal.add或Signal.addOnce被用来做这个事情。</p>
<p class="indent">比如通过输入管理器的onDown信号来监听触摸或点击事件：</p>
<p class="indent">game.input.onDown.add(function() { ... });</p>
<p class="indent">精灵有许多默认信号，可以通过它们来监听事件类型，比如：</p>
<p class="indent">sprite.events.onKilled</p>
<p class="indent">当精灵被消灭时就会被自动调用。查看列表中的事件组件可以看到其它很多事件，也可以监听自己创建的预定义事件：</p>
<p class="indent">var mySignal = new Phaser.Signal();</p>
<p class="indent">创建一个新信号，可以给它绑定一个回调：</p>
<p class="indent">mySignal.add(myCallback, this);</p>
<p class="indent">当准备就绪后就可以调度(dispatch)该信号：</p>
<p class="indent">mySignal.dispatch(your arguments);</p>
<p class="indent">你的回调函数就会被引用。</p>


<?php include_once 'partials/docFoot.php'; ?>		