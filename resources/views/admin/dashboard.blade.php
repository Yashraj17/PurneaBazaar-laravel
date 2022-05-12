@extends('admin.base')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-primary text-white">
                                <h2 class="display-3">55</h2>
                                <h5>Total Product </h5>
                                <a href="{{route('product.index')}}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-warning text-white">
                                <h2 class="display-3">55</h2>
                                <h5>Total Order </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-success text-white">
                                <h2 class="display-3">55</h2>
                                <h5>Total User</h5>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="row mt-3">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-secondary text-white">
                                <h2 class="display-3">55</h2>
                                <h5>Total Payments </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-danger text-white">
                                <h2 class="display-3">55</h2>
                                <h5>Total Brand </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body bg-info text-white">
                                <h2 class="display-3">55</h2>
                                <h5>Total Category </h5>
                                <a href="{{route('category.index')}}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection