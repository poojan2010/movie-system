<x-navbar />
<html>
<body>
<div class="row">
    @if($movielist->isNotEmpty())
        @foreach($movielist as $movie)
            <div class="col-3 mt-4">
                <div class="card" style="width: 15rem; margin-left: 50px;">
                    <a href="/moviedetails/{{ $movie->m_id }}"><img src="{{$movie->image}}" class="card-img-top rounded" style="height:280px;"></a>
                </div>
            </div>
        @endforeach
    @else
        <div>
            <center><img src="../Images/norecord.png" alt="" width="500" height="600"></center>
        </div>
    @endif
</div>
</body>
</html>
