<x-sidebar />


<body>
<div class="row mt-5">
    <div class="col-2">
    </div>
    <div class="col-3">

        <div class="card text-white bg-primary" style="width: 18rem; ">
            <div class="card-body">
                <h2 class="card-title"><center>Movies</center></h2>
                <h2 class="card-text"><center>{{ count($data['movie']) }}</center></h2>

            </div>
        </div>
    </div>

    <div class="col-3">

        <div class="card text-white bg-success" style="width: 18rem; ">
            <div class="card-body">
                <h2 class="card-title"><center>Theatres</center></h2>
                <h2 class="card-text"><center>{{ count($data['theatre']) }}</center></h2>

            </div>
        </div>
    </div>

    <div class="col-3">

        <div class="card text-white bg-warning" style="width: 18rem; ">
            <div class="card-body">
                <h2 class="card-title"><center>Bookings</center></h2>
                <h2 class="card-text"><center>{{count($data['booknow'])}}</center></h2>

            </div>
        </div>
    </div>

</div>
</body>

