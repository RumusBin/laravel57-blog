@extends('layouts.app')
@section('title', 'News update')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Обновление новости</h1>
            <div>
                <form action="{{route('posts.update', $post->id)}}" method="post">

                    @csrf
                    @method('PATCH')

                    <div class="field">
                        <label class="label">Название новости</label>
                        <div class="control has-icons-left">
                            <input class="input"
                                   type="text"
                                   name="title"
                                   value="{{$post->title}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Дата новости</label>
                        <div class="control">
                            <input class="input"
                                   type="date"
                                   name="date"
                                   value="{{$post->date}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Контент</label>
                        <div class="control has-icons-left">
                            <textarea class="textarea" name="content"> {{$post->content}}</textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Обновить</button>
                        </div>
                        <div class="control">
                            <button href="{{route('posts.index')}}"  class="button is-text">Назад</button>
                        </div>
                    </div>
                </form>
                <br>
                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="button is-danger"
                            onclick="return confirm('Вы действительно хотите удалить эту новость?');">
                        Удалить
                    </button>
                </form>
                @if($errors->any())
                    <br>
                    <div class="notification is-danger">
                        @foreach($errors->all() as $error)
                            <button class="delete"></button>
                            <strong>Oops!! </strong>{{$error}}
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection