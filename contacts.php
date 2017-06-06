<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("blocks/header_links.php"); ?>  
    <title>Підрозділи</title>   
  </head>
  <body>
	<header>		
		  <?php include("blocks/header.php"); ?>
	<script>
        $(window).load(function(){   
           document.getElementById("header_contact").className = 'active';
        });
      </script>
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Головна</a></li>
				<li>Контакти</li>			
			</div>		
		</div>	
	</div>	  
	
	<div class="services">
		<div class="container">
			<h3>Президент Всеукраїнської Федерації військово-спортивних багатоборств</h3>
			<hr>
			<div class="col-md-3">
				<img src="images/zaicev.jpg" class="img-responsive" style="width:100%">
			</div>
			
			<div class="col-md-9">
				<div class="media">
					<ul>                        
                        <li>
							<div class="media-left">
								<i class="fa fa-user" style="padding-left:5px; padding-right:5px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Зайцев Сергій Васильович</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-credit-card" ></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Майстер спорту України</h4>
							</div>
						</li>
						<li>
							<div class="media-body">
								<i class="fa fa-tag" style="padding-left:5px; padding-right:10px;"></i>						
							</div>
							<div class="media-left">
								<h4 class="media-heading">Чорний пояс 10-й дан ВСБ</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-phone" style="padding-left:5px; padding-right:5px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">(063) 119 57 15</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-envelope-o" style=" padding-right:3px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">president.fvsb@gmail.com</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-globe" style="padding-left:2px; padding-right:7px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="#" target="_blank">fvsb.ua</a></h4>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	<div class="sub-services">
		<div class="container">
			<h3>Віце - Президент Всеукраїнської Федерації військово-спортивних багатоборств</h3>
			<hr>
			<div class="col-md-3">
				<img src="images/fedorcov.jpg" class="img-responsive" style="width:100%">
			</div>
			
			<div class="col-md-9">
				<div class="media">
					<ul>                        
                        <li>
							<div class="media-left">
								<i class="fa fa-user" style="padding-left:5px; padding-right:5px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Федорцов Олександр Петрович</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-credit-card" ></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Суддя міжнародної категорії</h4>
							</div>
						</li>
						<li>
							<div class="media-body">
								<i class="fa fa-tag" style="padding-left:5px; padding-right:10px;"></i>						
							</div>
							<div class="media-left">
								<h4 class="media-heading">Чорний пояс 8-й дан ВСБ</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-phone" style="padding-left:5px; padding-right:5px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">(057) 343-67-76, (066) 748-76-81 (мобильный)</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-envelope-o" style=" padding-right:3px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">vicepresident.msvsm@gmail.com</h4>
							</div>
						</li>
						<li>
							<div class="media-left">
								<i class="fa fa-globe" style="padding-left:2px; padding-right:7px;"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="#" target="_blank">fvsb.ua</a></h4>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
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