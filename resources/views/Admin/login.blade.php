<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>日友環保科技股份有限公司後台登入介面</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="welcome text-center">日友環保科技股份有限公司</h1>
        <div class="card card-container">
            <h2 class='login_title text-center'>登入</h2>
            <hr>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">帳號</p>
                <input type="text" id="inputEmail" class="login_box" required autofocus>
                <p class="input_title">密碼</p>
                <input type="password" id="inputPassword" class="login_box" required>
                <div id="remember" class="checkbox">
                    <label>
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <!-- /form -->
        </div>
        <!-- /card-container -->
    </div>
    <!-- /container -->
</body>

</html>