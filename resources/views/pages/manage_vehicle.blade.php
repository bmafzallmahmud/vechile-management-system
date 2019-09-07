@extends('dashboard.master')
@section('title', 'Vehicle Type')
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
                        <a class="btn btn-primary" href="add-vehicle-type" role="button">Add Vehicle Type
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h2>Vehicle Type List
                            </h2>
                        </div>
                        <div class="box-divider m-a-0">
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#
                                    </th>
                                    <th>Type
                                    </th>
                                    <th>Status
                                    </th>
                                    <th>Actions
                                    </th>
                                </tr>
                            </thead>
                            @foreach($vehicles as $vehicle)
                            <tbody>
                                <tr>
                                    <td>{{$vehicle->id}}
                                    </td>
                                    <td>{{$vehicle->vehicle_type}}
                                    </td>
                                    <td>{{ $vehicle->status == 1 ? 'Active' : 'In Active' }}
                                    </td>
                                    <td>
                                        @if ($vehicle->status == 0)
                                        <a href="{{ url('inactine-vehicle' ,['id'=>$vehicle->id]) }}" class="btn btn-primary">
                                            <span>Active
                                            </span>
                                        </a>
                                        @else
                                        <a href="{{ url('actine-vehicle' ,['id'=>$vehicle->id]) }}" class="btn btn-info">
                                            <span>In Active
                                            </span>
                                        </a>
                                        @endif
                                        <a href="{{url('vehicle/update-type-vehicle?vehicle_id='.$vehicle->id)}}" class="btn btn-success">
                                            <span>Edit
                                            </span>
                                        </a>
                                        <a href="{{url('vehicle/delele-vehicle?vehicle_id='.$vehicle->id)}}" class="btn btn-danger""
                                         onclick=" return confirm('are you sure to delele this')">
                                         <span>Delete
                                         </span>
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