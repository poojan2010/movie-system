<x-sidebar />

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<div class="mt-3" style="margin-left: 400px">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>ADD Theatre</i></b>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/edittheatre',$edittheatre->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control"  name="name" id="name" value="{{ $edittheatre->name }}">
                </div>
                <div class="mb-3">
                    <label for="area" class="form-label"><b>Area</b></label>
                    <input type="text" class="form-control"  name="area" id="area" value="{{ $edittheatre->area }}">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label"><b>City</b></label>
                    <input type="text" class="form-control"  name="city" id="city" value="{{ $edittheatre->city }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

</body>

