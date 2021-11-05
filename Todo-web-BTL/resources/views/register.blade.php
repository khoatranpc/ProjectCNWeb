@extends('layouts.logReg')

@section('form')
    
<div class="form-reg">
<h1 style="text-align: center; padding:1rem;">Register Account</h1>
   <form method="POST"  action="register" id="form-reg">
        @csrf
        <div class="table-row">
            <table>
                <tr>
                    <th>Họ tên</th>
                    <th>Tên tài khoản</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="name" id="">
                        <br>
                        <label>@error('name'){{$message}}@enderror</label>
                    </td>
                    <td>
                        <input type="text" name="acc" id="">
                        <br>
                        <label>@error('acc'){{$message}}@enderror</label>
                    </td>
                </tr>
                <tr>
                    <th>Ngày sinh</th>
                    <th>Mật khẩu</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="birth" id="">
                        <br>
                        <label>@error('birth'){{$message}}@enderror</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="">
                        <br>
                        <label>@error('password'){{$message}}@enderror</label>
                    </td>
                </tr>
                <tr>
                    <th colspan="1">Giới tính</th>
                    <th colspan="1">Đường dẫn hình ảnh</th>
                </tr>
                <tr>
                    <td class="round-sex">
                        <div >
                            <input type="radio" name="sex" id="nam" value="nam"> <span>Nam</span>
                            <input type="radio" name="sex" id="nu" value="nu"> <span>Nữ</span>
                        </div>
        
                        <label>@error('sex'){{$message}}@enderror</label>
                    </td>
                    <td>
                        <input type="text" name="img" id="">
                        <br>
                        <label>@error('img'){{$message}}@enderror</label>
                    </td>
                </tr>
                <tr>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="sdt" id="">
                        <br>
                        <label>@error('sdt'){{$message}}@enderror</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="">
                        <br>
                        <label>@error('email'){{$message}}@enderror</label>
                    </td>
                </tr>
            </table>
        </div>
    <div class="btn">
        <a href="/login" class="btn-login">Đăng nhập</a>
        <button class="reg" type="" class="reg">Đăng ký</button>
    </div>
   </form>
</div>
@endsection