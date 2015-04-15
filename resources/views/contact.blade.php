<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="/frontend/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/frontend/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo white-text">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/" class="white-text">Home</a></li> 
        <li><a href="/about" class="white-text">About</a></li>
        <li><a href="/post" class="white-text">Sample Post</a></li>
        <li><a href="/contact" class="white-text">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav teal">
        <li><a href="/" class="white-text">Home</a></li> 
        <li><a href="/about" class="white-text">About</a></li>
        <li><a href="/post" class="white-text">Sample Post</a></li>
        <li><a href="/contact" class="white-text">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Contact Me</h1>
        <hr class="small">
        <div class="row center">
          <h5 class="header col s12 light">Have questions? I have answers (maybe).</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="frontend/background3.jpg" alt="Unsplashed background img 2"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
            <p class="post-meta">
				<strong>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!
				</strong>
			</p>
          </div>
        </div> 
      </div>
      <div class="row">
		 <div class="col s12">
				<form class="col s12">
				  <div class="row">
					<div class="input-field col s12">
						  <i class="mdi-action-account-circle prefix"></i>
						  <input id="icon_prefix" type="text" name="name" class="validate">
						  <label for="icon_prefix">Name</label>
					</div>
				  </div>
				  <div class="row">
					<div class="input-field col s12">
					   <i class="mdi-communication-email prefix"></i>
					  <input id="email" type="email" class="validate">
					  <label for="email">Email</label>
					</div>
				  </div>
				   <div class="row">
					<div class="input-field col s12">
					  <i class="mdi-communication-phone prefix"></i>
					  <input id="icon_telephone" type="tel" class="validate">
					  <label for="icon_telephone">Telephone</label>
					</div>
				  </div>
				   <div class="row">
					<div class="input-field col s12">
					 <i class="mdi-editor-mode-edit prefix"></i>
					  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
					  <label for="icon_prefix2">Message</label>
					</div>
				  </div>
				  <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Send
					<i class="mdi-content-send right"></i>
				  </button>
				</form>
		
			 
		 </div>
      </div>
      

    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="frontend/background2.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
         <p class="grey-text text-lighten-4">We are a team of Smarts Bee App working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Amit Gupta</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/frontend/js/materialize.js"></script>
  <script src="/frontend/js/init.js"></script>

  </body>
</html>
