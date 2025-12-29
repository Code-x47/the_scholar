@extends('Layout.frame')


@section('content')
<form action="{{route('user.login')}}" method="post" style="margin: 50%;">
@csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<label>Email:</label>
<input type="text" name="email" placeholder="Enter your email here"><br><br>



<label>Password:</label>
<input type="password" name="password" placeholder="Enter your password here"><br><br>


<button>Login</button>



</form>





@endsection