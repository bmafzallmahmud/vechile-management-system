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
                            <div class="panel-heading">Add Route Info.</div>
                            <div class="panel-body">
                        {!! Form::model($route,['url' => $route ? 'route/'.$route->id.'/update' : 'route/route-store',
                        'method'=>'post','file'=>true]) !!}

                        <div class="form-group row ">
                            {!! Form::label('route_name', 'Route Name:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('route_name', null, ['class' => 'form-control', 'placeholder' => 'Route Name']) !!}
                                <div class="error">{{ $errors->first('route_name') }}</div>
                            </div>
                        </div>


                        <div class="form-group row ">
                            {!! Form::label('start_location', 'Start Location:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::select('start_location',$locations, null, ['class' => 'form-control', 'placeholder' => 'Select Here....']) !!}
                                <div class="error">{{ $errors->first('start_location') }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('end_location', 'End Location:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">

                                {!! Form::select('end_location',$locations,  null, ['class' => 'form-control', 'placeholder' => 'Select Here....']) !!}
                                <div class="error">{{ $errors->first('end_location') }}</div>
                            </div>
                        </div>

                        <div class="form-group ss appendHere row">
                            {{--@foreach($stoppages as $stoppage)--}}
                            {!! Form::label('stoppage', 'Stoppage:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                <div class="col-md-8 ">
                                    {!! Form::select('stoppage[]',$locations, null, ['class' => 'form-control', 'placeholder' => 'Select Here....']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::button('+', ['class' => 'btn btn-sm btn-success add','id'=>'button'] ) !!}
                                    {!! Form::button('-', ['class' => 'btn btn-sm btn-danger  remove','id'=>'button2'] ) !!}
                                </div>
                                <div class="clearfix"></div>
                                <div class="error">{{ $errors->first('stoppage') }}</div>
                            </div>
                            


                            {{--@endforeach--}}
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

