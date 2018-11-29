@extends('layouts.app')
@section('title', 'Create new info')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Создание информации</h1>
            <div>
                <form action="/info" method="post">

                    {{csrf_field()}}

                    <div class="field">
                        <label class="label">Номер телефона</label>
                        <div class="control has-icons-left">
                            <input class="input"
                                   type="text" placeholder="Введите номер телефона в формате 0..."
                                   name="phone_number"
                                   value="{{old('phone_number')}}">
                            <span class="icon is-small is-left">
                              <i class="fas fa-phone"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Адресс компании</label>
                        <div class="control has-icons-left">
                            <input class="input"
                                   type="text" placeholder="Введите адресс компании"
                                   name="address"
                                   value="{{old('address')}}">
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
                                   value="{{old('email')}}">
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
                                   value="{{old('copyright')}}">
                            <span class="icon is-small is-left">
                              <i class="fas fa-copyright"></i>
                            </span>
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
                @if($errors->any())
                <div class="notification is-danger">
                    @foreach($errors as $error)
                    <button class="delete"></button>
                        <strong>Ooops!!</strong> {{$error}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection


