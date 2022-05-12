@extends('public.master')
@section('content')
<div class="container-fluid bg-warning shadow sticky-top mb-3 text-white p-3">
    <div class="container">
        {{-- <div class="display-6">Your Card</div> --}}
        <h4 class="h2 fw-lighter">Checkout</h4>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
            <h4>Fill Address Details</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                    @error('name')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                                    @error('contact')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="">Alternative Contact</label>
                                    <input type="text" name="alt_contact" value="{{old('alt_contact')}}" class="form-control">
                                    @error('alt_contact')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">Street/Village </label>
                                    <input type="text" name="street" value="{{old('street')}}" class="form-control">
                                    @error('street')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">LankMark </label>
                                    <input type="text" name="landmark" value="{{old('landmark')}}" class="form-control">
                                    @error('landmark')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">City </label>
                                    <input type="text" name="city" value="{{old('city')}}" class="form-control">
                                    @error('city')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">State </label>
                                    <input type="text" name="state" value="{{old('state')}}" class="form-control">
                                    @error('state')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">Pincode </label>
                                    <input type="text" name="pincode" value="{{old('pincode')}}" class="form-control">
                                    @error('pincode')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="submit" value="Checkout" class="btn btn-primary mt-4 w-100">
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-3">
               <h4>Select Saved Address</h4>
               <div class="card mt-3">
                   <div class="card-body">
                       <h5>Sadique Hussain  (89768545)</h5>
                       <p class="small">Rajendta nagar, Near -landmark, <br>Purnea City (bihar) -7867</p>
                       <a href="" class="btn btn-primary"> use the Address</a>
                   </div>
               </div>
               <div class="card mt-3">
                   <div class="card-body">
                       <h5>Sadique Hussain  (89768545)</h5>
                       <p class="small">Rajendta nagar, Near -landmark, <br>Purnea City (bihar) -7867</p>
                       <a href="" class="btn btn-primary"> use the Address</a>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection