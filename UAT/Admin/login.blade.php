<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>日友環保科技股份有限公司後端登入介面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    <script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>
    try { Typekit.load({ async: true }); } catch (e) {}
    </script>
    <div class="container">
        <h1 class="welcome text-center">日友環保科技股份有限公司</h1>
        <div class="card card-container">
            <h2 class='login_title text-center'>Login</h2>
            <hr>
            {!! Form::open(array('url'=>'/Admin/Login','method'=>'POST')) !!}
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">帳號</p>
                <input type="text" id="inputEmail" class="login_box" name="user_name" required autofocus>
                <p class="input_title">密碼</p>
                <input type="password" id="inputPassword" class="login_box" name="user_pass" required>
                <div id="remember" class="checkbox">
                    <label>
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            {!! Form::close() !!}
            <!-- /form -->
        </div>
        <!-- /card-container -->
    </div>
    <!-- /container -->
    <script type="text/javascript">
    </script>
</body>

</html>