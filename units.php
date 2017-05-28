<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("blocks/header_links.php") ;?>  
    <title>Підрозділи</title>   
  </head>
  <body>
	<header>		
		  <?php include("blocks/header.php") ;?>
	<script>
        $(window).load(function(){   
           document.getElementById("header_units").className = 'active';
        });
      </script>
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Головна</a></li>
				<li>Підрозділи</li>			
			</div>		
		</div>	
	</div>
	
	<div class="services">
		<div class="container">
			<h3>Київська область</h3>
			<hr>
			<div class="col-md-3">
				<img src="images/units/kv/1.png" class="img-responsive" style="width:100%">
			</div>
			
			<div class="col-md-9">
				<div class="media">
					<ul>
                        <li>
							<div class="media-body">
								<h5 class="media-heading">Голова:</h5>
							</div>
						</li>
                        <li>
							<div class="media-left">
								<i class="fa fa-user"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Пристінський Олександр Васильович</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-pencil"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">(097) 405 31 93</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-envelope-o"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">fvsb.kiev@ukr.net</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-globe"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="http://fvsb.kiev.ua" target="_blank">fvsb.kiev.net.ua</a></h4>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="sub-services">		
	</div>
	
	
	<footer>
		   <? include("blocks/footer.php"); ?>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
    
</body>
</html>