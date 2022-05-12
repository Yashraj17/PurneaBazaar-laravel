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
                        <div class="btn btn-success">Add New Orders</div>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>User</th>
                        <th>Coupon</th>
                        <th>Address</th>
                        <th>isDelivered</th>
                        <th>isShipped</th>
                        <th>isDelivered</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection