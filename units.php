<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="description" content="Відокремлені підрозділи Всеукраїнської федерації ВСБ" />
  <meta name="keywords" content="msac, всб, військово-спортивні багатоборства, стрільба, бій, всестильовий бій, відокремлені підрозділи" />
  <meta name="robots" content="units.php">
   <meta property="og:title" content="Підрозділи ВФ ВСБ" />
	<meta property="og:description" content="Відокремлені підрозділи Всеукраїнської федерації ВСБ" />
	<meta property="og:image" content="http://fvsb.com.ua/images/logo.png" />
	<meta property="og:url" content=http://fvsb.com.ua/units.php />
	<meta property="og:type" content="website" />
 
    <?php include("blocks/header_links.php"); ?>  
    <title>Підрозділи</title>   
  </head>
  <body>
	<header>		
		  <?php include("blocks/header.php"); ?>
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

	<? 

	   include("blocks/db.php");
       if ($result = mysqli_query($db, 'SELECT * FROM units ORDER BY id')) 
	   {
           while( $myrow = mysqli_fetch_assoc($result) )
		   { 
			   $bckgnd_class = $myrow['id'] % 2 == 0 ? "sub-services" : "services"; 
                printf("<a name='%s'></a>
				        <div class='%s'>
	                        <div class='container'>
	                        	<h3>%s</h3>
	                        	<hr>
	                        	<div class='col-md-3'>
	                        		<img src='images/units/%s/%s.png' class='img-responsive' style='width:100%%'>
	                        	</div>
	                        	
	                        	<div class='col-md-9'>
	                        		<div class='media'>
	                        			<ul>
                                              <li>
	                        					<div class='media-body'>
	                        						<h5 class='media-heading'>Голова:</h5>
	                        					</div>
	                        				</li>
                                              <li>
	                        					<div class='media-left'>
	                        						<i class='fa fa-user'></i>						
	                        					</div>
	                        					<div class='media-body'>
	                        						<h4 class='media-heading'>%s</h4>
	                        					</div>
	                        				</li>
	                        				<li>
	                        					<div class='media-left'>
	                        						<i class='fa fa-phone'></i>						
	                        					</div>
	                        					<div class='media-body'>
	                        						<h4 class='media-heading'>%s</h4>
	                        					</div>
	                        				</li>
	                        				<li>
	                        					<div class='media-left'>
	                        						<i class='fa fa-envelope-o'></i>						
	                        					</div>
	                        					<div class='media-body'>
	                        						<h4 class='media-heading'>%s</h4>
	                        					</div>
	                        				</li>
	                        				<li>
	                        					<div class='media-left'>
	                        						<i class='fa fa-globe'></i>						
	                        					</div>
	                        					<div class='media-body'>
	                        						<h4 class='media-heading'><a href='%s' target='_blank'>%s</a></h4>
	                        					</div>
	                        				</li>
	                        			</ul>
	                        		</div>
	                        	</div>
	                        </div>
	                    </div>
						<hr style='color:black !important;line-height: 4px;'>",  $myrow['short_name'], $bckgnd_class, $myrow['region'],$myrow['short_name'], $myrow['short_name'], $myrow['head'], $myrow['telephone'], $myrow['email'], $myrow['web_adress'], $myrow['web_adress']); 
           } 
           mysqli_free_result($result); 
	   }
	   mysqli_close($db); 
	?>
	
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