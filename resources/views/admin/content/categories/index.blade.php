@extends('admin.layouts.admin')
@section('title', 'Categories')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categories list</h2>
            </div>
            <div class="pull-right">
                {{--                @can('role-create')--}}
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
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
            <th width="280px">Действия</th>
        </tr>
        @foreach ($categories as $key => $category)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    {{--                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>--}}
                    {{--@can('role-edit')--}}
                    <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Обновить</a>
                    {{--@endcan--}}
                    {{--@can('role-delete')--}}
                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Вы действительно хотите удалить {{$category->title}} категорию?')"
                        >Удалить</button>
                    </form>
                    {{--@endcan--}}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $categories->render() !!}


@endsection