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

   } 

?>