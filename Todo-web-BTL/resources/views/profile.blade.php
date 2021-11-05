@extends('layouts.profile')
@section('profile')  
              <form>
                <div class="text-center">
                  <img id="img-user" src="{{$inf->Hinhanh}}" alt="..." class="img-thumbnail">
                </div>
                <div >
                  <div class="form-group text-center " style="padding:0 2rem;"  >
                    <label for="inputUsercode"> 
                     ID User
                    </label>
                    <input type="text" class="form-control" id="inputUsercode" placeholder="..." value=" {{$inf->IDuser}}" align-item: readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" placeholder="..." value="{{$inf->Hoten}}" readonly>
                  </div>
                  <div class="col">
                    <label for="inputNationality">Nationality</label>
                    <input type="text" class="form-control" placeholder="..." value="" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="inputSex">Gender</label>
                    <input type="text" class="form-control" placeholder="..." value="{{$inf->Gioitinh}}" readonly>
                  </div>
                  <div class="col">
                    <label for="inputPhonenumber">phone number</label>
                    <input type="text" class="form-control" placeholder="..." value="{{$inf->SDT}}" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="inputDateofBirth">Date of birth</label>
                    <input type="date" class="form-control" placeholder="..." value="{{$inf->Ngaysinh}}" readonly>
                  </div>
                  <div class="col">
                    <label for="inputEmailaddress">Email address</label>
                    <input type="text" class="form-control" placeholder="..." value="{{$inf->Email}}" readonly>
                  </div>
            </form>
@endsection