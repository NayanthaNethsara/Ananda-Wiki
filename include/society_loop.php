  <?php  

include 'include/connection.php';



if ((isset($_POST['submit_search'])) && ( (!empty($_POST['search'])) OR (!empty($_POST['search2'])) ) ) {
echo '<div class="container-fluid">'
.'<div class="media-container-row">';
 $search = "";

if ((empty($_POST['search2'])) && (!empty($_POST['search'])) ) {

    $search = $_POST['search'];

    $query =" SELECT * FROM societies WHERE sname LIKE '{$search}%' AND catagory = 'society' ORDER BY views DESC LIMIT 5";

     $societies = mysqli_query($db, $query);

}elseif ((!empty($_POST['search2'])) && (empty($_POST['search'])) ) {
    
    $search = $_POST['search2'];

    $query =" SELECT * FROM societies WHERE fname LIKE '%{$search}%' AND catagory = 'society' ORDER BY views DESC LIMIT 5";

    $societies = mysqli_query($db, $query);
}





//$query =" SELECT * FROM societies WHERE sname LIKE '{$search}%' ORDER BY id ASC LIMIT 5";
///
//   $societies = mysqli_query($db, $query);
//
if($societies){
    while ($society = mysqli_fetch_assoc($societies)) {



 $sname = $society['sname'];
 $fname = $society['fname'];
 $views = $society['views'];
 //$catagory = $society['catagory'];
 $picture= $society['picture'];
      

    // if ($catagory == "popular") {
  
     

  //'<div class="container-fluid">'
    //.'<div class="media-container-row">'
$society  = '<div class="card p-3 col-12 col-md-6 my-col">'

    .'<div class="card-wrapper">'

 .'<div class="card-img">'

     .'<img src="'.$picture.'">'

  .'</div>'

 .'<div class="card-box">'

    .'<a href="services.php?sname='.$sname.'">'

 .'<h4 class="card-title pb-3 mbr-fonts-style display-7">'

      .$sname

 .'</h4>'

 .'</a>'

 .'<p class="mbr-text mbr-fonts-style display-7">'
  .$fname


  .'<br>'.'<br>'

  .'Views :'.$views
.'</p>
'

 .'</div>
 '
  .'</div>
  '
      .'</div>
      ';
echo $society;

   
    }
}


 echo '</div>'
.'</div>';}else{




include 'include/else.php';







   }








?>