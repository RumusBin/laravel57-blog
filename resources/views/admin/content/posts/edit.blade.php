@extends('admin.layouts.admin')
@section('title', 'Update {{$post->name}} post')
@section('content')
    <div class="row">
        <!-- central column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box {{$errors->any() ? 'box-danger' : 'box-info'}}">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновить {{$post->id}} новость</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                                <label for="title">Название новости</label>
                                <input type="text"
                                       id="title"
                                       class="form-control"
                                       placeholder="Название новости"
                                       name="title"
                                       value="{{$post->title}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Категория новости</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if($post->category && $post->category->id == $category->id)
                                                selected
                                                @endif>{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="p_content" class="label">Контент</label>
                            <div class="control has-icons-left">
                                <textarea id="p_content" class="form-control" name="content">{{$post->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="file has-name is-boxed">
                                <label>Изображение новости</label>
                                <input id="file" class="form-control" type="file" name="postImage">
                                {{--<span id="filename" class="file-name"></span>--}}
                            </div>
                        </div>
                    </div>
                    <div class="image img-responsive">
                        <img src="{{asset('/images/'.$post->postImage)}}">
                    </div>
                    <input type="hidden" name="old_image" value="{{$post->image}}">
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="date">Дата новости</label>
                                <div class="control">
                                    <input class="form-control"
                                           id="date"
                                           type="date"
                                           name="date"
                                           value="{{$post->date}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                    </div>
                </form>
                <a href="{{route('posts.index')}}" class="btn btn-default">Назад</a>
                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"
                            onclick="return confirm('Вы действительно хотите удалить эту новость?');">
                        Удалить
                    </button>
                </form>
                @include('partials._errors')
            </div>
        </div>
    </div>
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