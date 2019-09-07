@extends('dashboard.master')
@section('title', 'Roles')
@section('content')

<div id="page-wrapper">
    <div class="main-page">
       <div class="padding">
        <div class="row">
            <div class="col-sm-12">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                    </p>
                    @endif
                    @endforeach
                </div>
                <div class="padding">
                    <a class="btn btn-primary" href="role/add-role" role="button">Add Role
                    </a>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h2>Driver List
                        </h2>
                    </div>
                    <div class="box-divider m-a-0">
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID
                                </th>
                                <th>Name
                                </th>
                                <th>Action
                                </th>
                            </tr>
                        </thead>
                        @php
                        ($i=1)
                        @endphp
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}
                                </td>
                                <td>{{$role->role_name}}
                                </td>
                                <td>
                                    <a href="{{url('role/update-role?role_id='.$role->id)}}" class="btn btn-success">
                                        <span>Edit
                                        </span>
                                    </a>
                                    <a href="{{url('role/delete-role?role_id='.$role->id)}}" class="btn btn-danger"
                                     onclick=" return confirm('are you sure to delele this')">
                                     <span>Delete
                                     </span>
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
