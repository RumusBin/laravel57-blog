@extends('layouts.app')
@section('title', 'Update info')
@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">Обновление информации</h1>
        <div>
            <form action="{{route('info.update', $info->id)}}" method="post">

                @csrf
                @method('PATCH')

                <div class="field">
                    <label class="label">Номер телефона</label>
                    <div class="control has-icons-left">
                        <input class="input"
                               type="text"
                               name="phone_number"
                               value="{{$info->phone_number}}">
                        <span class="icon is-small is-left">
                              <i class="fas fa-phone"></i>
                            </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Адресс компании</label>
                    <div class="control has-icons-left">
                        <input class="input"
                               type="text"  name="address"
                               value="{{$info->address}}">
                        <span class="icon is-small is-left">
                              <i class="fas fa-home"></i>
                            </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left">
                        <input class="input" type="email"
                               placeholder="Email"
                               name="email"
                               value="{{$info->email}}">
                        <span class="icon is-small is-left">
                              <i class="fas fa-envelope"></i>
                            </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Copyright</label>
                    <div class="control has-icons-left">
                        <input class="input"
                               type="text" placeholder="Введите copyright"
                               name="copyright"
                               value="{{$info->copyright}}">
                        <span class="icon is-small is-left">
                              <i class="fas fa-copyright"></i>
                            </span>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Обновить</button>
                    </div>
                    <div class="control">
                        <button  class="button is-text" href="{{route('info.index')}}">Назад</button>
                    </div>
                </div>
            </form>
            @if($errors->any())
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