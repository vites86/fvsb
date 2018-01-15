<!DOCTYPE html>
<html lang="en">
  <head>   
    <title>Новини</title>                                                                                     
    <?php include("blocks/header_links.php") ;?>
  </head>
  <body>
	<header>		
		 <?php include("blocks/header.php"); ?>
      <script>
               function showStatus() {   
                      var el = document.getElementById('status');
                      var display = getComputedStyle(el).display;
                      el.style.display = display === 'none' ? 'block' : 'none';                     
                   // alert("08.10.2010 року ВФВСБ наказом № 3531 Міністерства України у справах молоді, сім'ї та спорту присвоєно статус <b>«Національної»</b>", this);
               }                    
               $(window).load(function(){   
                  document.getElementById("header_news").className = 'active';          
             }); 
      </script>
     <? 
       include("blocks/db.php");  
       include("blocks/myclass.php"); 
       $cat_id = isset($_GET["cat_id"]) ? $_GET["cat_id"] : "%" ;
       if(isset($_GET["cat_id"])) $cat_name = Db::GetNewsCatName($cat_id);
     ?>
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Головна</a></li>
				<li>Новини</li>		
                <li><? echo $cat_name; ?></li>	
			</div>		
		</div>	
	</div>
	
	<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
    <?        
       $max_posts=3; 
       $num_posts=mysqli_fetch_assoc(mysqli_query($db,"SELECT COUNT(*) FROM news where category_id like '$cat_id'"));
       $num_posts = $num_posts["COUNT(*)"]; 
       $num_pages=ceil($num_posts/$max_posts);  
       if (isset($_GET['page']))  {$page=$_GET['page'];} else {$page=1;}
       if ($page>$num_pages) {$page=$num_pages;}
       if ($page<1) {$page=1;}

       if ($result = mysqli_query($db, "SELECT nws.id as id, nws.img, nws.category_id, nws.title, nws.description, 
                                        cat.name, DATE_FORMAT(nws.date_,'%d.%m.%Y') as eurodate 
                                        FROM `news` as nws 
                                        left outer join news_category as cat 
                                        on nws.category_id = cat.id  
                                        WHERE cat.id LIKE '$cat_id' 
                                        order by date_ desc LIMIT ".($page-1)*$max_posts.",". $max_posts)) 
	   {
           while( $myrow = mysqli_fetch_assoc($result) )
		   {
             printf("<div class='blog-item'>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-3'>
                                <div class='entry-meta'>
                                    <span id='publish_date'>%s</span>
                                    <span><i class='fa'>#</i><a href='#'><b>%s</b></a></span>                                    
                                    <span><i class='fa fa-user'></i> <a href='#'>Адміністратор</a></span>
                                    <span><i class='fa fa-comment'></i> <a href='#'>0 Коментарів</a></span>
                                    <span><i class='fa fa-heart'></i><a href='#'>0 Likes</a></span>
                                </div>
                            </div>
                                
                            <div class='col-xs-12 col-sm-9 blog-content'>
                                <a target='_blank' href='news_one.php?id=%s'>
                                   <img class='img-responsive img-blog' src='%s' width='100%%' alt='%s' />
                                </a>
                                <h4>%s</h4>
                                <p>%s</p>
                                <a target='_blank' href='news_one.php?id=%s' class='btn btn-primary readmore'>Детальніше <i class='fa fa-angle-right'></i></a>
                            </div>
                        </div>    
                    </div>", $myrow['eurodate'], $myrow['name'], $myrow['id'], $myrow['img'], $myrow['img'], $myrow['title'], $myrow['description'], $myrow['id']);
             } 
           mysqli_free_result($result); 
	   }
	//    mysqli_close($db); 
	?>

                    <!--pagination-->
                    <ul class="pagination pagination-lg">                    
                      <?php 
                           if ($page==1) $k=1;
                           else $k=$page-1;
                           echo "<li><a href='news.php?page=$k'><i class='fa fa-long-arrow-left'></i>Попередня</a></li>";                      
                           for($i=1; $i <= $num_pages; $i++) 
                            	{
                            		if ($page==$i) echo "<li><a class='active' href='news.php?page=$i'> $i </a></li>"; 
                            		else           echo "<li><a href='news.php?page=$i'> $i </a></li>"; 
                            	}  	    		      	
                            // <li class="active"><a href="#">1</a></li>
                            // <li><a href="#">2</a></li>
                            // <li><a href="#">3</a></li>
                            // <li><a href="#">4</a></li>
                            // <li><a href="#">5</a></li>
                            if ($page>$num_pages) $page=$num_pages;
                            else $k = $k+1;
                            echo "<li><a href='news.php?page=$k'>Наступна<i class='fa fa-long-arrow-right'></i></a></li>";
                        ?>
                    </ul><!--/.pagination-->

                </div><!--/.col-md-8-->                   
                   
                <aside class="col-md-4">
                    <!--/.search-->
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Пошук">
                        </form>
                    </div>
                    <!--/.search-->
    				
    				<!-- recent comments-->
                    <!--<div class="widget categories">
                        <h3>Recent Comments</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span> 
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                     
                    </div>-->
                    <!--/.recent comments-->
                     
                    <!-- categories-->
                    <div class="widget categories">
                        <h3>Категорії новин</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                       <?
                                           if ($result = mysqli_query($db, "SELECT * from news_category")) 
                                       	   {
                                            while( $myrow = mysqli_fetch_assoc($result) )
                                       		  {        
                                                $id = $myrow['id'];     
                                                $news_count = Db::GetNewsCountFromCategory($id);                                             
                                                printf("<li><a href='news.php?cat_id=%s'>%s <span class='badge'>%s</span></a></li>", $id, $myrow['name'], $news_count);
                                              } 
                                            mysqli_free_result($result); 
                                       	    }
                                       	   mysqli_close($db); 
                                       ?>
                                    <!--<li><a href="#">Computers <span class="badge">04</span></a></li>
                                    <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                    <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                    <li><a href="#">Technology <span class="badge">25</span></a></li>-->
                                </ul>
                            </div>
                        </div>                     
                    </div>
                    <!--/.categories-->

                    <!--archieve-->    				
    				<div class="widget archieve">
                        <h3>Архів</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <? include("blocks/right_block_news_archive.php"); ?>
                            </div>
                        </div>                     
                    </div>
                    <!--/.archieve-->
    				
                    <!-- tags-->
                    <div class="widget tags">
                        <h3>Хмара тегів</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">ВСБ</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Змагання</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Багатоборства</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Всестильові бої</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">MSAC</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">fight</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">sport</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">військово-спортивні</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">бої</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">стрільба</a></li>
                        </ul>
                    </div>
                    <!--/.tags-->
    				
                    <!-- blog_gallery-->                    
    				<div class="widget blog_gallery">
                        <h3>Наша галерея</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="gallery.php?id=1"><img style="height:65px" src="images/news/1.png" alt="" /></a></li>
                            <li><a href="gallery.php?id=2"><img style="height:65px" src="images/news/2.png" alt="" /></a></li>
                            <li><a href="gallery.php?id=3"><img style="height:65px" src="images/news/3.png" alt="" /></a></li>
                            <li><a href="gallery.php?id=4"><img style="height:65px" src="images/news/4.png" alt="" /></a></li>
                            <li><a href="gallery.php?id=5"><img style="height:65px" src="images/news/5.png" alt="" /></a></li>
                            <li><a href="gallery.php?id=6"><img style="height:65px" src="images/news/6.png" alt="" /></a></li>
                        </ul>
                    </div>
                    <!--/.blog_gallery-->
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
	
	<footer>
		 <? include("blocks/footer.php"); ?>
	</footer>	
</body>
</html>