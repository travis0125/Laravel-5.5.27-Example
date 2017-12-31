@extends('teachers.app')

@section('title', 'Edit a teacher')

@section('teachers_contents')
    {!! Form::open(['url' => 'teachers/' . $id]) !!}
    {!! Form::hidden('_method', 'PUT') !!}
    <div>
        {!! Form::label('name', "老師姓名：") !!}
        {!! Form::text('name', $teacher->name, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('email', "老師Email：") !!}
        {!! Form::text('email', $teacher->email, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('professional', "老師專長：") !!}
        {!! Form::text('professional', $teacher->professional, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('url', "老師網站：") !!}
        {!! Form::text('url', $teacher->url, ['class' => 'form-control']) !!} <br/>
    </div>

    <div>
        {!! Form::label('employed_at', "雇用日期：") !!}
        {!! Form::input('date', 'employed_at', date('Y-m-d',strtotime($teacher->employed_at)), ['class' => 'form-control']) !!}
    </div>

    <div>
        <br/>
        {!! Form::submit('送出', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    <br/>
    <br/>
@stop