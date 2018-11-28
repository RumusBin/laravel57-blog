@extends('layout')

@section('title', 'Create new content')

@section('content')
 <main role="main">
    <section class="jumbotron text-center">
         <div class="container">
            <form method="post" action="/main-content">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           name="email" placeholder="Enter email" value="{{old('email')}}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="phone_number">Телефон</label>
                    <input type="tel" class="form-control" id="phone_number"
                           name="phone_number" placeholder="Телефон" value="{{old('phone_number')}}">
                </div>
                <div class="form-group">
                    <label for="address">Адресс</label>
                    <input type="text" class="form-control" id="address"
                           name="address" placeholder="Адресс" value="{{old('address')}}">
                </div>
                <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input type="text" class="form-control" id="copyright"
                           name="copyright" placeholder="Футер копирайт" value="{{old('copyright')}}">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Создать</button>
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                    <strong>Oh snap!</strong> {{$error}}
                    @endforeach
                </div>
                @endif
            </form>
         </div>
    </section>
 </main>
@endsection



