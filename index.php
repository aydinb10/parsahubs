
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>رزرو مکان و زمان پارسا</title>
    <link rel="stylesheet"   href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">



    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital@1&display=swap" rel="stylesheet">

</head>
<body>


    <div class="header">
        <header>
            <img src="img/gay-marriage-male-2-512.png" class="logo">
            <h1 class="title">parsa <span>hub</span></h1>
        </header>
    </div>
    <section class="banner">
    <div class="banner-text">
        <h1>سایت رزرو وقت و مکان پارساهاب</h1>
    </div>
        <div class="form">
            <form action="" method="post">
            <p>برای وارد شدن به سایت کد عضویت خود را وارد کنید</p>
                <br>
                <input type="password" class="code" name="code" placeholder="....کد عضویت">
                <br>
                <input type="submit" value="!وارد شو حشریم" class="btn" name="btn"><br><br>
                <?php

                $code=$_POST["code"];
                $btn=$_POST["btn"];
                if (isset($btn)) {
                    if ($code == "kon_mikham") {
                        header("location:welcome.php");
                    }
                    else {
                        echo "<span>!جقی کد رو اشتباه زدی</span>";

    }
                }
                ?>
            </form>
        </div>
        <div class="containers">
            <hr>
            <p>کد عضویت فقط به مشتری های ثابت داده میشود</p>





        </div>





</section>
</body>
</html>