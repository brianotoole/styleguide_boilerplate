<?php include 
//get variables
	'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $siteTitle; ?></title>

    <link href="css/main.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="wrapper" id="js-wrapper">

        <!-- Sidebar -->
        <div class="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<li>
                    <a href="#overview">Overview</a>
                </li>
                <li>
                    <a href="#colors">Colors</a>
                </li>
                <li>
                    <a href="#typography">Typography</a>
                </li>
                <li>
                    <a href="#buttons">Buttons</a>
                </li>
                <li>
                    <a href="#css">CSS Specifics</a>
                </li>
                <li>
                    <a href="#other">Other</a>
                </li>
            </ul>
        </div><!-- /.sidebar-wrapper -->

        <!-- Page Content -->
        <div class="page-content-wrapper">
        
            <div class="container-fluid">
            	<!-- Overview -->
                <div class="row">
                    <div class="col-lg-12" id="overview">
                        <a href="#menu-toggle" class="btn btn-default menu-toggle" id="js-menu-toggle">Menu</a>
                        <h1>Web Brand Styleguide: [Brand Name Here]</h1><hr />
                        <h2>Overview</h2>
                        <p>fasdfdsafsadfdsafdsa</p>
                    </div>
                </div><hr />
                
                <!-- Colors -->
                <div class="row">
                    <div class="col-lg-12" id="colors">
                        <h2>Colors</h2>
						<div class="swatch color1" style="background-color:<?php echo $color1; ?>"></div>
						<div class="swatch color2" style="background-color:<?php echo $color2; ?>"></div>
						<div class="swatch color3" style="background-color:<?php echo $color3; ?>"></div>
                    </div>
                </div><hr />
                
                <!-- Typography -->
                <div class="row">
                    <div class="col-lg-12" id="typography">
                        <h2>Typography</h2>
                        <p>Fonts used, font weights, icon fonts, headings paragraphs, blockquotes and more (if needed).</p>
                        <h2>Fonts used:</h2>
                        	<ul>
                        		<li>Heading Font, 100, 400, 700</li>
                        		<li>Body Font, 400, 700</li>
                        	</ul>
                        	
                        <h2>Icon font(s):</h2>
                        	<ul>
                        		<li><a href="#">Fontello</a></li>
                        		<li><a href="#">Other</a></li>
                        	</ul>
                        	
                        <h2>Font headings:</h2>
                        	<h1>Heading 1</h1>
                        	<h2>Heading 2</h2>
                        	<h3>Heading 3</h3>
                        	<h4>Heading 4</h4>
                        	<h5>Heading 5</h5>
                        	<h6>Heading 6</h6>
                        	
                         <h2>Blockquotes:</h2>
                         <blockquote>Maecenas sed diam eget risus varius blandit sit amet non magna.</blockquote>
                         	<p>Wrap <code>"&lt;blockquote&gt;"</code> around any HTML as the quote.</p>
                    </div>
                </div><hr />
                
                <!-- Buttons -->
                <div class="row">
                    <div class="col-lg-12" id="buttons">
                        <h2>Buttons</h2>
                        
                        <!-- Button Primary -->
						<button type="button" class="btn transparent">Transparent</button>
						<!-- Button Color1 -->
						<button type="button" class="btn color1" style="background-color:<?php echo $color1; ?>">Color1</button>
						<!-- Button Color2 -->
						<button type="button" class="btn color2" style="background-color:<?php echo $color2; ?>">Color2</button>
						<!-- Button Color3 -->
						<button type="button" class="btn color3" style="background-color:<?php echo $color3; ?>">Color2</button>
						
                    </div>
                </div><hr />
                
                <!-- CSS -->
                <div class="row">
                    <div class="col-lg-12" id="css">
                        <h2>CSS Specifics</h2>
<pre>
<code class="language-scss" data-lang="scss">
.class-name {
  color: $color1;
  border: 1px solid $border1;
}
</code>
</pre>
                    </div>
                </div><hr />
                
                <!-- Other -->
                <div class="row">
                    <div class="col-lg-12" id="other">
                        <h2>Other</h2>
						<p></p>
                    </div>
                </div><hr />
                


            </div><!-- /.container-fluid-->
        </div><!-- /.page-content-wrapper -->

    </div><!-- /.wrapper -->

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu Toggle  -->
    <script>
    $("#js-menu-toggle").click(function(e) {
        e.preventDefault();
        $("#js-wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>