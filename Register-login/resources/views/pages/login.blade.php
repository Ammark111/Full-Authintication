@extends('pages.app')

@section ('title')

    login

@endsection

@section('content')
<body style="   width: 100%;
                height:100vh;
                overflow-y: hidden;
                background-image: url({{asset('asset/images/bc3.jpg')}});
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;">{}
    <div class="container">
        <div class="row justify-content-center" style="margin-top:25vh">
            <div class="card bg-transparent p-4" style="width: 35vw; box-shadow: 3px 3px 10px black; backdrop-filter: blur(20px);">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Email</b></label>
                        <input type="email"  name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>                      
                    <button type="submit" class="btn btn-primary form-control">login</button>
                </form>
            </div>
        </div>
    </div>
</body>


@endsection