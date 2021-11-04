<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/login.css">
    <title>Login Todo manager</title>
</head>
<body>
    <div class="container">
        <div class="form-login">
            <h1 style="text-align: center; padding:1rem;">Login to Manager System</h1>
            <form method="POST" action="user">
                @csrf
                <span>Tài khoản</span>
                
                <input type="text" name="account" id="">
                <label>@error('account'){{$message}}@enderror</label>
                <span>Mật khẩu</span>
               
                <input type="password" name="password" id="">
                <label>@error('password'){{$message}}@enderror</label>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>
<style>

</style>