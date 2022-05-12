@extends('admin.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h5>Manage Category</h5>
                    </div>
                    <div class="col-4">
                        <a href="{{route('category.create')}}" class="btn btn-success">Add New Category</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Parent Id</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($category as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <th>{{$item->category}}</th>
                        <th>{{$item->parent_id}}</th>
                        <th>
                            <form action="{{route('category.destroy',[$item])}}" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="X">
                            </form>
                            <a href="" class="btn btn-info">Edit</a>
                        </th>
                    </tr>
                      
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection