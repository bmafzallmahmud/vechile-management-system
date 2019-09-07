@extends('dashboard.master')
@section('title', 'Add Role')
@section('content')

       <div id="page-wrapper">
            <div class="main-page">
                
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add Role Info.</div>
                            <div class="panel-body">
                        {!! Form::model($role,['url' => $role ? 'role/'.$role->id.'/update' : 'role/role-store','method'=>'post','file'=>true]) !!}
                        <div class="form-group row ">
                            {!! Form::label('role_name', 'Role Name:', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('role_name', '', ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                                <div class="error">{{ $errors->first('role_name') }}</div>
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
       
    
@endsection

