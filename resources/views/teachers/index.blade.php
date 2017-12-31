@extends('teachers.app')

@section('title', 'Teacher List')

@section('teachers_contents')
    <input type="button" value="新增老師" onclick="location.href='{{route('teachers.create')}}'"><br/><br/>
    列示所有老師(使用forelse)：<br/>
    @forelse($teachers as $teacher)
        老師編號：{{ $teacher->id }} <br/>
        老師姓名：{{ $teacher->name }} <br/>
        老師Email：{{ $teacher->email }} <br/>
        老師專長：{{ $teacher->professional }} <br/>
        老師網頁：{{ $teacher->url }} <br/>
        雇用日期：{{ date('Y-m-d',strtotime($teacher->employed_at)) }} <br/>
        <input type="button" value="編輯資料" onclick="location.href='{{route('teachers.edit',['id'=>$teacher->id])}}'">
        {!! Form::open(['url' => 'teachers/' . $teacher->id]) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('刪除資料', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        <br/>
        -------------------------------------- <br/>
    @empty
        <br/>
        目前沒有老師<br/>
    @endforelse
    <br/>
    <br/>
@stop