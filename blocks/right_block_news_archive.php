<ul class="blog_archieve">
 <?
    $news_count_in_2013 = Db::GetNewsCountByYear(2013);                                             
    $news_count_in_2014 = Db::GetNewsCountByYear(2014);                                             
    $news_count_in_2015 = Db::GetNewsCountByYear(2015);                                             
    $news_count_in_2016 = Db::GetNewsCountByYear(2016);                                             
    $news_count_in_2017 = Db::GetNewsCountByYear(2017);  
  ?>
     <li><a href="news_archive.php?year=2013"><i class="fa fa-angle-double-right"></i> 2013 <span class="pull-right"><? echo $news_count_in_2013; ?></span></a></li>
     <li><a href="news_archive.php?year=2014"><i class="fa fa-angle-double-right"></i> 2014 <span class="pull-right"><? echo $news_count_in_2014; ?></span></a></li>
     <li><a href="news_archive.php?year=2015"><i class="fa fa-angle-double-right"></i> 2015 <span class="pull-right"><? echo $news_count_in_2015; ?></span></a></li>
     <li><a href="news_archive.php?year=2016"><i class="fa fa-angle-double-right"></i> 2016 <span class="pull-right"><? echo $news_count_in_2016; ?></span></a></li>
     <li><a href="news_archive.php?year=2017"><i class="fa fa-angle-double-right"></i> 2017 <span class="pull-right"><? echo $news_count_in_2017; ?></span></a></li>
 </ul>