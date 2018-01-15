<? 
       include('blocks/db.php');
       if ($result = mysqli_query($db, 'SELECT * FROM news ORDER BY date_ desc limit 3')) 
	     {
         while( $myrow = mysqli_fetch_assoc($result) )
	       {
           printf("
           <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
             <a target='_blank' href='news_one.php?id=%s'>
               <img src='%s' class='img-responsive' style='width:100%%;'/>
               <h3>%s</h3>
               <p>%s</p>
             </a>        
           </div>", $myrow['id'], $myrow['img'], $myrow['title'], $myrow['description']);
          }              
        }
        //  mysqli_free_result($result); 
	      //  mysqli_close($db); 
?>