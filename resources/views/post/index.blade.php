@extends('layouts.app')
@section('title', 'News')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Новости</h1>
            <a href="{{route('posts.create')}}" class="button is-primary">Создать</a>
            <table class="table">
                <thead>
                <tr>
                    <th><abbr title="Название категории">Название новости</abbr></th>
                    <th><abbr title="Дата новости">Дата новости</abbr></th>
                    <th><abbr title="Категория">Категория</abbr></th>
                    <th>
                        <abbr title="Действия">Действия</abbr>
                    </th>
                </tr>
                </thead>
                <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th>{{$post->date}}</th>
                            <th>@if($post->category){{$post->category->title}}@endif</th>
                            <th>
                                <a class="button is-info" href="{{route('posts.edit', $post->id)}}">
                                    Обновить
                                </a>
                            </th>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection