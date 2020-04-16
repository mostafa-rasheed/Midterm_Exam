@extends('layout.app')
@section('tittel','CRUD App')

@section('content')

<div class="card">
    @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                        </div>
                    @endif

    <div  class="card-header"><i class="fa fa-fw fa-plus-circle"></i>
        <strong>Add User</strong>
        <form action="index_page" method="GET">
            @csrf
       <button  class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</button>
       
    </form>
    
    </div>


    <div class="card-body">
        <div class="col-sm-6">
            <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
            <form method="post" action="store">
                @csrf
                <div class="form-group">
                    <label>User Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter user name"  >
                </div>

                <div class="form-group">
                    <label>User Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter user email"  >
                </div>

                <div class="form-group">
                    <label>User Phone <span class="text-danger">*</span></label>
                    <input type="number" pattern=".{14,14}"  class="tel form-control" name="phone" id="phone" x-autocompletetype="tel" placeholder="Enter user phone" " >
                </div>

                <div  class="form-group"> 
                   
                    <button type="submit" name="submit" value=" " id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection