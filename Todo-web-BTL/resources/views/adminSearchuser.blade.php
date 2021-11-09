@extends('/layouts.adminlayout')
@section('admin')
<style>
    tr, td{
        color: white;
    }
    
    .w-5{
        display: none;
    }
    .table-user{
        margin: 1rem 0;
        border-left: 1px solid white;
        border-right: 1px solid white;
        padding: 3rem 1rem;
    }
    div.footer-table{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    div.footer-table a,span{
        font-weight:bold; 
        color: rgb(255, 0, 0);
    }
    div.hidden{
        padding-top:1rem; 
        text-align: center
    }
</style>
    <div class="manager">
      
          <div class="table-user">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Account</th>
                    <th scope="col">NumberPhone</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($userinf as $users)
                    <tr>
                        <th scope="row">{{$users['IDuser']}}</th>
                        <td>{{$users['Hoten']}}</td>
                        <td>{{$users['acc']}}</td>
                        <td>{{$users['SDT']}}</td>
                        <td>{{$users['Email']}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
          <div class="footer-table" style=>
            <strong>---Found {{count($userinf)}} results---</strong>
            <span style="position: absolute; right: 0"><a href="/admin">End searching</a></span>
          </div>
        </div>
    </div>
<script>
    
</script>
@endsection