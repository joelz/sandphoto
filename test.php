<html>
<head>
  <meta charset="utf-8" />
  <title>证件照排版</title>
  <meta name="color-scheme" content="light dark" />
  <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="sandphoto.js"></script>
  <style>
    strong {color: #5e6ddc; font-size:16px}
    p.copy-right {font-size:10px; color: #b9b0b0;}
  </style>
</head>
<body>

<form id="sandphotoform" action="sandphoto.php" method="POST" enctype="multipart/form-data">
<strong>第一步</strong>, 选择你要冲洗的证件照片的尺寸：
<br>
<?php
include('sandphoto.inc');
$parser = new PhotoTypeParser();
$parser->parse('phototype.txt');
$parser->render_select('target_type', 0, 8);
echo '<br><br>';
print('<strong>第二步</strong>, 选择用多大的相纸冲洗（一般选择6寸的就好，这个价格最合适）:<br>');
$parser->render_select('container_type', 8);
?>
<br>
<br>
<strong>第三步</strong>, 选择分割线的颜色：
<br>
<input id="bgcolorid" type="radio" name="bgcolorid" value="blue" checked="checked" /> 蓝色 <input id="bgcolorid" type="radio" name="bgcolorid" value="white" />白色 <input id="bgcolorid" type="radio" name="bgcolorid" value="gray" /> 灰色

<br>
将来的照片就是这个样子的：<br>

<img id="previewImg" alt="" />
<br>
<br>
<strong>第四步</strong>, 选择你的证件照片：

<input id="filename" type="file" name="filename" />

<br>
<br>
<strong>最后一步</strong>, 点击下载，照片就可以去冲印了：

<input type="submit" value="下载" />
<br>
<br>
如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。
</form>
<p class="copy-right">
版权归原作者（gmajian/sandphoto）所有。原作者网站地址在<a href="http://www.sandcomp.com/blog/sandphoto/">这里</a>。
</p>
</body>
</html>
