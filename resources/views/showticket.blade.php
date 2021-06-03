<x-navbar />
{{--<p>{{$data}}</p>--}}

@foreach($data as $list)
    <div class="card text-center mt-3" style="width:650px; margin-left: 30px;">
        <div class="card-body row">
            <div class="col-3">
                <img src="../Images/tktlogo.jpg" style="height: 195px; width:160px;  margin-left: -15px; margin-top: -15px; margin-bottom:-15px;">
            </div>
            <div class="col-9">
                <div class="card-header" style="margin-left:-14px; width:485px; margin-top:-15px;">
                    <b>MOVIE TICKET</b>
                </div>
                <h5 class="card-title">{{$list->m_name}}</h5>
                <p class="card-text"><b>No. of Ticket :  </b>{{$list->numoftkt}}</p>
                <p class="card-text"><b>Seat No :  </b>{{$list->seat_num}}</p>
                <div class="card-footer" style="margin-left:-14px; width:485px; margin-bottom:-15px;">
                    <b>ADMIT ONE</b>
                </div>
            </div>
        </div>
    </div>

    <br>
    @endforeach

