<?
   class Db
   {
       public static function GetNewsCountFromCategory($cat_id)
       {
         include("blocks/db.php");       
         $num_posts=mysqli_fetch_assoc(mysqli_query($db," SELECT COUNT(*) FROM news where category_id = $cat_id"));
         $news_count = $num_posts["COUNT(*)"];
         return $news_count; 
       }

       public static function GetNewsCountFromCategoryByDate($cat_id, $year)
       {
         include("blocks/db.php");       
         $num_posts=mysqli_fetch_assoc(mysqli_query($db," SELECT COUNT(*) FROM news where category_id = $cat_id and date_ like '$year%'"));
         $news_count = $num_posts["COUNT(*)"];
         return $news_count; 
       }

       public static function GetNewsCountByYear($year)
       {
         include("blocks/db.php");       
         $num_posts=mysqli_fetch_assoc(mysqli_query($db," SELECT COUNT(*) FROM news where date_ like '$year%'"));
         $news_count = $num_posts["COUNT(*)"];
         return $news_count; 
       }

        public static function GetNewsCatName($id)
       {
         include("blocks/db.php");       
         $cat_name=mysqli_fetch_assoc(mysqli_query($db,"SELECT name FROM news_category where id like '$id'"));
         $name = $cat_name["name"];
         return $name; 
       }

       public static function GetNewsName($id)
       {
         include("blocks/db.php");       
         $nws_name=mysqli_fetch_assoc(mysqli_query($db,"SELECT title FROM news where id like '$id'"));
         $name = $nws_name["title"];
         return $name; 
       }

       public static function GetEventsName($id)
       {
         include("blocks/db.php");       
         $nws_name=mysqli_fetch_assoc(mysqli_query($db,"SELECT title FROM events where id like '$id'"));
         $name = $nws_name["title"];
         return $name; 
       }

        public static function GetEventsCountFromCategory($cat_id)
       {
         include("blocks/db.php");       
         $num_posts=mysqli_fetch_assoc(mysqli_query($db," SELECT COUNT(*) FROM events where cat_id = $cat_id"));
         $events_count = $num_posts["COUNT(*)"];
         return $events_count; 
       }

       public static function GetEventsCountFromCategoryByDate($cat_id, $year)
       {
         include("blocks/db.php");       
         $num_posts=mysqli_fetch_assoc(mysqli_query($db," SELECT COUNT(*) FROM events where cat_id = $cat_id and date_ like '$year%'"));
         $eventss_count = $num_posts["COUNT(*)"];
         return $events_count; 
       }

       public static function GetEventsCountByYear($year)
       {
         include("blocks/db.php");       
         $num_posts=mysqli_fetch_assoc(mysqli_query($db," SELECT COUNT(*) FROM events where date_ like '$year%'"));
         $events_count = $num_posts["COUNT(*)"];
         return $events_count; 
       }

   } 

?>