@extends('admin.layouts.admin')
@section('title', 'Create role')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Создать новую роль</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}">Назад</a>
            </div>
        </div>
    </div>

    <form action="{{route('roles.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                    <label for="role_name">Название роли</label>
                    <input type="text"
                           id="role_name"
                           class="form-control"
                           placeholder="Введите название"
                           name="name"
                           value="{{old('name')}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br/>
                  <span class="input-group-addon">
                       @foreach($permission as $value)
                          <input id="role_permission_{{$value->id}}"
                                 type="checkbox"
                                 name="permission[]" value="{{$value->id}}">
                          <label for="role_permission_{{$value->id}}">{{ $value->name }}</label>
                          <br/>
                      @endforeach
                  </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>

@endsection