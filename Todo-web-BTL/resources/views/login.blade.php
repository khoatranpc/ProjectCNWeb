 @extends('layouts.logReg')

 @section('form')
     
 <div class="form-login">
 <h1 style="text-align: center; padding:1rem;">Login to Manager System</h1>
    @if (session('error'))
    <div class="alert alert-success">
        <h3 style="text-align: center; color:red">{{ session('error') }}</h3>
    </div>
    @endif
    <form method="POST" action="user">
        @csrf
        <span>Account</span> 
        <input type="text" name="account" id="" value="{{old('account')}}">
        <label>@error('account'){{$message}}@enderror</label>
        <span>Password</span>
        <input type="password" name="password" id="">
        <label>@error('password'){{$message}}@enderror</label>
        <button type="submit" class="login">SignIn</button>
        <a href="/registerAccount" class="btn-reg">SignUp</a>
    </form>
 </div>
@endsection