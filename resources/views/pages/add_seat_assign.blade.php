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
                            <div class="panel-heading">Assign Seat</div>
                            <div class="panel-body">

                        {!! Form::model($seat_assign,['url' => $seat_assign ? 'seat_assign/'.$seat_assign->id.'/update' : 'seat_assign/seat_assign-store','method'=>'post','file'=>true,'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group text-right">
                            {!! Form::label('route', 'Route:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {{ Form::select('route', $vehicle_and_route, "", ['class' => 'form-control','placeholder' => 'select']) }}
                                <div class="error">{{ $errors->first('route') }}</div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            {!! Form::label('vehicle', 'Vehicle:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {{ Form::select('vehicle',[], null, ['class' => 'form-control','placeholder' => '--' ]) }}
                                <div class="error">{{ $errors->first('vehicle') }}</div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            {!! Form::label('seat', 'Seat:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {{ Form::select('seat',[], null, ['class' => 'form-control','placeholder' => '--']) }}
                                <div class="error">{{ $errors->first('seat') }}</div>
                            </div>
                        </div>


                        <div class="form-group text-right">
                            {!! Form::label('employee', 'Employee:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {{ Form::select('employee',$employees, '', ['class' => 'form-control','placeholder' => 'select']) }}
                                <div class="error">{{ $errors->first('employee') }}</div>
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

