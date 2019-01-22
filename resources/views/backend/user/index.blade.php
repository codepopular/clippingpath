@extends('layouts.backend')
@section('contents')

<div class="content">
  <div class="container-fluid">

  <div class="card-body">
  <div class="card">


    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">email</th>
      <th scope="col">status</th>
      <th scope="col">name</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <a href="{{route('myuser.create')}}">
    <div class="text-center" style="margin:20px 0px">
    <button type="submit" class="btn btn-info waves-effect waves-light">
      Add USER
    </button>
    </div>
    </a>
    @if(Session('status'))
    <h4 style="color:green;text-align:center">User Deleted Successfully</h4>
    @endif

    <tr>
      <?php $x=0;?>
      @foreach($myusers as $getUser)
      <?php $x++;?>
      <td>{{$x}}</td>
      <td>{{$getUser->email}}</td>
      <td>Admin</td>
      <td>{{$getUser->name}}</td>
      <td>
        <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
        <form class="delete-form" action="{{action('myuserController@destroy',$getUser->id)}}" method="post">
          @method("DELETE")
             @csrf
        <button type="submit" class="btn btn-danger waves-effect waves-light" onclick="return confirm('are you sure want to delete data')"><i class="fa fa-trash"></i></button>
        </form>

      </td>


    </tr>
    @endforeach

  </tbody>
</table>



  </div>
  </div>


    </div> <!-- container-fluid -->
</div> <!-- content -->



@endsection
