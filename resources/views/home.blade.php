<x-navbar />

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../Images/radheslide.jpg" class="d-block w-100 h-50" alt="...">

        </div>
        <div class="carousel-item">
            <img src="../Images/laxmislide.jpg" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../Images/kesarislide.jpg" class="d-block w-100 h-50"  alt="...">
        </div>
        <div class="carousel-item">
            <img src="../Images/msdhonislide.jpg" class="d-block w-100 h-50"  alt="...">

        </div>
    </div>
</div>

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

<body>
<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 500,
        wrap: false
    })

</script>
</body>
