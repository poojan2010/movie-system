<x-sidebar />
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<div class="mt-3" style="margin-left: 400px">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>EDIT MOVIE</i></b>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/editmovie',$editmovie->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><b>Title</b></label>
                    <input type="text" class="form-control"  name="title" id="title" value="{{ $editmovie->title }}" />

                </div>
                <div class="mb-3">
                    <label for="overview" class="form-label"><b>Overview</b></label>
                    <textarea name="overview" class="form-control" id="overview" rows="4">{{$editmovie->overview}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"><b>Image</b></label>
                    {{$editmovie->image}}
                    {{--<img src="http://127.0.0.1:8000/Uploads/{{$editmovie->image}}" width="80px" height="50px"><br>
                    <label for="image" class="form-label"><b>Choose Image for Update</b></label>--}}
                    <input type="file" class="form-control"  name="image" id="image">
                </div>

                <div class="mb-3">
                    <label for="release_year" class="form-label"><b>Release Year</b></label>
                    <input type="date" class="form-control"  name="release_year" id="release_year" value="{{ $editmovie->release_year }}" />
                </div>

                <div class="mb-3">
                    <label for="runtime" class="form-label"><b>Run Time</b></label>
                    <input type="text" class="form-control"  name="runtime" id="runtime" value="{{ $editmovie->runtime }}" />
                </div>

                <div class="mb-3">
                    <label for="cast_member" class="form-label"><b>Cast Member</b></label>
                    <input type="text" class="form-control"  name="cast_member" id="cast_member" value="{{ $editmovie->cast_member }}" />
                </div>


                <button type="submit" class="btn btn-primary"> Update </button>
            </form>
        </div>
    </div>
</div>

</body>

</html>
