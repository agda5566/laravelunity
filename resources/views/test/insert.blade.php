<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Design Login Form</title>




        <link rel="stylesheet" href="css/style.css">





  </head>

  <body>

    <hgroup>
  <h1>Material Design Form</h1>
  <h3>By Josh Adamous</h3>
</hgroup>
<form action="{{ url('unityhiser') }}" method="post" name="Login_Form" class="">
  {!! csrf_field() !!}
  <div class="group">
    <input type="text" name="email"><span class="highlight"></span><span class="bar"></span>
    <label>E-mail</label>
  </div>
  <div class="group">
    <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button  class="button buttonBlue" name="Submit" value="Forget" type="Submit">登入
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
  <p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
</footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>



  </body>
</html>
