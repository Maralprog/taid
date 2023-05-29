<?

    if( $_POST['order_go'] ) {
        // print_r( $_POST );
        require_once( 'conf.php' );
        $fio = $_POST['fio'];
        $region = $_POST['region'];
        $theme = $_POST['theme'];
        $service = $_POST['service'];
        $desc = $_POST['desc'];
        $file = fileupload( 'file' );
        DBQuery(" INSERT INTO `orders` 
            (`fio`,`region`,`theme`,`service`,`desc`,`file`)
            VALUES
            ('$fio','$region','$theme','$service','$desc','$file')
         ");
        header('Location: contacts.php?note=s');
    } else {
        header('Location: index.php');
    }