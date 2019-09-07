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
                            <div class="panel-heading">Add Fitness Info.</div>
                            <div class="panel-body">
                        {!! Form::model($fitness,['url' => $fitness ? 'fitness/'.$fitness->id.'/update' :
                        'fitness/fitness-store','method'=>'post','files'=>true ,'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group row ">
                            {!! Form::label('vehicle_number', 'Vehicle Number:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::select('vehicle_number', $vehicle, null, ['class' => 'form-control', 'placeholder' => 'Select Here']) !!}
                                <div class="error">{{ $errors->first('vehicle_number') }}</div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            {!! Form::label('last_fitness_check', 'last Fitness Check:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::date('last_fitness_check',  null, ['class' => 'form-control', 'placeholder' => 'last Fitness Check']) !!}
                                <div class="error">{{ $errors->first('last_fitness_check') }}</div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            {!! Form::label('next_fitness_check', 'Next Fitness Check:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::date('next_fitness_check',  null, ['class' => 'form-control', 'placeholder' => 'Next Fitness Check']) !!}
                                <div class="error">{{ $errors->first('next_fitness_check') }}</div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            {!! Form::label('fitness_description', 'Fitness Description:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::textarea('fitness_description',  null, ['class' => 'form-control', 'placeholder' => 'Fitness Description']) !!}
                                <div class="error">{{ $errors->first('fitness_description') }}</div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            {!! Form::label('fitness_certificate', 'Fitness Certificate:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::file('fitness_certificate', null, ['class' => 'form-control', 'files'=>true ]) !!}
                                <div class="error">{{ $errors->first('fitness_certificate') }}</div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            {!! Form::label('status', 'Status:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::select('status', [ 'Active',  'In Active'], null, ['class' => 'form-control', 'placeholder' => 'Select Here']) !!}
                                <div class="error">{{ $errors->first('status') }}</div>
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

