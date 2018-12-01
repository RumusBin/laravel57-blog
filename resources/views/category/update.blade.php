@extends('layouts.app')
@section('title', 'Category update')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Обновление категории блога</h1>
            <div>
                <form action="{{route('categories.update', $category->id)}}" method="post">

                    @csrf
                    @method('PATCH')

                    <div class="field">
                        <label class="label">Название категории</label>
                        <div class="control has-icons-left">
                            <input class="input"
                                   type="text"
                                   name="title"
                                   value="{{$category->title}}">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Обновить</button>
                        </div>
                        <div class="control">
                            <button href="{{route('categories.index')}}"  class="button is-text">Назад</button>
                        </div>
                    </div>
                </form>
                <br>
                <form action="{{route('categories.destroy', $category->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="button is-danger"
                            onclick="return confirm('Вы действительно хотите удалить эту категорию?');">
                        Удалить
                    </button>
                </form>
                @if($errors->any())
                    <br>
                    <div class="notification is-danger">
                        @foreach($errors->all() as $error)
                            <button class="delete"></button>
                            <strong>Ooops!! </strong>{{$error}}
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection