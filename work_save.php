<?

    if( $_POST['work_go'] ) {
        // print_r( $_POST );
        require_once( 'conf.php' );
        $name = $_POST['name'];
        $category = $_POST['category'];
        $company = $_POST['company'];
        $desc = $_POST['desc'];
        $file = fileupload( 'file' );
        DBQuery(" INSERT INTO `works` 
            (`name`,`category`,`company`,`desc`,`file`)
            VALUES
            ('$name','$category','$company','$desc','$file')
         ");
        header('Location: add.php?note=s');
    } else {
        header('Location: index.php');
    }