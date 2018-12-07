@extends('admin.layouts.admin')
@section('title', 'Create new info')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-4"></div>
        <!-- central column -->
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box {{$errors->any() ? 'box-danger' : 'box-info'}}">
                <div class="box-header with-border">
                    <h3 class="box-title">Информация на сайте</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('info.store')}}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group {{$errors->has('phone_number') ? 'has-error' : ''}}">
                            <label for="phone_number">Номер телефона</label>
                            <input type="text"
                                   id="phone_number"
                                   class="form-control"
                                   placeholder="Номер телефона"
                                   name="phone_number"
                                   value="{{old('phone_number')}}">
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email">Email</label>
                            <input type="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="Enter адресс"
                                   name="email"
                                   value="{{old('email')}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                            <label for="address">Адресс компании</label>
                            <input type="text"
                                   id="address"
                                   class="form-control"
                                   placeholder="Адресс"
                                   name="address"
                                   value="{{old('address')}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('copyright') ? 'has-error' : ''}}">
                            <label for="copyright">Copyright</label>
                            <input type="text"
                                   id="copyright"
                                   class="form-control"
                                   placeholder="Введите копирайт"
                                   name="copyright"
                                   value="{{old('copyright')}}"
                            >
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button href="{{route('info.index')}}" class="btn btn-default">Назад</button>
                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                    </div>
                </form>
                @include('partials._errors')
            </div>
        </div>
    </div>
@endsection


