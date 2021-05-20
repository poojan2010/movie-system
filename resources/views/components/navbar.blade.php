<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../Images/movielogo.jpg" alt="" width="70" height="50">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="mt-2">
                    <form class="d-flex mt-1">
                        <input class="form-control me-2" style="width:500px;" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-link active mt-2" style="margin-left:680px;">
                    {{ Auth::guard('admin')->user()->name }}
                </li>
                <li class="nav-link active mt-1">
                    <a href="/logout"><button class="btn btn-light">Logout</button></a>
                </li>
            </ul>


        </div>
    </div>
</nav>
