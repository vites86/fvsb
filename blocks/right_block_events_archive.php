<ul class="blog_archieve">
 <?
    $events_count_in_2013 = Db::GetEventsCountByYear(2013);                                             
    $events_count_in_2014 = Db::GetEventsCountByYear(2014);                                             
    $events_count_in_2015 = Db::GetEventsCountByYear(2015);                                             
    $events_count_in_2016 = Db::GetEventsCountByYear(2016);                                             
    $events_count_in_2017 = Db::GetEventsCountByYear(2017);  
  ?>
     <li><a href="events_archive.php?year=2013"><i class="fa fa-angle-double-right"></i> 2013 <span class="pull-right"><? echo $events_count_in_2013; ?></span></a></li>
     <li><a href="events_archive.php?year=2014"><i class="fa fa-angle-double-right"></i> 2014 <span class="pull-right"><? echo $events_count_in_2014; ?></span></a></li>
     <li><a href="events_archive.php?year=2015"><i class="fa fa-angle-double-right"></i> 2015 <span class="pull-right"><? echo $events_count_in_2015; ?></span></a></li>
     <li><a href="events_archive.php?year=2016"><i class="fa fa-angle-double-right"></i> 2016 <span class="pull-right"><? echo $events_count_in_2016; ?></span></a></li>
     <li><a href="events_archive.php?year=2017"><i class="fa fa-angle-double-right"></i> 2017 <span class="pull-right"><? echo $events_count_in_2017; ?></span></a></li>
 </ul>