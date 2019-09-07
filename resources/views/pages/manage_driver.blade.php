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
                        <a class="btn btn-primary" href="driver/add-driver" role="button">Add Driver</a>
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
                                <th>Name
                                </th>
                                <th>Code
                                </th>
                                <th>Join Date
                                </th>
                                <th>Address
                                </th>
                                <th>Manager
                                </th>
                                <th>Image
                                </th>
                                <th>Actions
                                </th>
                            </tr>
                            </thead>
                            @php
                            ($i=1)
                            @endphp
                            <tbody>
                            @foreach($drivers as $driver)
                                <tr>
                                    <td>{{$i++}}
                                    </td>
                                    <td>{{$driver->name}}
                                    </td>
                                    <td>{{$driver->code}}
                                    </td>
                                    <td>{{$driver->join_date}}
                                    </td>
                                    <td>{{$driver->address}}
                                    </td>
                                    <td>{{$driver->manager}}
                                    </td>
                                    <td>
                                        <img src="{{asset('storage/'.$driver->driver_image)}}" style="width: 80px;height: auto;">
                                    </td>
                                    <td>
                                        <a href="{{url('driver/update-driver?driver_id='.$driver->id)}}"
                                           class="btn btn-primary">
                    <span>Edit
                    </span>
                                        </a>
                                        <a href="{{url('driver/delete-driver?driver_id='.$driver->id)}}"
                                           class="btn btn-danger"
                                           onclick=" return confirm('are you sure to delete this')">
                    <span>Delete
                    </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$drivers->render()}}
                </div>
            </div>
        </div>
           </div>
        </div>
     
   
@endsection
