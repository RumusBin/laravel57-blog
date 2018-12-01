@extends('layouts.app')
@section('title', 'BlogCategories')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Категории блога</h1>
                <a href="{{route('categories.create')}}" class="button is-primary">Создать</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th><abbr title="Название категории">Название категории</abbr></th>
                        <th>
                            <abbr title="Действия">Действия</abbr>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($categories)
                    @foreach($categories as $category)
                        <tr>
                            <th>{{$category->title}}</th>
                            <th>
                                <a class="button is-info" href="{{route('categories.edit', $category->id)}}">
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