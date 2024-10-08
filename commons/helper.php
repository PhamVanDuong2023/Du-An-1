<?php

// khai báo các hàm dùng Global
if(!function_exists('require_file')){
    function require_file($pathFolder){
        $files = array_diff(scandir($pathFolder),['.','..']);
        
        foreach($files as $file){
            require_once $pathFolder . $file;
        }
    }
}
if (!function_exists('uploadFlie')) {
    function uploadFlie($file, $pathFolderUpload)
    {

        $imagePath = $pathFolderUpload . time() . basename($file['name']);

        if (move_uploaded_file($file["tmp_name"], PATH_UPLOAD . $imagePath)) {
            return $imagePath;
        }
        return null;
    }
}
if(!function_exists('debug')){
    function debug($data){
        echo "<pre>";
        print_r($data);
        die;

    }
}
if(!function_exists('e404')){
    function e404(){
        echo "404 - Not-found";
        die;

    }
}
?>