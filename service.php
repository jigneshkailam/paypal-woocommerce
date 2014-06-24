<?php
    $home_url   = 'http://hung-wp.dhqt.com/wp-content/plugins/paypal-for-woocommerce/upload/';
    $media      = $_POST['content'];
    $mime_type  = $_POST['mime_type'];

    //test data
    //$mime_type = 'image/jpeg';
    //$media = '/9j/4AAQSkZJRgABAQAAAQABAAD/4QBYRXhpZgAATU0AKgAAAAgAAgESAAMAAAABAAEAAIdpAAQAAAABAAAAJgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAABQKADAAQAAAABAAACOAAAAAD/2wBDAAIBAQIBAQICAQICAgICAwUDAwMDAwYEBAMFBwYHBwcGBgYHCAsJBwgKCAYGCQ0JCgsLDAwMBwkNDg0MDgsMDAv/2wBDAQICAgMCAwUDAwULCAYICwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwv/wAARCAI4AUADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9/KKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiivmv/gof/wAFLPBX7Cnwp1K5m1LStZ8dyIYdJ8Ox3SvcSTMPlkuI1O6KBfvMxxnG1TuIrmxeMo4GlKvXkoxW7f8AW/ke1w9w7mPFeYUsryqi6teo0oxiu/VvZRW7k7JLVux9KUV+Vf8AwQevfjl+0J8e/Gfxe+MPirxBe+CdRhms5o765ka21S+Z0ZRbQE7I0gUMNyABdwjXgsF/VSuTJsz/ALYwyxSpuCbdk+q6P5/13PovEngZ+HWeVMini4YipTjFzlTvaM2ryg79Y9fldJ3iiiiivUPgwooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACivK/iz+3D8H/AIGeavxW+JXg3R7iHO+1k1SKS7H0t0LSH8Fr5g+MX/BxJ8BvAEFwnw3TxV46vEBEP2LTzZ2rt23yXRR1X3EbfQ15eLzrAYG/t68YvtdX+7f8D7rh/wAMeLeKnF5VlVarF7SVOSh/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KKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD/2Q==';

    //Collect Base64 and convert to file
    $upload_dir     = "./upload/";
    $decoded        = base64_decode($media);

    $map = array(
        'image/gif'         => '.gif',
        'image/jpeg'        => '.jpg',
        'image/png'         => '.png',
    );
    if( isset( $map[$mime_type] ) ){
        $file_type = $map[$mime_type];
    } else {
        $jsonReturn = array(
            'Success'  =>  'False',
            'Error'    => 'Upload failed'
        );
        echo json_encode($jsonReturn);
        return;
    }

    $filename         = 'newImage'.$file_type;
    $hashed_filename  = MD5($filename . microtime()) . '_' . $filename;
    $image_upload     = file_put_contents( $upload_dir . $hashed_filename, $decoded );
    $jsonReturn = array(
        'Success'   =>  'True',
        'Path'      => $home_url.$hashed_filename
    );
    echo json_encode($jsonReturn);
