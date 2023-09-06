@extends('pages.app')

@section ('title')

    Register

@endsection

@section('content')
<body style=" background-image: url({{asset('asset/images/bc1.png')}})">{}
    <div class="container">
        <div class="row justify-content-center" style="margin-top:10%">
            <div class="card  p-4" style="width: 40vw">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="text"  name="fname" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nationality</label>
                        <input type="text" name="nation" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>





@endsection