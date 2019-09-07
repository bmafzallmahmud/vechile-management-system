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
                        <a class="btn btn-primary" href="add-location" role="button">Add Location</a>
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
                    <th>ID</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
                </thead>
                @foreach($locations as $location)


                <tr>
                    <td>{{$location->id}}</td>
                    <td>{{$location->location}}</td>

                    <td>
                        <a href="{{url('location/edit-location?location_id='.$location->id)}}" class="btn btn-success">
                            <span>Edit</span>
                        </a>

                        <a href="{{url('location/delete-location?location_id='.$location->id)}}" class="btn btn-danger"
                           onclick=" return confirm('are you sure to delele this')">
                            <span>Delete</span>
                        </a>
                    </td>

                </tr>


            @endforeach


            </table>

            </div>
        </div>
    </div>
</div>
           </div>
    </div>      
       
            

@endsection
