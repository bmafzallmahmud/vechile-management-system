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
                        <a class="btn btn-primary" href="vehicle_and_route/add-vehicle_and_route" role="button">Add Vehicle & Route</a>
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
                    <th >ID</th>
                    <th >Vehicle</th>
                    <th >Route</th>
                    <th >Actions</th>
                </tr>
                </thead>

                @foreach($vehicle_and_routes as $vehicle_and_route)
                    <tr>
                        <td>{{$vehicle_and_route->id}}</td>
                        <td>{{$vehicle_and_route->vehicles->registration_no}}</td>
                        <td>{{$vehicle_and_route->routes->route_name}}</td>

                        <td >
                            <a href="{{url('vehicle_and_route/update-vehicle_and_route?vehicle_and_route_id='.$vehicle_and_route->id)}}" class="btn btn-success">
                                <span>Edit</span>
                            </a>
                            <a href="{{url('vehicle_and_route/delete-vehicle_and_route?vehicle_and_route_id='.$vehicle_and_route->id)}}" class="btn btn-danger"
                               onclick=" return confirm('are you sure to delele this')">
                                <span>Delete</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{$vehicle_and_routes->render()}}
    </div>
            </div>
        </div>        
    </div>
</div>
       
        
    
@endsection
