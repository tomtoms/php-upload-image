<?php
   
      $file_types = array('image/jpeg', 'image/png');
      $file_names = array('test');
        $path_image = 'path/to/';
        foreach($file_names as $file_name){
            if(isset($_FILES[$file_name]['tmp_name'])){

                $type = $_FILES[$file_name]['type'];
                if(in_array($type, $file_types)){
                     $name = $_FILES[$file_name]["name"];
                     if(move_uploaded_file($_FILES[$file_name]['tmp_name'], $path_image.$name)){
                        echo 'File moved';
                     }
                     else
                     {
                        echo 'Error';
                     }
                }
                else
                {
                    echo 'File '.$_FILES[$file_name]["name"].' is not an image or the format is not accepted';
                }

            }
      }
	 ?>
		<form method='POST' action='index.php' enctype='multipart/form-data'>
		 <input type='file' name='test' />
		 <input type='submit' value='go' />
		 </form>
