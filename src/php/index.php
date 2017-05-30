<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ехал грека через реку</title>
<style type="text/css">
body {
  background: #e6ebed;
}
.stdout_c {
  border: 1px outset black;
  background: #fff;
  width: 80%;
  height: 80%;
}
</style>
</head>
<body>
<div>
  <form method="POST">
  <label>Введите объект: </label>
  <input name="obj" class="stdin" />
  <input type="submit" value="Го"/>
  </form>
  <br/>
  <br/>
  <div class="stdout_c">
    <em class="stdout">
    <?php
$result=null;
if(!isset($_POST['obj']) {
result="Здесь будет результат";
echo $result;
exit();
} else {
$initial=$_POST['obj'];
if(substr($initial,strlen($initial))=='а'||substr($initial,strlen($initial))=='о') {
$forms=array();
array_unshift($forms,substr_replace($initial,'а',strlen($initial)));
array_unshift($forms,substr_replace($initial,'у',strlen($initial)));
array_unshift($forms,substr_replace($initial,'',strlen($initial)));
$result=Едет ".initial." через ".forms[2].", видит ".initial." в ".forms[1]." - ".initial.".<br/>Сунул ".initial." в ".forms[2]." ".forms[2].".<br/>".initial.",".initial.",".initial.",".initial;
echo $result;
} else {
$result="Едет ".initial." через ".initial.", видит ".initial." в ".initial." - ".initial.".<br/>Сунул ".initial." в ".initial." ".initial.".<br/>".initial.",".initial.",".initial.",".initial;
echo $result;
}
}
    ?>
</em>
  </div>
</div>
<p>
    <a href="https://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="Правильный CSS!" />
    </a>
</p>

</script>
</body>
</html>
