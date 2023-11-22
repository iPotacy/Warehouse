<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Register</title>
    <style>
        body {
            background-color: #fff; /* Warna latar belakang putih */
           
        }
    
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
        }

        .btn-primary {
            background-color: #007BFF;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .login_form{
            align-content: center;
            padding-top: 10%;
        }

        .card {
            border: none;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2); /* Efek bayangan yang lebih kuat */
        }

        .card-header {
            background-color: #343a40; /* Warna header card */
            color: #fff;
        }

    </style>
</head>
<body>
    {{-- ini div pembungkus keseluruhan form login --}}
    <div class="container py-5">
        {{-- ini div untuk mengatur lebar dan padding form dan warna card --}}
        <div class="card bg-dark text-white w-50 center border rounded px-3 py-3 mx-auto ">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <h1 align="center">Register</h1>
        <p class="text-white-50" align="center">Create User Account!</p>
        @if($errors->any())
        {{-- div ini adalah alert klo sebagai pembungkus list --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                {{-- ini List Item klo user belum isi Form  --}}
                {{-- ini {{ $item }} itu adalah kondisi --}}
                    <li> {{ $item }} </li> 
                @endforeach
            </ul>
        </div>
        @endif
        {{-- ini adalah form untuk kalian modifikasi lagi --}}
        {{-- ini adalah value untuk mengambil old email dari data --}}
        <form action="{{ url('/register') }}" method="POST" class="login_form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="" name="name" class="form-control ">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="" name="email" class="form-control ">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
        <div class="mb-3 d-grid">
            <a href="{{ url('/users') }}">
                <button type="submit" class="btn btn-primary">Back</button>
            </a>
        </div>
    </div> 
    </div> 
    </div>
</body>
</html>