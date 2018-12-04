@extends('layouts.app')
@section('title', 'Создание новой новости')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Создание новости</h1>
            <div>
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label">Название</label>
                                <div class="control has-icons-left">
                                    <input class="input"
                                           type="text" placeholder="Название новости"
                                           name="title"
                                           value="{{old('title')}}">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label">Дата новости</label>
                                <div class="control">
                                    <input class="input"
                                           type="date"
                                           name="date"
                                           value="{{old('date')}}">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="file has-name is-boxed">
                                <label class="file-label">
                                    <input id="file" class="file-input" type="file" name="image">
                                    <span class="file-cta">
                                      <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                      </span>
                                      <span class="file-label">Выберите картинку</span>
                                    </span>
                                    <span id="filename" class="file-name"></span>
                                </label>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label">Категории</label>
                                <div class="control">
                                    <div class="select">
                                        <select name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                @include('partials._errors')
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let file = document.getElementById("file");
        file.onchange = function(){
            if(file.files.length > 0)
            {
                document.getElementById('filename').innerHTML = file.files[0].name;
            }
        };
    </script>
@endsection