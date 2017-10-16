<?php
    /**
     * Created by PhpStorm.
     * User: wangwei
     * Date: 2017/10/16
     * Time: 下午6:23
     */
    if(isset($_FILES['my_file'])){
        $file_name = $_FILES['my_file']['name'];
        move_uploaded_file($_FILES['my_file']['tmp_name'], "/Users/wangwei/file_f/".$file_name);
        echo $file_name;
    }
?>
