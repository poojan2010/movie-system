
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="mt-3" style="margin-left: 400px">
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>SIGNUP</i></b>
        </div>
        <div class="card-body">
        <form action="/register" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter User Name">

            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email ID">


            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Enter Password">


            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password">


           </div>

            <div class="mb-3">
                <input type="submit" name="signup" value="SIGNUP" class="btn btn-primary"><br><br>
                Already have Register? <a href="/"> login </a>

            </div>
        </form>

    </div>
    </div>
</div>
</body>
</html>
