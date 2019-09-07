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

                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h2>Allocated Seats
                            </h2>
                        </div>
                        <div class="box-divider m-a-0">
                        </div>
                        <table class="table">
                <thead>
                <tr>
                    <th>Vehicle Reg. No.</th>
                    <th>Seats</th>
                    <th>Employee</th>
                </tr>
                </thead>
                            <tbody>
                @foreach($master as $key => $child)
                    <tr>

                        <td>{{$child->registration_no}}</td>

                        <td>{{$child->seat_number}}</td>

                        <td>{{$child->name}}</td>

                    </tr>
                            </tbody>
                @endforeach
            </table>
        </div>
    </div>
            </div>
        </div>         
    </div>
</div>
        
        
    
@endsection