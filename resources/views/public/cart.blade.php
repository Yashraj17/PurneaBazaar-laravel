@extends('public.master')
@section('content')
<div class="container-fluid bg-warning shadow sticky-top mb-3 text-white p-3">
    <div class="container">
        {{-- <div class="display-6">Your Card</div> --}}
        <h4 class="h2 fw-lighter">Your Cart</h4>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
                <h4>My cart</h4>
                <div class="row">
                    <div class="col-12 mt-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-3">
                                    <img src="https:via.placeholder.com/200.jpg" class="w-100" alt="" srcset="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>This is Product title</h5>
                                    <p>Mobile</p>
                                    <h6>Rs. 500-/ <del>1000 -/</del></h6>
                                    <a href="" class="btn btn-danger"> - </a>
                                    <span class="lead fw-bolder">0</span>
                                    <a href="" class="btn btn-success"> + </a>
                                    <a href="" class="btn btn-dark float-end"> Delete </a>
                            </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-4 mt-3">
                <h4>Bill Details</h4>
                <div class="list-group">
                    <div class="list-group-item list-group-action">Total Amount <span class="float-end">Rs 500 -/</span></div>
                    <div class="list-group-item list-group-action bg-success">Total Discount <span class="float-end">Rs 500 -/</span></div>
                    <div class="list-group-item list-group-action">Tax <span class="float-end">Rs 500 -/</span></div>
                    <div class="list-group-item list-group-action">Coupon Discount <span class="float-end">Rs 500 -/</span></div>
                    <div class="list-group-item list-group-action"> <h5>Payable Amount <span class="float-end">Rs 500 -/</span></h5></div>
                </div>
                <div class="row px-2 mt-3">
                    <a href="" class="btn btn-success col">Continue Shoppong</a>
                    <a href="{{route('checkout')}}" class="btn btn-warning col ms-2">Checkout</a>
                </div>
            </div>
        </div>
    </div>
@endsection