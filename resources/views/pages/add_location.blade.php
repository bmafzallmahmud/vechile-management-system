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
                        {!! Form::model($location,['url' => $location ? 'location/'.$location->id.'/update' :
                        'location/location-store','method'=>'post','file'=>true]) !!}

                        <div class="form-group row ">
                            {!! Form::label('location', 'Location :', ['class' => 'col-lg-2 control-label']) !!}
                            <div class="col-lg-10">
                                {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location ']) !!}
                                <div class="error">{{ $errors->first('location') }}</div>
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

