@extends('admin.layouts.admin')
@section('title', 'Posts list')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts list</h2>
            </div>
            <div class="pull-right">
                {{--                @can('role-create')--}}
                <a class="btn btn-success" href="{{ route('posts.create') }}">Create New Post</a>
                {{--@endcan--}}
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Название</th>
            <th>Автор</th>
            <th width="280px">Действия</th>
        </tr>
        @foreach ($posts as $key => $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
                <td>
                    {{--                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>--}}
                    {{--@can('role-edit')--}}
                    <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Обновить</a>
                    {{--@endcan--}}
                    {{--@can('role-delete')--}}
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Вы действительно хотите удалить {{$post->title}} новость?')"
                        >Удалить</button>
                    </form>
                    {{--@endcan--}}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $posts->render() !!}


@endsection