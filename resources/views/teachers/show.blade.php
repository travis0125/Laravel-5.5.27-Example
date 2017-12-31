@extends('teachers.app')

@section('title', 'Teacher Info')

@section('teachers_contents')
    老師編號：{{ $teacher->id }} <br/>
    老師姓名：{{ $teacher->name }} <br/>
    老師Email：{{ $teacher->email }} <br/>
    老師專長：{{ $teacher->professional }} <br/>
    老師網頁：{{ $teacher->url }} <br/>
    <br/>
    <br/>
@stop