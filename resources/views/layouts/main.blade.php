<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>3WireCMS</title>
        <link href="/css/app.css" rel="stylesheet" type="text/css" />
        <body>
<div class="contentWrapper">


          <nav class="navbar navbar-default">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">3WireCMS</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="mainNav">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="/about">About</a></li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
       </nav>

          {{-- <nav class="mainNav">
            <div class="navFloat">
                <a class="navHead" href="/">3WireCMS</a>
                <ul id="mobileNavList" class="navList">
                  <li><a href="/about">About</a></li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              </div>
          </nav> --}}



            <div class="container">
              <div class="mainContent">
                @yield('mainContent')
              </div>
            </div>

          </div>
  <footer>
    <div class="container">
      <p>Footer Text </p>
    </div>
  </footer>

      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/ee0aa9329e.js"></script>
    </body>
</html>
