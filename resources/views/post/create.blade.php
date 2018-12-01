@extends('layouts.app')
@section('title', 'Создание новой новости')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Создание новости</h1>
            <div>
                <form action="{{route('posts.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="field">
                        <label class="label">Название</label>
                        <div class="control has-icons-left">
                            <input class="input"
                                   type="text" placeholder="Название новости"
                                   name="title"
                                   value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Дата новости</label>
                        <div class="control">
                            <input class="input"
                                   type="date"
                                   name="date"
                                   value="{{old('date')}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Контент</label>
                        <div class="control has-icons-left">
                            <textarea class="textarea" name="content"> {{old('content')}}</textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Создать</button>
                        </div>
                        <div class="control">
                            <button class="button is-text">Назад</button>
                        </div>
                    </div>
                </form>

                @if($errors->any())
                    <br>
                    <div class="notification is-danger">
                        @foreach($errors->all() as $error)
                            <button class="delete"></button>
                            <strong>Ooops!!</strong> {{$error}}
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection