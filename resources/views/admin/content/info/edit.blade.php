@extends('admin.layouts.admin')
@section('title', 'Update info')
@section('content')


    <div class="row">
        <!-- left column -->
        <div class="col-md-4"></div>
        <!-- central column -->
        <div class="col-md-4">
            <!-- general form elements -->
            <div class="box {{$errors->any() ? 'box-danger' : 'box-info'}}">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновление информации</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('info.update', $info->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group {{$errors->has('phone_number') ? 'has-error' : ''}}">
                            <label for="phone_number">Номер телефона</label>
                            <input type="text"
                                   id="phone_number"
                                   class="form-control"
                                   name="phone_number"
                                   value="{{$info->phone_number}}">
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email">Email</label>
                            <input type="email"
                                   id="email"
                                   class="form-control"
                                   name="email"
                                   value="{{$info->email}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                            <label for="address">Адресс компании</label>
                            <input type="text"
                                   id="address"
                                   class="form-control"
                                   name="address"
                                   value="{{$info->address}}"
                            >
                        </div>
                        <div class="form-group {{$errors->has('copyright') ? 'has-error' : ''}}">
                            <label for="copyright">Copyright</label>
                            <input type="text"
                                   id="copyright"
                                   class="form-control"
                                   name="copyright"
                                   value="{{$info->copyright}}"
                            >
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button href="{{route('info.index')}}" class="btn btn-default">Назад</button>
                        <button type="submit" class="btn btn-primary pull-right">Обновить</button>
                    </div>
                </form>
                @include('partials._errors')
            </div>
        </div>
    </div>

{{--<section class="section">--}}
    {{--<div class="container">--}}
        {{--<h1 class="title">Обновление информации</h1>--}}
        {{--<div>--}}
            {{--<form action="{{route('info.update', $info->id)}}" method="post">--}}

                {{--@csrf--}}
                {{--@method('PATCH')--}}

                {{--<div class="field">--}}
                    {{--<label class="label">Номер телефона</label>--}}
                    {{--<div class="control has-icons-left">--}}
                        {{--<input class="input"--}}
                               {{--type="text"--}}
                               {{--name="phone_number"--}}
                               {{--value="{{$info->phone_number}}">--}}
                        {{--<span class="icon is-small is-left">--}}
                              {{--<i class="fas fa-phone"></i>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="field">--}}
                    {{--<label class="label">Адресс компании</label>--}}
                    {{--<div class="control has-icons-left">--}}
                        {{--<input class="input"--}}
                               {{--type="text"  name="address"--}}
                               {{--value="{{$info->address}}">--}}
                        {{--<span class="icon is-small is-left">--}}
                              {{--<i class="fas fa-home"></i>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="field">--}}
                    {{--<label class="label">Email</label>--}}
                    {{--<div class="control has-icons-left">--}}
                        {{--<input class="input" type="email"--}}
                               {{--placeholder="Email"--}}
                               {{--name="email"--}}
                               {{--value="{{$info->email}}">--}}
                        {{--<span class="icon is-small is-left">--}}
                              {{--<i class="fas fa-envelope"></i>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="field">--}}
                    {{--<label class="label">Copyright</label>--}}
                    {{--<div class="control has-icons-left">--}}
                        {{--<input class="input"--}}
                               {{--type="text" placeholder="Введите copyright"--}}
                               {{--name="copyright"--}}
                               {{--value="{{$info->copyright}}">--}}
                        {{--<span class="icon is-small is-left">--}}
                              {{--<i class="fas fa-copyright"></i>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="field is-grouped">--}}
                    {{--<div class="control">--}}
                        {{--<button class="button is-link">Обновить</button>--}}
                    {{--</div>--}}
                    {{--<div class="control">--}}
                        {{--<button  class="button is-text" href="{{route('info.index')}}">Назад</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
            {{--@if($errors->any())--}}
                {{--<div class="notification is-danger">--}}
                    {{--@foreach($errors->all() as $error)--}}
                        {{--<button class="delete"></button>--}}
                        {{--<strong>Ooops!! </strong>{{$error}}--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
@endsection