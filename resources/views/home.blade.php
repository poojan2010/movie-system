<x-navbar />
<html>
<body>
<div class="row">
@foreach($movielist as $movie)
    <div class="col-3 mt-4">
        <div class="card" style="width: 15rem; margin-left: 50px;">
            <a href="/moviedetails/{{ $movie->id }}"><img src="{{$movie->image}}" class="card-img-top rounded"  style="height:280px; "></a>
        </div>
    </div>
@endforeach
</div>
</body>
</html>
