@extends('layouts.form')
@section('form-content')
<div class="col-md-6 col-lg-6 col-sm-12 p-0">
    <div class="content-sec2">
        <form action="{{ route('register')}}" method="post">
            @csrf
            <h1 class="login-head1">We’re launching soon. </h1>
            <h2 class="login-head1 login-head2">Join our waitlist.</h2>

            <div class="form-group">
                <label for="email">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" id="name" value="{{old('name')}}">
                <span class="text-danger"> @error('name') {{ $message }} @enderror </span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                    id="email" value="{{ old('email')}}">
                <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
            </div>

            <div class="form-group">
                <label for="phone">Phone number</label>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6">
                        <div class="flag-sec top-drop2">
                            <div class="dropdown top-drop2">
                                <button type="button" class=" dropdown-toggle flag-btn ml-3"
                                    data-toggle="dropdown"> <img src="{{ asset('assets/images/ic_UAE-flag.png')}}"
                                        class="px-2 img-fluid">+91</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">India</a>
                                    <a class="dropdown-item" href="#">USA</a>
                                    <a class="dropdown-item" href="#">Dubai</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-8 col-sm-8 col-6 pl-0">
                        <input type="number" class="form-control" name="phone" placeholder="Enter your number" id="email" value="{{old('phone')}}">
                <span class="text-danger"> @error('phone') {{ $message }} @enderror </span>
            </div>
                </div>
            </div>

            <div class="form-group">
                <label for="username">Instagram username</label>
                <input type="text" class="form-control w-100" name="insta_username" placeholder="Enter your username" id="name" value="{{ old('insta_username')}}">
                <span class="text-danger"> @error('insta_username') {{ $message }} @enderror </span>
            </div>

            <div class="form-group ">
                <label for="email">Interested in</label>
                <select name="interest" class="custom-select form-control">
                    {{-- <option selected>Choose</option> --}}
                    <option value="Selling">Selling</option>
                    <option value="Buy">Buy</option>
                    {{-- <option value="audi">Selling</option> --}}
                </select>
                <span class="text-danger"> @error('interest') {{ $message }} @enderror </span>
            </div>

            <div class="form-group control-option">
                <label for="message">Your message <span class="optional">(optional)</span></label>
                <textarea class="form-control control-option" name="message" rows="5" id="comment"
                    placeholder="Let us know if you have any messages for us…">{{old('message')}}</textarea>
                <span class="text-danger"> @error('message') {{ $message }} @enderror </span>
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control w-100" name="password" placeholder="Enter your paasword" >
                <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
            </div>

            <button type="submit" class="submit-btn2">Submit </button>

        </form>
    </div>
</div>
@endsection
