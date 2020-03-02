<!DOCTYPE html>
<html lang="zh-hant-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <title>NatureCare</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.2.0-web/css/all.css">
    <script src='js/jquery-3.3.1.min.js'></script>
    <script src='js/jquery.easing.1.3.js'></script>
    <script src='js/comm.js'></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
    $(function(){
        $('footer').load('footerContent.html');
        $('header').load('headerContent.html',function(){
            mainNavEffect();            
            catEffect();
            $('.slider').bxSlider({
                auto:true,
                mode:'fade',
            });
        });
        
    });
    </script>
    <style>
        .msg{
            color: white;
            background-color: rgba(0, 128, 0, 0.9);
            width: 50%;
            text-align: center;
            margin: 0;
            padding: 70px 0;
            margin: 0 auto;
            font-size: 2em;
        }
    </style>
</head>
<body>
<header>
</header>
<div id="banner">
    <div class="slider">
        <div><img src="images/banner.jpg" alt=""></div>
        <div><img src="slider/slider01.jpg" alt=""></div>
        <div><img src="slider/slider02.jpg" alt=""></div>
        <div><img src="slider/slider03.jpg" alt=""></div>
        <div><img src="slider/slider04.jpg" alt=""></div>
        <div><img src="slider/slider05.jpg" alt=""></div>
    </div>
</div>
<main>
<?php  
    $username=$_POST['name'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $time=$_POST['time'];
    
    
    $to      = '';
    $subject = "=?UTF-8?B?".base64_encode("NatureCare Submission Success!")."?=";
    $message = '姓名：'.$username. "\r\n".
               '性別：'. $gender."\r\n".
               '行動電話：'. $mobile."\r\n".
               '聯絡時段：'.implode(',',$time);
    $headers = 'From: dada_y00@hotmail.com' . "\r\n".
        'Reply-To: dada_y00@hotmail.com' . "\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo '<h3 class="msg">Thank you!'.$username.'，感謝您的填寫!</h3>';
    }else{
        echo '<h3 class="msg">Sorry!'.$username.'，您的填寫未成功送出!</h3>';
    };
    
?>
</main>
<footer>
</footer>
</body>
</html>