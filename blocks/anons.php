            <div class="tt-panel" style="display: block;">
              <ul class="skr">

                <? 
                     include('blocks/db.php');
                     if ($result = mysqli_query($db, "SELECT *, DATE_FORMAT(date_,'%d.%m.%Y') as eurodate FROM events where date_ > NOW() ORDER BY date_")) 
	                   {
                       while( $myrow = mysqli_fetch_assoc($result) )
	                     {
                         printf(" <li class='tcarusel-item'>
                                    <img class='news_img' src='images/events/%s.png' alt='%s' tooltip='%s'>
                                    <a target='_blank' href='events_one.php?id=%s&page=1'><b>%s</b> // %s //   
                                    <br>%s
                                    </a>
                                  </li>", $myrow['id'],  $myrow['title'], $myrow['title'], $myrow['id'], $myrow['eurodate'], $myrow['place'], $myrow['title']);
                             } 
                           mysqli_free_result($result); 
	                     }
	                    //  mysqli_close($db); 
                ?>             

              </ul>
            </div>