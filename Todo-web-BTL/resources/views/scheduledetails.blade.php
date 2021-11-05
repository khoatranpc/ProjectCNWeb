<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/scheduleDetails.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <title>scheduleDetails</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head">
                    <h1 class="infor">Infor User </h1>
                    <h1 class="schedule">Schedule Details  </h1>
                </div>
            <div class="center">

                <form class="form" action="">
                    <button name="btn-add" class="btn btn-primary btn-block">Thêm</button>
                    
                    <div class="a">
                        <a class="x" href="http://127.0.0.1:8000/login">X</a>
                    </div>

                    <div class="form-group">
                        <label style="color:#fff" for="schedule name">Schedule Name</label>
                        <input type="text" class="form-control" name="schedulename" id="schedulename">
                    </div>

                    <div class="form-group">
                        <label style="color:#fff" for="datetime">Time</label>
                        <input type="date" class="form-control" name="datetime" id="datetime">
                    </div>
                    <div class="root">
                        <button name="btn-change" class="btn btn-primary btn-block-change">Sửa</button>
                        <button name="btn-update" class="btn btn-primary btn-block-update">Cập nhật</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>  
</body>
</html>



