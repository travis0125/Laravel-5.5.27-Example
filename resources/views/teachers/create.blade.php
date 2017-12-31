@extends('teachers.app')

@section('title', 'Create a new teacher')

@section('teachers_contents')
    {!! Form::open(['url' => 'teachers/store']) !!}
    <div>
        {!! Form::label('name', "老師姓名：") !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('email', "老師Email：") !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('professional', "老師專長：") !!}
        {!! Form::text('professional', null, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('url', "老師網站：") !!}
        {!! Form::text('url', null, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('employed_at', "雇用日期：") !!}
        {!! Form::input('date', 'employed_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <div>
        <br/>
        {!! Form::submit('送出', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!!  Form::close() !!}
    <br/>
    <br/>
@stop