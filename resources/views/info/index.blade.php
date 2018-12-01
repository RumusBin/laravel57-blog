@extends('layouts.app')
@section('title', 'Main info')
@section('content')

    <section class="section">
        <div class="container">
            <h1 class="title">Главная информация сайта</h1>
            @if(!$info)
            <a href="{{route('info.create')}}" class="button is-primary">Заполнить</a>
            @endif
            @if($info)
            <table class="table">
                <thead>
                <tr>
                    <th><abbr title="Номер телефона">Телефон</abbr></th>
                    <th><abbr title="Email">Email</abbr></th>
                    <th><abbr title="Адресс">Адресс</abbr></th>
                    <th><abbr title="copyright">Copyright</abbr></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th><abbr title="Номер телефона">Телефон</abbr></th>
                    <th><abbr title="Email">Email</abbr></th>
                    <th><abbr title="Адресс">Адресс</abbr></th>
                    <th><abbr title="copyright">Copyright</abbr></th>
                </tr>
                </tfoot>
                <tbody>
                <tr>

                    <th>{{$info->phone_number}}</th>
                    <td>{{$info->email}}</td>
                    <td>{{$info->address}}</td>
                    <td>{{$info->copyright}}</td>

                </tr>
                </tbody>
            </table>

            <a class="button is-info" href="{{route('info.edit', $info->id)}}">Обновить</a>
                @else()
                <div>Нет информации!</div>
            @endif
        </div>
    </section>

@endsection
