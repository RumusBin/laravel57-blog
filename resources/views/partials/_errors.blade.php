@if($errors->any())
    <br>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close"></button>
        <h4><i class="icon fa fa-ban"></i>Внимание</h4>
        @foreach($errors->all() as $error)
            <p>
                {{$error}}
            </p>
        @endforeach
    </div>
@endif