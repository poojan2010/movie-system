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
        <br>
        <h5><i>{{ $movielist->release_year }}</i></h5>
        <br>
        <h4>Cast</h4>
        <i>{{ $movielist->cast_member }}</i>
        <br><br>
        <h4>About Movie</h4>
        <i>{{ $movielist->overview }}</i>
        <br><br><br>
{{--        <a href="/booknow/{{$movielist->m_id}}"><button class="btn btn-dark">Book Now</button></a>--}}
        <a href="/movieidname/{{$movielist->m_id}}"><button class="btn btn-dark">Book Now</button></a>
    </div>

</div>
</body>
</html>

