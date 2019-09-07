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
                            <div class="panel-heading">Add Driver Info.</div>
                            <div class="panel-body">
                        {!! Form::model($private_vehicle,['url' => $private_vehicle ? 'private_vehicle/'.$private_vehicle->id.'/update' : 'private_vehicle/car-vehicle-store','method'=>'post','file'=>true,'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group text-right">
                            {!! Form::label('employee_id', 'Employee:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::select('employee_id',$employee, null, ['class' => 'form-control', 'placeholder' => 'Employee']) !!}
                                <div class="error">{{ $errors->first('employee_id') }}</div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            {!! Form::label('vehicle_id', 'Vehicle:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::select('vehicle_id', $vehicle, null, ['class' => 'form-control', 'placeholder' => 'Vehicle']) !!}
                                <div class="error">{{ $errors->first('vehicle_id') }}</div>
                            </div>
                        </div>

                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    </div>
           
    </div>
</div>
        
@endsection