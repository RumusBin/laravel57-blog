<br>
@if($errors->any())
    <br>
    <div class="notification is-danger">
        @foreach($errors->all() as $error)
            <button class="delete"></button>
            <strong>Oops!!</strong> {{$error}}
        @endforeach
    </div>
@endif