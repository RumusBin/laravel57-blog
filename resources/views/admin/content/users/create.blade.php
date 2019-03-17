@extends('admin.layouts.admin')
@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-4"></div>
        <!-- central column -->
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box {{$errors->any() ? 'box-danger' : 'box-info'}}">
                <div class="box-header with-border">
                    <h3 class="box-title">Новый пользователь</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('users.store')}}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            <label for="user_name">Имя</label>
                            <input type="text"
                                   id="user_name"
                                   class="form-control"
                                   placeholder="Имя пользователя"
                                   name="name"
                                   value="{{old('name')}}">
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="user_email">Email</label>
                            <input type="email"
                                   id="user_email"
                                   class="form-control"
                                   placeholder="Enter адресс"
                                   name="email"
                                   value="{{old('email')}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                            <label for="password">Пароль</label>
                            <input type="password"
                                   id="password"
                                   class="form-control"
                                   name="password"
                                   value="{{old('password')}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('confirm-password') ? 'has-error' : ''}}">
                            <label for="confirm_password">Подтвердите пароль</label>
                            <input type="password"
                                   id="confirm_password"
                                   class="form-control"
                                   placeholder="Подтвердите пароль"
                                   name="confirm-password"
                                   value="{{old('confirm-password')}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('confirm-password') ? 'has-error' : ''}}">
                            <label for="confirm_password">Подтвердите пароль</label>
                            <input type="password"
                                   id="confirm_password"
                                   class="form-control"
                                   placeholder="Подтвердите пароль"
                                   name="confirm-password"
                                   value="{{old('confirm-password')}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="roles">Роли</label>
                            <select multiple class="form-control" id="roles" name="roles[]">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button href="{{route('users.index')}}" class="btn btn-default">Назад</button>
                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                    </div>
                </form>
                @include('partials._errors')
            </div>
        </div>
    </div>

@endsection