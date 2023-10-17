@extends("layouts.login")
@section('content')
    <main>
            <div class="ms-auto me-auto mt-5" style="width:500px">
                <div class="mt-5">
                    @if($errors->any())
                        <div class="col-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>

                            @endforeach
                        </div>

                    @endif

                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif

                    @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                             <div class="card mt-2 p-2 bg-light">
                                <p>We will send a Link to your email,use that link to reset password.</p>
                                <form action="{{route('reset.password.post')}}" method="POST">
                                    @csrf

                                    <input type="text" name="token" hidden value="{{$token}}">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                                        <input type="email" class="form-control"  name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><b>new password</b></label>
                                        <input type="password" class="form-control"  name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label"><b>Confirm password</b></label>
                                        <input type="password" class="form-control"  name="password_confirmation">
                                    </div>
                                    <div class="text-right">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
