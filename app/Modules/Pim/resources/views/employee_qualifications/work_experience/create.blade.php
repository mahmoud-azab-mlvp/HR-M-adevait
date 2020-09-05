@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="custom-panel">
            <div class="custom-panel-heading">{{trans('app.pim.employees.qualifications.work_experience.add_new')}}</div>
            {!! Form::open(['route' => ['pim.employees.qualifications.work_experience.store', Route::input('employeeId')], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                @include('pim::employee_qualifications.work_experience._form', ['submitName' => trans('app.submit')])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection