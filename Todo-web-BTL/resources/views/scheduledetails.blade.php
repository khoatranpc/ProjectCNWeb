@extends('layouts.profile')

@section('profile')
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

@endsection



