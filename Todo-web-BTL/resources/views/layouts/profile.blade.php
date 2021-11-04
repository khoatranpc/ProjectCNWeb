<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="./assets/css/profile.css">
    
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
              <li id="user-info" onclick="tabClick()">
                <span class="name-user">User Information</span>
              </li>
                <a class="schedule" href="/schedule">
                  <li id="user-schedule" onclick="tabClick()">
                    <span>Schedule</span>
                  </li>
                </a>
            </ul>
          </div>
          <div class="dentails-tab">
            @yield('profile')
        </div>
      </div>
    </div> 
    
</body>

