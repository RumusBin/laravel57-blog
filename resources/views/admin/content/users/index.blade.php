@extends('admin.layouts.admin')
@section('title', 'User management')
@section('content')
    <ul>
        @foreach($users as $key => $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
    {!! $users->render() !!}
@endsection