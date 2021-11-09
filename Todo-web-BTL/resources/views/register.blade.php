@extends('layouts.logReg')

@section('form')
    
<div class="form-reg">
<h1 style="text-align: center; padding:1rem;">Register Account</h1>
    @if (session('hasAcc'))
    <div class="alert alert-success">
        <h3 style="text-align: center; color:red">{{ session('hasAcc') }}</h3>
    </div>
    @endif
    @if ($errors->any())
        <h3 style="text-align: center; color:red">You need to fill out the fields below</h3>
    @endif

   <form method="POST"  action="register" id="form-reg">
        @csrf
        <div class="table-row">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Name account</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="name" id="" value="{{old
                        ('name')}}">
                        <br>
                        {{-- <label>@error('name'){{$message}}@enderror</label> --}}
                    </td>
                    <td>
                        <input type="text" name="acc" id="" value="{{old
                        ('acc')}}">
                        <br>
                        {{-- <label>@error('acc'){{$message}}@enderror</label> --}}
                    </td>
                </tr>
                <tr>
                    <th>Date of birh</th>
                    <th>Password</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="birth" id="" value="{{old
                        ('birth')}}"> 
                        <br>
                        {{-- <label>@error('birth'){{$message}}@enderror</label> --}}
                    </td>
                    <td>
                        <input type="password" name="password" id="">
                        <br>
                        {{-- <label>@error('password'){{$message}}@enderror</label> --}}
                    </td>
                </tr>
                <tr>
                    <th colspan="1">Sex</th>
                    <th colspan="1">Link url image</th>
                </tr>
                <tr>
                    <td class="round-sex">
                        <div >
                            <input type="radio" name="sex" id="nam" value="nam"> <span>Male</span>
                            <input type="radio" name="sex" id="nu" value="nu"> <span>Female</span>
                        </div>
        
                        {{-- <label>@error('sex'){{$message}}@enderror</label> --}}
                    </td>
                    <td>
                        <input type="text" name="img" id="" value="{{old
                        ('img')}}">
                        <br>
                        {{-- <label>@error('img'){{$message}}@enderror</label> --}}
                    </td>
                </tr>
                <tr>
                    <th>NumberPhone</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="sdt" id="" value="{{old
                        ('sdt')}}">
                        <br>
                        {{-- <label>@error('sdt'){{$message}}@enderror</label> --}}
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="{{old
                        ('email')}}">
                        <br>
                        {{-- <label>@error('email'){{$message}}@enderror</label> --}}
                    </td>
                </tr>
            </table>
        </div>
    <div class="btn">
        <a href="/login" class="btn-login">Login</a>
        <button class="reg" type="" class="reg">Keep Signup</button>
    </div>
   </form>
</div>
@endsection