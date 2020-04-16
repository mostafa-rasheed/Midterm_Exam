@extends('layout.app')
@section('tittel','CRUD App')

@section('content')

<div><i class="fa fa-fw fa-plus-circle"></i>
    <strong>Add User</strong>
    <form action="add_page" method="GET">
        @csrf
     <button class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Add User</button>
    </form>
</div>
<div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="bg-primary text-white">
                <th>Sr#</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone</th>
                <th class="text-center">Record Date</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{$task->id }}</td>
                <td>{{$task->name }}</td>
                <td>{{$task->email }}</td>
                <td>{{$task->phone }}</td>
                <td align="center">{{$task->created_at }}</td>
                <td align="center">
                    <form action="edit/{{$task->id}}" method="POST">
                        @csrf
                        <button class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</button> 
                        </form>
                    <form action="delete/{{$task->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                         <button class="text-danger" onclick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete </button>
                    </form>
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection