<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>مانجا {!!$manga[0]->namear !!} {!! $manga[0]->nameeng !!}</title>

  <!-- Custom fonts for this theme -->
  <link href="../../vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="../../css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top" style="direction: rtl;">
<script>window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}</script>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../../#page-top">المانجا العربية</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        القائمة
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../">الرئيسية</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../list-manga">قائمة المانجا</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../../contacts">حول</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="../../logo.png" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">المانجا العربية</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">المانجا العربية هو موقع بني خصيصا لمحبي المانجا المترجمة .

      </p>

    </div>
  </header>

  <!-- Portfolio Section -->
<script>
  {!!$ads[0]->script!!}</script>
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">معلومات حول المانجا</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="card" style="width: 90%;direction: rtl;margin-top:30px;margin-bottom:30px;;
        margin-left:40px; border-color: #2C3E50;" >
          <div class="row no-gutters">
              <div class="col-md-3" style="background: #868e96;">
                  <img src="{{$manga[0]->srcimg}}" class="card-img-top " alt="..." style=" height: 300px;">
              </div>
              <div class="col-md-7">
                  <div class="card-body">
                  <table class="table table-borderless " style="color: #2C3E50;" >
                   <tbody>
          <tr >
            <th style="direction:rtl;padding: 5px;">الاسم بالعربية</th>
            <td style="direction:rtl;">{{$manga[0]->namear}}</td>

          </tr>
          <tr>
            <th  style="direction:rtl;padding: 5px;">الاسم بالانجليزية</th>
            <td style="direction:rtl;">{{$manga[0]->nameeng}}</td>

          </tr>
          <tr  >
            <th style="direction:rtl;padding: 5px;" >الحالة</th>
            <td style="direction:rtl;"><button type="button" class="btn btn-success">{{$manga[0]->statue}}</button>
              </td>

          </tr>
        </tbody>
                  </table>

                  </div>
              </div>
          </div>
      </div>

      </div>
      <!-- /.row -->



      <!--story-->
      <div class="card" style="width: 90%;direction: rtl;margin-top:30px;margin-bottom:30px;color: #2C3E50;
      margin-left:40px;border-color: #2C3E50;">
          <div class="card-body">
            <h1 class="text-center">
              <div >قصة المانجا</div>
            </h1>
            <div class="card text-center" style="  border-width: .0px;    ">
              <div class="card-body">
                <p>{{$manga[0]->story}}</p>
              </div>
            </div>

          </div>
        </div>

    </div>
  </section>






  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">فصول المانجا</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>




          <div class="card text-center" style="  border-width: .0px; background-color: #1ABC9C;   ">
            <div class="card-body">

            @foreach ($chapters as $ch)

              <a href="../../manga/{!!$manga[0]->slash!!}/chapter/{!!$ch->chapter!!}"><button type="button" class="btn btn-secondary"
                  style="padding-top: 5px; padding-bottom: 5px; margin: 5px;">{{$ch->chapter}}</button>
              </a>
              @endforeach






            </div>
          </div>







    </div>
  </section>

  <!-- ads Section -->
  <section class="page-section" id="contact">
    <div class="container">



      <div class="row">
      <script>
  {!!$ads[1]->script!!}</script>      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">العنوان</h4>
          <p class="lead mb-0"> الجزائر
          </p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">للتواصل معنا</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/%D8%A7%D9%84%D9%85%D8%A7%D9%86%D8%AC%D8%A7-%D8%A7%D9%84%D9%85%D8%AA%D8%B1%D8%AC%D9%85%D8%A9-101474938109845/">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">حول الموقع</h4>
          <p class="lead mb-0">المانجا العربية هو موقع بني خصيصا لمحبي المانجا المترجمة
           .</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; المانجا العربية 2020</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor1/jquery/jquery.min.js"></script>
  <script src="../../vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../../vendor1/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../../js/jqBootstrapValidation.js"></script>
  <script src="../../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../js/freelancer.min.js"></script>

</body>

</html>
