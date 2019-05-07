 <?php

$id1 = 1;
$id2 = -5;
for ($i=0; $i < 10 ; $i++) { 
    # code...
$id1 = $id1 + 5;
$id2 = $id2 + 5;
                        echo '<div class="container-fluid">'
                            .'<div class="media-container-row">';

                        $query ="  SELECT * FROM societies WHERE id < {$id1} AND id > {$id2} AND catagory = 'society' ORDER BY views DESC";

                        $societies = mysqli_query($db, $query);

                            if($societies){
                                while ($society = mysqli_fetch_assoc($societies)) {


                                   

                                    $sname = $society['sname'];
                                    $fname = $society['fname'];
                                    $views = $society['views'];
                                    //$catagory = $society['catagory'];
                                    $picture= $society['picture'];
                                  

                                       // if ($catagory == "popular") {
                                            
                                        

                                    $society  = '<div class="card p-3 col-12 col-md-6 my-col">
                                                        '
                                                            .'<div class="card-wrapper">
                                                            '
                                                                .'<div class="card-img">
                                                                '
                                                                    .'<img src="'.$picture.'" alt="Mobirise">
                                                                    '
                                                                 .'</div>
                                                                 '


                                                            .'<div class="card-box">
                                                            '
                                                           // .'<button name="'.$sname.'" type="submit" style="text-decaration:none; background:none; border:none;>
                                                            //'
                                                                .'<a href="services.php?sname='.$sname.'">
                                                            '
                                                                .'<h4 class="card-title pb-3 mbr-fonts-style display-7">
                                                                '
                                                                     .$sname
                                                                .'</h4>
                                                                '

                                                                .'</a>'
                                                               // .'</button>
                                                                //'
                                                                .'<p class="mbr-text mbr-fonts-style display-7">
                                                                '
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

                                                 

                        
                                }}
                             echo '</div>'
                            .'</div>';


                       

}






                            ?>