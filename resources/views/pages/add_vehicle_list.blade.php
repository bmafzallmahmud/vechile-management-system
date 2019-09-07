@extends('dashboard.master')
@section('title', 'Add Vehicle')
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
                            {!! Form::model($vehicle,['url' => $vehicle ? 'vehicle/'.$vehicle->id.'/update' : 'vehicle/vehicle-store',
                            'method'=>'post','file'=>true]) !!}


                            <div class="form-group row ">
                                {!! Form::label('model_no', 'Model No:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('model_no', null, ['class' => 'form-control', 'placeholder' => 'Model No']) !!}
                                    <div class="error">{{ $errors->first('model_no') }}</div>
                                </div>
                            </div>

                            <div class="form-group row ">
                                {!! Form::label('registration_no', 'Register Number:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('registration_no', null, ['class' => 'form-control', 'placeholder' => 'Register Number']) !!}
                                    <div class="error">{{ $errors->first('registration_no') }}</div>
                                </div>
                            </div>

                            <div class="form-group row ">
                                {!! Form::label('chassis_no', 'Chassis No:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('chassis_no', null, ['class' => 'form-control', 'placeholder' => 'Chassis No']) !!}
                                    <div class="error">{{ $errors->first('chassis_no') }}</div>
                                </div>
                            </div>

                            <div class="form-group row ">
                                {!! Form::label('engine_no', 'Engine No:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('engine_no', null, ['class' => 'form-control', 'placeholder' => 'Engine No']) !!}
                                    <div class="error">{{ $errors->first('engine_no') }}</div>
                                </div>
                            </div>

                            <div class="form-group row ">
                                {!! Form::label('vehicle_type', 'Vehicle Type:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::select('vehicle_type',$vehicles, null, ['class' => 'form-control', 'placeholder' => 'Select Here....']) !!}
                                    <div class="error">{{ $errors->first('vehicle_type') }}</div>
                                </div>
                            </div>

                            <div class="form-group row ">
                                {!! Form::label('number_of_seat', 'Number Of Seat:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('number_of_seat', null, ['class' => 'form-control', 'placeholder' => 'Number Of Seat']) !!}
                                    <div class="error">{{ $errors->first('number_of_seat') }}</div>
                                </div>
                            </div>
                            
                            <div class="form-group row ">
                                {!! Form::label('owner', 'Owner:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('owner', null, ['class' => 'form-control', 'placeholder' => 'Owner']) !!}
                                    <div class="error">{{ $errors->first('owner') }}</div>
                                </div>
                            </div>


                            <div class="form-group row">
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
</div>


@endsection

