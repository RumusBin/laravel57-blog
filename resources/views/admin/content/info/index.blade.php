@extends('admin.layouts.admin')
@section('title', 'Main info')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Главная информация на сайте</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <dl>
                            @if($info)
                                <dt>Номер телефона</dt>
                                <dd>{{$info->phone_number}}</dd>
                                <dt>Email</dt>
                                <dd>{{$info->email}}</dd>
                                <dt>Адресс</dt>
                                <dd>{{$info->address}}</dd>
                                <dt>Copyright</dt>
                                <dd>{{$info->copyright}}</dd>
                                <br>
                                <a class="btn btn-info" href="{{route('info.edit', $info->id)}}">Обновить</a>
                            @else
                                <div class="box">
                                    <div class="box-header">
                                        <h3>Информация не заполненна</h3>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="box-body col-md-4">
                                        <a href="{{route('info.create')}}"
                                           class="btn btn-block btn-success btn-lg">
                                            Заполнить
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </dl>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
