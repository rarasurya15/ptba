@extends('Layout.Navbar')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesignout.css">
    <title>Sign Out</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</body>
</html>
@endsection