@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="custom-panel">
            <div class="custom-panel-heading">{{trans('app.time.clients.add_new')}}</div>
            {!! Form::open(['route' => 'time.clients.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                @include('time::clients._form', ['submitName' => trans('app.submit')])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection