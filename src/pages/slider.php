   <div class="slider-list" style="background-color: while;">
     <div class="slider-track" style="background-color: while;">

       <?php
        $directory = "./static/img/banners"; 
        $allowed_types = array("webp", "png"); 
        $file_parts = array();
        $ext = "";
        $title = "";
        $i = 0;

        $dir_handle = @opendir($directory) or die("Cant open folder");

        while ($file = readdir($dir_handle))   
        {
          if ($file == "." || $file == "..") continue; 
          $file_parts = explode(".", $file);         
          $ext = strtolower(array_pop($file_parts));   


          if (in_array($ext, $allowed_types)) {
            echo '<div class="slide" >
                <img src="' . $directory . '/' . $file . '" class="pimg" title="' . $file . '" />
            </div>';
            $i++;
          }
        }
        closedir($dir_handle); 
        ?>

     </div>
   </div>

  