<x-sidebar />
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<div class="mt-3" style="margin-left: 400px">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>ADD ACTOR/ACTRESS</i></b>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/editstarcast',$editstarcast->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control"  name="name" id="name" value="{{ $editstarcast->name }}" />

                </div>

                <div class="mb-3">
                    <label for="bio" class="form-label"><b>Bio</b></label>
                    <textarea name="bio" class="form-control" id="bio" rows="4">{{ $editstarcast->bio }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label"><b>Date of Birth</b></label>
                    <input type="date" class="form-control"  name="birth_date" id="birth_date" value="{{ $editstarcast->birth_date }}" />
                </div>

                <div class="mb-3">
                    <label for="worked_movie" class="form-label"><b>Worked Movie</b></label>
                    <textarea name="worked_movie" class="form-control" id="bio" rows="4">{{ $editstarcast->worked_movie }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
</div>

</body>

</html>
