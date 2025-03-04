@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">          
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Users</h4>
                        <a href="{{ route('adduser.create') }}" class="btn btn-primary float-right veiwbutton">Add user</a>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                      
                                        <td class="text-right" >
                                            <a  href="#">
                                                <i class="fas fa-pencil-alt m-r-5"></i> 
                                            </a>
                                            <a  href="#" >
                                                <i class="fas fa-trash-alt m-r-5"></i> 
                                            </a>
                                            
                                        </td>
                                    </tr>
                                    @endforeach                               
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection