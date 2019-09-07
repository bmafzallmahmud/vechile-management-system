@extends('dashboard.master')
@section('title', 'Departments')
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
                    <a class="btn btn-primary" href="department/add-department" role="button">Add Department
                    </a>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h2>Department List
                        </h2>
                    </div>
                    <div class="box-divider m-a-0">
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#
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
                            @foreach($departments as $department)
                            <tr>
                                <td>{{$department->id}}
                                </td>
                                <td>{{ $department->department_name  }}
                                </td>
                                <td>
                                    <a href="{{url('department/update-department?department_id='.$department->id)}}" class="btn btn-primary"">
                                        <span>Edit
                                        </span>
                                    </a>
                                    <a href="{{url('department/delete-department?department_id='.$department->id)}}" class="btn btn-danger"
                                     onclick=" return confirm('are you sure to delele this')">
                                     <span>Delete
                                     </span>
                                 </a>
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                 {{$departments->links()}}
             </div>
         </div>
     </div>
 </div>
 
</div>
</div>

@endsection
