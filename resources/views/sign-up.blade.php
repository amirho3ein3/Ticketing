<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://cdn.fontcdn.ir/Font/Persian/Nazanin/Nazanin.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="../css/sign-up.css">
    <title>sign up</title>
</head>
<body>
    <div class="contianer">
        <p class="para">همین الان عضوی از ما شو!</p>
        <div class="form">
            <div class="head">
                <h2>ثبت نام</h2>
                <div class="log">
                    <p>از قبل حساب کاربری دارید؟</p>
                    <a id="login" onclick="showlogin()" class="i-log" href="">ورود</a>
                </div>
            </div>
            <a class="btn-back">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
            <label for="firstname">نام:</label>
            <input class="form-control" type="text" name="firstname" id="firstname">
            <label for="lastname">نام خانوادگی:</label>
            <input class="form-control" type="text" name="lastname" id="lastname">
            <label for="number">شماره تلفن:</label>
            <input class="form-control" type="text" name="number" id="number">
            <label for="email">پست الکترونیک:</label>
            <input class="form-control" type="email" name="email" id="email" style="text-align:left ;">
            <label for="username">نام کاربری:</label>
            <input class="form-control" type="text" name="username" id="username">
            <label for="password">رمز عبور:</label>
            <input class="form-control" type="password" name="password" id="password">
            <label for="password2">تکرار رمز عبور:</label>
            <input class="form-control" type="password" name="password2" id="password2">
            <label class="check-txt" for="checkbox">
                <input class="check-box" type="checkbox" name="checkbox" id="checkbox">
                 ارسال اخرین اخبار واطلاعیه های مربوط به سایت از طریق ایمیل
            </label>
            <button class="btn-signup">ثبت نام</button>         
        </div>
    </div>
</body>
</html>