<!doctype html>
<html>

<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP SPD-111</title>
	<link rel="stylesheet" href="/css/site.css" />
</head>

<body>
<nav>
	<div class="nav-wrapper orange">
	  <a href="/" class="brand-logo"><img src="/img/php.png"/></a>
	  <ul id="nav-mobile" class="right ">
		<?php foreach( [
			'basics' => 'Основи',
			'layout' => 'Шаблонізація', 
			'api' => 'API',
		] as $href => $name ) : ?>
			<li <?= $uri==$href ? 'class="active"' : '' ?> ><a href="/<?= $href ?>"><?= $name ?></a></li>
		<?php endforeach ?>
		<li><a href="/signup"><i class="material-icons">person_add</i></a></li>
	  </ul>
	</div>
</nav>
  
<div class="container">
	<?php include $page_body ; ?>
</div>
  <footer class="page-footer orange">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/site.js"></script>
</body>
</html>