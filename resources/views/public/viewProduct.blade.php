@extends('public.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-3">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                        <img src="https://via.placeholder.com/300x400.png" class="w-100" style="object-fit: cover;height:220px" alt="" srcset="">
                </div>
                <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>This is product Title</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>Mobile</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><del>600 /-</del></td>
                        </tr>
                        <tr>
                            <th>Offer-Price</th>
                            <td>200/-</td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>Tcs</td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td>55</td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col">
                            <a href="{{route('cart')}}" class="btn btn-sm btn-success">Add to Cart</a>
                            <a href="" class="btn btn-sm btn-warning text-white">Buy Now</a>
                        </div>
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="card p-0">
                            <div class="card-header bg-primary">
                                <H6 class="text-white">Description</H6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos facilis cumque nihil aliquam dicta ullam repudiandae neque quo consequuntur!</p>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection