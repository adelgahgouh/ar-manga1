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
</head><body style="margin:30px;direction: rtl;">
<form action="../insertchapter" method="post">
@csrf

<div class="form-group">
    <label for="exampleFormControlSelect1" style="float: right;">اختر المانجا</label>
    <select class="form-control" name="idanime" id="exampleFormControlSelect1">
    @foreach ($mangas as $mg)

    <option value="{!!$mg->id!!}">{!!$mg->namear!!}</option>
    @endforeach

    </select>
  </div>
<div class="form-group">
    <label for="exampleFormControlInput1" style="float: right;">رقم الفصل</label>
    <input name="chapter" type="text" class="form-control" id="exampleFormControlInput1" placeholder="66">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="float: right;">روابط صور الفصل</label>
    <textarea name="imgs" class="form-control" placeholder="url,url2 ....." id="exampleFormControlTextarea1" ></textarea>
  </div>
  <input type = 'submit' value = "Add Chapter" style="float: right;"/>


</form>
</body>
</html>
