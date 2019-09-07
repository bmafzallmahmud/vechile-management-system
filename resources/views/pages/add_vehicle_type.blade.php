@extends('dashboard.master')
@section('title', 'Add Driver')
@section('content')

         <div id="page-wrapper">
            <div class="main-page">
                <div class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add Driver Info.
                            </div>
                            <div class="panel-body">
                                {!! Form::model($vehicle,['url' => $vehicle ? 'vehicle/'.$vehicle->id.'/update-type-vehicle' : 'vehicle/vehicle-type-store','method'=>'post','file'=>true]) !!}
                                <div class="form-group row">
                                    {!! Form::label('vehicle_type', 'Vehicle Type:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('vehicle_type', null, ['class' => 'form-control', 'placeholder' => 'Vehicle Type']) !!}
                                        <div class="error">{{ $errors->first('vehicle_type') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {!! Form::label('status', 'Status:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Status']) !!}
                                        <div class="error">{{ $errors->first('status') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2 ">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-left'] ) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
           </div>
        </div>
        
       
   
@endsection
