@extends('dashboard.master')
@section('title', 'Departments')
@section('content')

         <div id="page-wrapper">
            <div class="main-page">
               <div class="padding">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Department</div>
                            <div class="panel-body">
                                {!! Form::model($department,['url' => $department ? 'department/'.$department->id.'/update' : 'department/department-store','method'=>'post','file'=>true,'class' => 'form-horizontal']) !!}
                                <div class="form-group">
                                    {!! Form::label('department_name', 'Department Name:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('department_name', null, ['class' => 'form-control', 'placeholder' => 'Department Name']) !!}
                                        <div class="error">{{ $errors->first('department_name') }}</div>
                                    </div>
                                </div>

                                <div class="form-group">
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

