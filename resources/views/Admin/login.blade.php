
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="mt-3" style="margin-left: 400px">
<div class="card" style="width: 700px;">
    <div class="card-header">
        <b><i>LOGIN</i></b>
    </div>
    <div class="card-body">
        <form action="/admin" method="post">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter EmailID">
                <span>@error('email'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Enter Password">
                <span>@error('password'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <input type="submit" name="login" value="Login" class="btn btn-primary"><br><br>
                New User? <a href="/signup">Register</a>
            </div>
        </form>
    </div>
</div>


</div>
</body>
</html>



