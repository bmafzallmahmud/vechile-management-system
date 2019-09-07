@extends('dashboard.master')
@section('title', 'Drivers')
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
                        <a class="btn btn-primary" href="seat_assign/add-seat_assign" role="button">Assign Seat</a>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h2>Driver List
                            </h2>
                        </div>
                        <div class="box-divider m-a-0">
                        </div>
                        <table class="table">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>employee</th>
                    <th>Seat No.</th>
                    <th>Vehicle</th>
                    <th>Route</th>
                    <th>Action</th>
                </tr>
                </thead>
                @php
                ($i=1)
                @endphp

                @foreach($seat_assigns as $seat_assign)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$seat_assign->employees->name}}</td>
                        <td>{{$seat_assign->seats->seat_number}}</td>
                        <td>{{$seat_assign->vehicles->registration_no}}</td>
                        <td>{{$seat_assign->routes->route_name}}</td>

                        <td>
                            <a href="{{url('seat_assign/update-seat_assign?seat_assign_id='.$seat_assign->id)}}"
                               class="btn btn-success">
                                <span>Edit</span>
                            </a>
                            <a href="{{url('seat_assign/delete-seat_assign?seat_assign_id='.$seat_assign->id)}}"
                               class="btn btn-danger"
                               onclick=" return confirm('are you sure to delete this')">
                                <span>Delete</span>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
        {{$seat_assigns->render()}}
    </div>
            </div>
        </div>      
    </div>
</div>
        
       
    
@endsection
