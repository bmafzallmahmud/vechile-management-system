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
                        <a class="btn btn-primary" href="add-fitness" role="button">Add Fitness Info.</a>
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
                                <th>Vehicle Register ON</th>
                                <th>Last Fitness Check</th>
                                <th>Next Fitness Check</th>
                                <th>Fitness Description</th>
                                <th>Fitness Certificate</th>
                                <th>Status</th>
                                <th>Action</th>


                            </tr>
                            </thead>

                            @foreach($fitness as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->vehicle->registration_no}}</td>
                                    <td>{{$value->last_fitness_check}}</td>
                                    <td>{{$value->next_fitness_check}}</td>
                                    <td>{{$value->fitness_description}}</td>
                                    <td>
                                        <img src="{{ asset("storage/upload/".$value->fitness_certificate)}}"
                                             style="height:60px; width: 50;">
                                    </td>

                                    <td>{{ $value->status == 1 ? 'Active' : 'In Active' }}</td>

                                    <td class="text-center">
                                        @if ($value->status == 1)
                                            <a href="{{ url('inactine-fitness' ,['id'=>$value->id]) }}"
                                               class="btn btn-primary">
                                                <span>Active</span>
                                            </a>
                                        @else
                                            <a href="{{ url('actine-fitness' ,['id'=>$value->id]) }}"
                                               class="btn btn-warning">
                                                <span>In Active</span>
                                            </a>
                                        @endif

                                        <a href="{{url('fitness/update-fitness?fitness_id='.$value->id)}}"
                                           class="btn btn-success">
                                            <span>Edit</span>
                                        </a>

                                        <a href="{{url('fitness/delete-fitness?fitness_id='.$value->id)}}"
                                           class="btn btn-danger"
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
