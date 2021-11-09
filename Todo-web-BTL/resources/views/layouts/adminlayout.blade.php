<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/favicon.io">
    <link rel="icon" type="image/png" href="/assets/favicon.io">
    <title>Admin</title>
</head>
<body>
    <div class="back-video">
        <video autoplay loop muted>
            <source src="/assets/4k.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <a href="/logout"  style="position: relative; float:right;">Logout</a>
        <div class="header">
            <h1 class="text-center">Hello Admin! Welcome to Manager User System</h1>
        </div>

            <form action="{{route('searchuserinfor')}}" method="GET" style="display: flex">
                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Search by name or numberphone" name="key">
                <button class="input-group-text">Tìm kiếm</button>
            </form>
            

        @yield('admin')
    </div>
</body>
<style>
    .container{
        font-family: 'Noto Sans Mono', monospace;
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0,0,0,0.4);
    }
 
    .back-video{
        display: block;
        position: fixed;
        z-index: -10;
    }
    video{
        min-width: 100%;
        max-height: 100%;
        
    }
</style>
</html>