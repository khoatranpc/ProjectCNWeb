<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    {{-- <link rel="stylesheet" href="./assets/css/profile.css"> --}}
    <link rel="stylesheet" href="{{URL::to('assets/css/profile.css')}}">
    <link
      rel="icon"
      href="../ProjectCNWeb/assets/favicon.ico"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <title>Manager User TodoList</title>
</head>
<body>
      <div class="back-video">
        <video autoplay loop muted> 
            <source src="/assets/4k.mp4" type="video/mp4">
        </video>
      </div>
     <div class="container">
       
      <div class="layout-main row justify-content-md-center">
        <div class="col-md-auto main">
            <div class="logout">
              <a href="/logout">Log out</a>
            </div>
          <div class="col">
            <label for="inputNationality"></label>
          </div>
          <div class="tab-control">
            <ul class="m-0 xxl">
              <li  id="user-info">
                <a href="/profile" style="text-decoration: none">
                  <span class="name-user">User Information</span>
                </a>
              </li>
              <li id="user-schedule">
                <a href="/schedule" style="text-decoration: none">
                  <span class="name-user">Schedule</span>
                </a>
              </li>

            </ul>
          </div>
          <div class="dentails-tab">
            <div class="on-dentail-tab p-4">
              <div class="profile">      
                @yield('profile')
              </div>
            </div>
          </div>
       
      </div>
    </div> 
    <style>
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
</body>

