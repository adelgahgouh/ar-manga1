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
<form action="../saveads" method="post">
@csrf

<div class="form-group">
    <label for="exampleFormControlSelect1" style="float: right;">اختر اسم الاعلان</label>
    <select class="form-control" name="idads" id="exampleFormControlSelect1">
    @foreach ($ads as $mg)

    <option value="{!!$mg->idads!!}">{!!$mg->name!!}</option>
    @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="float: right;">سكربت الاعلان</label>
    <textarea name="script" class="form-control" placeholder="script ..." id="exampleFormControlTextarea1" ></textarea>
  </div>
  <input type = 'submit' value = "Edit Script" style="float: right;"/>


</form>
</body>
</html>
