<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>المانجا العربية</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
</head><body style="margin: 30px;direction: rtl;">
<form action="../insertmanga" method="post">
@csrf

<div class="form-group">
    <label for="exampleFormControlInput1" style="float: right;">اسم بالعربية</label>
    <input name="nameeng" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ناروتو ..">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1" style="float: right;" >الاسم بالانجليزية</label>
    <input name="namear" type="text" class="form-control" id="exampleFormControlInput1" placeholder="naruto..">
  </div>
  <div class="form-group" >
    <label for="exampleFormControlSelect1" style="float: right;">الحالة</label>
    <select class="form-control" name="statue" id="exampleFormControlSelect1">

    <option value="مستمر">مستمر</option>
    <option value="منتهي">منتهي</option>

    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1" style="float: right;">الصورة</label>
    <input name="imgsrc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="http .... naruto.jpg">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1" style="float: right;">العنوان المختصر للمنجا</label>
    <input name="slash" type="text" class="form-control" id="exampleFormControlInput1" placeholder="naruto">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"style="float: right;">القصة</label>
    <textarea name="story" class="form-control" placeholder="قصة نينجا ...." id="exampleFormControlTextarea1" ></textarea>
  </div>
  <input type = 'submit' value = "Add manga" style="float: right;"/>


</form>
</body>
</html>
