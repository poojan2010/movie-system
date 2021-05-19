<x-navbar />

<html>
<body>
<div class="row mt-5">
    <div class="col-2">

    </div>
    <div class="col-4">
        <img src="{{$movielist->image}}" class="card-img-top rounded"  style="height:550px;">
    </div>
    <div class="col-4">
        <h1>{{ $movielist->title }}</h1>
        <h4>{{ $movielist->release_year }}</h4>
        <h4>Cast</h4>
        {{ $movielist->cast_member }}
        <h4>About Movie</h4>
        {{ $movielist->overview }}
    </div>

</div>
</body>
</html>
