<?php
     include_once('functions.php');
     $files = $_FILES['files'];
     //echo '<pre>',print_r($files),'</pre>';
     $fileNames = $files['name'];
     $filetypes = $files['type'];
     $filetmpNames = $files['tmp_name'];
     $fileErrors = $files['error'];
     $fileSizes = $files['size'];
     $dir = "utility/";
     

     foreach($fileNames as $index => $name){
         if(CheckFileType($filetypes[$index])){
             if(Checksize($filetypes[$index])){
                 $fixDir = $dir.basename($fileNames[$index]);
                 if(CheckFile($fixDir)){
                     if(ChangeDirectory($filetmpNames[$index],$fixDir)){

                        // echo "<img scr=\"$fixDir\"/>",$fixDir;
                         
                     }else{echo "Error Upload!!!";}
                 }else{echo "File Exixts!!!!";}
             }else{echo "Too large size!!";}
         }else{echo "Error File Type!!";}
        }

$folder="utility";
$results=scandir("utility");
 foreach($results as $result){
     if($result === '.' or $result==='..') continue;

     if(is_file($folder . '/' .$result)){
         echo '
            <div class="col-md-3">
                <img src="'.$folder . '/' .$result. '"alt="..." style="width:250px; height:auto;"> </div>';
     }
 }
     


?>