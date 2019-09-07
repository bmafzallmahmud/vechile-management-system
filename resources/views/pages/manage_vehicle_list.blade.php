@extends('dashboard.master')
@section('title', 'Add Vehicle')
@section('content')
    <!-- content -->

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
                        <a class="btn btn-primary" href="register-vehile" role="button">Add Vehicle</a>
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
                                <th>#
                                </th>
                                <th>Model
                                </th>
                                <th>Registration No.
                                </th>
                                <th>Chasis No.
                                </th>
                                <th>Engine No.
                                </th>
                                <th>Type
                                </th>
                                <th>Seats
                                </th>
                                <th>Owner
                                </th>
                                <th>Actions
                                </th>
                            </tr>
                            </thead>
                            @php
                            ($i=1)
                            @endphp
                            <tbody>
                @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$vehicle->model_no}}</td>
                        <td>{{$vehicle->registration_no}}</td>
                        <td>{{$vehicle->chassis_no}}</td>
                        <td>{{$vehicle->engine_no}}</td>
                        <td>{{$vehicle->vehicle->vehicle_type}}</td>
                        <td>{{$vehicle->number_of_seat}}</td>
                        <td>{{$vehicle->owner}}</td>

                        <td>

                            <a href="{{url('vehicle/update-vehicle?vehicle_id='.$vehicle->id)}}" class="btn btn-success">
                                <span>Edit</span>
                            </a>

                            <a href="{{url('vehicle/delete-vehicle?vehicle_id='.$vehicle->id)}}" class="btn btn-danger"
                               onclick=" return confirm('are you sure to delele this')">
                                <span>Delete</span>
                            </a>
                        </td>

                    </tr>
                 @endforeach
                            </tbody>

            </table>
            {{$vehicles->links()}}

        </div>

    </div>
            </div>
        </div>
            

           </div>
        </div>
        
        
@endsection
