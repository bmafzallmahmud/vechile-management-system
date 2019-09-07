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
                    <a class="btn btn-primary" href="add-route" role="button">Add Route</a>
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
                                <th >ID</th>
                                <th >Route Name</th>
                                <th >Start Location</th>
                                <th >End Location</th>
                                <th >Stoppage</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($routes as $route)
                            <tr>
                                <td>{{$route->id}}</td>
                                <td >{{$route->route_name}}</td>
                                {{--<td class="text-center">{{$route->route->location}}</td>--}}
                                <td >{{$route->startLocation->location}}</td>
                                <td >{{$route->endLocation->location}}</td>
                                <td ><button type="button" class="btn btn-info btn-xs stoppage" id="{{$route->id}}" data-toggle="modal" data-target="#myModal">View</button></td>

                                <td >

                                    <a href="{{url('route/edit-route?route_id='.$route->id)}}" class="btn btn-success"><span>Edit</span></a>

                                    <a href="{{url('route/delete-route?route_id='.$route->id)}}" class="btn btn-danger"
                                     onclick=" return confirm('are you sure to delele this')">
                                     <span>Delete</span>
                                 </a>
                             </td>

                         </tr>
                         @endforeach

                     </tbody>


                 </table>
                 {{$routes->links()}}

             </div>

         </div>
     </div>
 </div>
</div>
</div>    
{{-- for viwe --}}
 <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body append-stoppage">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
            </div>
        </div>
    </div>


@endsection
