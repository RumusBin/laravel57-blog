@extends('admin.layouts.admin')
@section('title', 'Create new news')
@section('content')
    <div class="row">
        <!-- central column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box {{$errors->any() ? 'box-danger' : 'box-info'}}">
                <div class="box-header with-border">
                    <h3 class="box-title">Создать новую новость</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                                <label for="title">Название новости</label>
                                <input type="text"
                                       id="title"
                                       class="form-control"
                                       placeholder="Название новости"
                                       name="title"
                                       value="{{old('title')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Категория новости</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="label">Контент</label>
                            <div class="control has-icons-left">
                                <textarea class="form-control" name="content">{{old('content')}}</textarea>
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
                   <div class="col-md-6">
                       <div class="box-body">
                           <div class="form-group">
                               <label for="date">Дата новости</label>
                               <div class="control">
                                   <input class="form-control"
                                          id="date"
                                          type="date"
                                          name="date"
                                          value="{{old('date')}}">
                               </div>
                           </div>
                       </div>
                   </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button href="{{route('posts.index')}}" class="btn btn-default">Назад</button>
                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                    </div>
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