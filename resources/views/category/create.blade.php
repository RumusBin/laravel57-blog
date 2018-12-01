@extends('layouts.app')
@section('title', 'Создание категории')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Создание категории блога</h1>
            <div>
                <form action="{{route('categories.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="field">
                        <label class="label">Название</label>
                        <div class="control has-icons-left">
                            <input class="input"
                                   type="text" placeholder="Название категории"
                                   name="title"
                                   value="{{old('title')}}">
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
                        @foreach($errors as $error)
                            <button class="delete"></button>
                            <strong>Ooops!!</strong> {{$error}}
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection