<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navigation">
		<div class="container">					
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<a href="index.html"><h1><span></span></h1></a> 
				</div>
			</div>
			
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a id="header_index"     href="index.php">Головна</a></li>
						<li role="presentation"><a id="header_about"     href="about.php">Про нас</a></li>
						<li role="presentation"><a id="header_units"     href="units.php">Підрозділи</a></li>	
						<li role="presentation"><a id="header_docs"      href="docs.php">Документи</a></li>
						<li role="presentation"><a id="header_news"      href="news.php">Новини</a></li>							
						<li role="presentation"><a id="header_media"     href="media.php">Фото</a></li>
						<li role="presentation"><a id="header_events"     href="events.php">Події</a></li>						
						<li role="presentation"><a id="header_contact"   href="contacts.php">Контакти</a></li>						
					</ul>
					<script>
                            $(window).load(function(){   
                               document.getElementById("header_index").className = '';
                               document.getElementById("header_about").className = '';
                               document.getElementById("header_units").className = '';
                               document.getElementById("header_media").className = '';
                               document.getElementById("header_docs").className = '';
                               document.getElementById("header_contact").className = '';
                               document.getElementById("header_events").className = '';
                               document.getElementById("header_news").className = '';  
                            });
                    </script>
				</div>
			</div>						
		</div>
	</div>	
</nav>		




