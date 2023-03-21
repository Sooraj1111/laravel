@extends('layouts.form')
@section('form-content')
<div class="col-md-6 col-lg-6 col-sm-12 p-0">
    <div class="content-sec2">
        <form action="{{ route('login')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                    id="email" value="{{ old('email')}}">
                <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
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
