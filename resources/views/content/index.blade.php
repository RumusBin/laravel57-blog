@extends('layout')

@section('title', 'Main Content')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            @foreach($content as $part)
                <div>
                    <span>Телефон: {{$part->phone_number}}</span>
                </div>
                <div>
                    <span>Email: {{$part->email}}</span>
                </div>
                <div>
                    <span>Адресс: {{$part->address}}</span>
                </div>
                <div>
                    <span>Copyright: {{$part->copyright}}</span>
                </div>
            @endforeach
        </div>
    </section>
    </main>
@endsection