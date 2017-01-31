<?php
    session_start();
    header("Content-Type:image/png");
    $image=imagecreatetruecolor(100, 30);
    $bgcolor=imagecolorallocate($image, 255, 255,255);
    imagefill($image, 0, 0, $bgcolor);
    // for ($i=0; $i <4; $i++) { 
    //     $size=6;
    //     $color=imagecolorallocate($image, rand(0,255),rand(0,255),rand(0,255));
    //     $content=rand(0,9);
    //     $x=25*$i+rand(5,10);
    //     $y=rand(5,10);

    //     imagestring($image, $size, $x, $y, $content, $color);
    // }

    //字母加数字混合
    $code="";
    for ($i=0; $i <4 ; $i++) { 
        $size=5;
        $color=imagecolorallocate($image, rand(0,155),rand(0,155),rand(0,155));
        $data="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ12345689";
        $content=substr($data, rand(0,strlen($data)-1),1);
        $code.=$content;

        $x=25*$i+rand(5,10);
        $y=rand(5,10);
        imagestring($image, $size, $x, $y, $content, $color);
    }
    $_SESSION['auto_code']=$code;

    for ($i=0; $i <200 ; $i++) { 
        $point=imagecolorallocate($image, rand(0,255),rand(0,255),rand(0,255));
        imagesetpixel($image, rand(0,100),rand(1,30), $point);
    }
    for ($i=0; $i < 3; $i++) { 
        $linecolor=imagecolorallocate($image, rand(0,255),rand(0,255),rand(0,255));
        imageline($image, rand(0,100),rand(0,30),rand(0,100),rand(0,30), $linecolor);
    }
    imagepng($image);

?>