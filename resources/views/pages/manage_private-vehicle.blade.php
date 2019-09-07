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
                        <a class="btn btn-primary" href="private_vehicle/add-private-vehicle" role="button">Add Private Vehicle</a>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h2>Private Vehicle List
                            </h2>
                        </div>
                        <div class="box-divider m-a-0">
                        </div>
                        <table class="table">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Employee</th>
                    <th>Vehicle Reg. No.</th>
                    <th>Assigned Driver</th>
                    <th>Action</th>
                </tr>
                </thead>
                @php
                ($i=1)
                @endphp

                @foreach($private_vehicles as $private_vehicle)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$private_vehicle->employees->name}}</td>
                        <td>{{$private_vehicle->vehicles->registration_no}}</td>
                        <td>{{$private_vehicle->assignedDrivers->drivers->name}}</td>
                        <td>
                            <a href="{{url('private_vehicle/update-private_vehicle?private_vehicle_id='.$private_vehicle->id)}}"
                               class="btn btn-success">
                                <span>Edit</span>
                            </a>
                            <a href="{{url('private_vehicle/delete-private_vehicle?private_vehicle_id='.$private_vehicle->id)}}"
                               class="btn btn-success"
                               onclick=" return confirm('are you sure to delete this')">
                                <span>Delete</span>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
        {{$private_vehicles->render()}}
    </div>
            </div>
        </div>       
    </div>
</div>
        
    
@endsection
