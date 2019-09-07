@extends('dashboard.master')
@section('title', 'Employee')
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
                <a class="btn btn-primary" href="employee/add-employee" role="button">Add Employee
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
                            <th>Sl
                            </th>
                            <th>Name
                            </th>
                            <th>Code
                            </th>
                            <th>Department
                            </th>
                            <th>Join Date
                            </th>
                            <th>Address
                            </th>
                            <th>Manager
                            </th>
                            <th>Image
                            </th>
                            <th>Action
                            </th>
                        </tr>
                    </thead>
                    @php
                    ($i=1)
                    @endphp
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$i++}}
                        </td>
                        <td>{{$employee->name}}
                        </td>
                        <td>{{$employee->code}}
                        </td>
                        <td>{{$employee->departments->department_name}}
                        </td>
                        <td>{{$employee->join_date}}
                        </td>
                        <td>{{$employee->address}}
                        </td>
                        <td>{{$employee->manager}}
                        </td>
                        <td>
                            <img src="{{asset('storage/'.$employee->emp_image)}}" style="width: 80px;height: auto;">
                        </td>
                        <td>
                            <a href="{{url('employee/update-employee?employee_id='.$employee->id)}}"
                            class="btn btn-primary">
                             <span>Edit
                             </span>
                         </a>
                         <a href="{{url('employee/delete-employee?employee_id='.$employee->id)}}"
                             class="btn btn-danger"
                             onclick=" return confirm('are you sure to delele this')">
                             <span>Delete
                             </span>
                         </a>
                     </td>
                 </tr>
                 @endforeach
             </table>
         </div>
         {{$employees->render()}}
            </div>
        </div>
    </div>
    </div>
</div>







@endsection
