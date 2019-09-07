@extends('dashboard.master')
@section('title', 'Add Employee')
@section('content')
    
         <div id="page-wrapper">
            <div class="main-page">
               
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add Employee Info.</div>
                            <div class="panel-body">

                        {!! Form::model($employee,['url' => $employee ? 'employee/'.$employee->id.'/update' : 'employee/employee-store','method'=>'post','file'=>true,'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                        <div class="form-group text-right">

                            {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                                <div class="error">{{ $errors->first('name') }}</div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            {!! Form::label('code', 'Code:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Code']) !!}
                                <div class="error">{{ $errors->first('code') }}</div>
                            </div>
                        </div>


                        <div class="form-group text-right">
                            {!! Form::label('department', 'Department:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {{ Form::select('department', $departments, '', ['class' => 'form-control','placeholder' => 'select']) }}
                                <div class="error">{{ $errors->first('department') }}</div>
                            </div>
                        </div>


                        <div class="form-group text-right">
                                {!! Form::label('join_date', 'Join Date:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::date('join_date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
                                    <div class="error">{{ $errors->first('join_date') }}</div>
                                </div>
                        </div>
                        <div class="form-group text-right">

                            {!! Form::label('address', 'Address:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                                <div class="error">{{ $errors->first('address') }}</div>
                            </div>
                        </div>
                        <div class="form-group text-right">

                                {!! Form::label('manager', 'Manager:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('manager', null, ['class' => 'form-control', 'placeholder' => 'Manager']) !!}
                                    <div class="error">{{ $errors->first('manager') }}</div>
                                </div>
                        </div>
                        <div class="form-group text-right">

                            {!! Form::label('image', 'Image:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {{ Form::file('image', array('class'=>'form-control', 'files' => true)) }}
                                <div class="error">{{ $errors->first('image') }}</div>
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
       
        
        
    
  
@endsection

