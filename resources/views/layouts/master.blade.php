
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

        <!-- DatePicker -->
    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>

  </head>

  <body>

    <header>
      <div class="blog-masthead">
        @include('layouts.navbar')
      </div>
    </header>

    <main role="main" class="container">
     

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            @yield('content')
            @yield('show')
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        @include('layouts.aside')

      </div><!-- /.row -->

    </main><!-- /.container -->

  @include('layouts.footer')
  </body>
</html>
