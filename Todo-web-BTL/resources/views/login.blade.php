<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
*{
    padding: 0;
    margin: 0;
    font-family: 'Courier New', Courier, monospace
}
html, body{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
.container{
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0,0.2)),url('/assets/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
}
.form-login{
    background-color: rgba(14, 14, 14, 0.5);
    width: 425px;
    height: 60%;
    border-radius:20px; 
    color: white;
}
form{
    padding: 2rem 3rem;
}
span{
    font-size: 20px;
}
input{
    width: 100%;
    height: 2em;
    font-size: 20px;
    margin:10px 0; 
}
form label{
    color: rgb(241, 109, 109);
}
form button{
    padding: 1rem;
    background-color: rgb(15, 117, 235);
    border: hidden;
    border-radius: 10px; 
    font-size: 15px;
    box-shadow: 0 0 10px rgba(91, 152, 250, 0.1);
    transform: scale(0.95);
    transition: 0.5s;
    color: white;
    font-weight: bold;
}
form button:hover{
    cursor: pointer;
}
form button:active{
    box-shadow: 0 0 10px rgba(91, 152, 250, 0.5);
    transform: scale(1);
}
</style>