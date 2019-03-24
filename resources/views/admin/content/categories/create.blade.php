@extends('admin.layouts.admin')
@section('title', 'Create new category')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-4"></div>
        <!-- central column -->
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box {{$errors->any() ? 'box-danger' : 'box-info'}}">
                <div class="box-header with-border">
                    <h3 class="box-title">Создать новую категорию</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('categories.store')}}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                            <label for="title">Название категории</label>
                            <input type="text"
                                   id="title"
                                   class="form-control"
                                   placeholder="Название категории"
                                   name="title"
                                   value="{{old('title')}}">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button href="{{route('categories.index')}}" class="btn btn-default">Назад</button>
                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                    </div>
                </form>
                @include('partials._errors')
            </div>
        </div>
    </div>
@endsection