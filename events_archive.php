<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("blocks/header_links.php"); ?> 
    <? $year = isset($_GET["year"]) ? $_GET["year"] : "%" ; ?>
    <title>Архів<? if(isset($_GET["year"])) echo $year; else ""?> </title> 
  </head>
  <body>
	<header>		
		  <?php include("blocks/header.php"); ?>
	<script>
        $(window).load(function(){   
           document.getElementById("header_events").className = 'active';
        });
      </script>
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Головна</a></li>
				<li>Події <? if(isset($_GET["year"])) echo " / Архів / ".$year; else " / Архів"?> </li>			

			</div>		
		</div>	
	</div>
    <div class='services'>
		<div class='container'>
			<h3><? echo "$year рік"; ?></h3>
			<hr>
			<div class='col-md-12'>				
				<div class='media'>
					<ul>   

	<? 
	   include("blocks/db.php");
       if ($result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM events WHERE date_ LIKE '$year%' ORDER BY date_")) 
	   {
           while( $myrow = mysqli_fetch_assoc($result) )
		   { 
                printf("
						<li>
							<div class='media-left'>
								<img style='width:150px;' src='%s' class=''></img>						
							</div>
							<div class='media-body'>
								<h4 class='media-heading'>
								   <a href='events_one.php?id=%s' target='_blank'>
                                        %s
                                   </a>
                                </h4>
							</div>
						</li>						
					",  $myrow['img'], $myrow['id'], $myrow['title']); 
           } 
           mysqli_free_result($result); 
	   }
	//    mysqli_close($db); 
	?>
    </ul>
				</div>
			</div>
		</div>
	</div>
	<footer>
		   <? include("blocks/footer.php"); ?>
	</footer>
</body>
</html>