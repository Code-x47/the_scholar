@extends('Layout.frame')


@section('content')



<form action="{{route('user.register')}}" method="post" style="margin: 10%;">
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

<label>Name:</label>
<input type="text" name="name" placeholder="Enter your name here"><br><br>



<label>Email:</label>
<input type="text" name="email" placeholder="Enter your email here"><br><br>



<label>Password:</label>
<input type="password" name="password" placeholder="Enter your password here"><br><br>


<button>Login</button>



</form>





@endsection