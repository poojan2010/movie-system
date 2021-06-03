<x-navbar />

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<script>
    $(document).ready(function()
    {
        var checkedcount = 0;

        $("input[type=checkbox]").click(function()
        {
            if(this.checked)
            {
                $("#select_seat").append($(this).val());
                checkedcount++;
            }
            else{
                $("#select_seat").text("");
                checkedcount--;
            }
            if(checkedcount>=$("#check").val()){
                $(":checkbox").not("input:checkbox:checked").prop("disabled", this.checked);
            }
        });
    });
</script>
<style>
    .checkbox label:after {
        content: '';
        display: table;
        clear: both;
    }

    .checkbox .cr
    {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.3em;
        height: 1.3em;
        float: left;
        margin-right: .5em;
    }

    .cr {
        border-radius: 50%;
    }

    .checkbox .cr .cr-icon
    {
        position: absolute;
        font-size: .8em;
        line-height: 0;
        top: 50%;
        left: 20%;
    }

    .cr-icon {
        margin-left: 0.04em;
    }

    .checkbox label input[type="checkbox"]
    {
        display: none;
    }

    .checkbox label input[type="checkbox"] + .cr > .cr-icon
    {
        transform: scale(3) rotateZ(-20deg);
        opacity: 0;
        transition: all .3s ease-in;
    }

    .checkbox label input[type="checkbox"]:checked + .cr > .cr-icon
    {
        transform: scale(1) rotateZ(0deg);
        opacity: 1;
    }

    .checkbox label input[type="checkbox"]:disabled + .cr
    {
        opacity: .5;
    }
</style>
<body>



<div class="mt-2 mb-2" style="margin-left: 400px">
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>BOOK YOUR TICKET</i></b>
        </div>
        <div class="card-body">

            <form method="post" action="{{ url('bookticket') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="m_id" class="form-label"><b>Movie Id</b></label>
                    <input type="number" class="form-control" value="{{$booknow->m_id}}" name="m_id" id="m_id" readonly>

                </div>

                <div class="mb-3">
                    <label for="m_name" class="form-label"><b>Movie Name</b></label>
                    <input type="text" class="form-control" value=" {{$booknow->title}}" name="m_name" id="m_name" readonly>

                </div>

                <div class="mb-3">
                    <label for="person_name" class="form-label"><b>Person Name</b></label>
                    <input type="text" class="form-control"  name="person_name" id="person_name">

                </div>

               {{-- <div class="mb-3">
                    <label for="booking_date" class="form-label"><b>Booking Date</b></label>
                    <input type="date" class="form-control"  name="booking_date" id="booking_date">
                </div>--}}

                <div class="mb-3">
                    <label for="theatre_id" class="form-label"><b>Choose Theatre</b></label><br>
                    <select name="theatre_id" id="theatre_id" style="width:665px;" class="form-control" >
                        <option value="0">-- Select Theatre --</option>
                        @foreach($theaterlist as $list)
                            <option value="{{$list->id}}">{{ $list->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3" >
                    <label for="show_id" class="form-label"><b>Choose Show</b></label><br>
                    <select name="show_id" id="show_id" style="width:665px;" class="form-control">
                      {{--  @foreach($show as $list)--}}
{{--                            <option value="{{$list->id}}">{{ $list->name}} {{$list->start_time}} - {{$list->end_time }}</option>--}}
                      {{--  @endforeach--}}
                        <option value="0">-- Select Show --</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="numoftkt" class="form-label"><b>No of Tickets</b></label>
                    <input type="number" class="form-control"  name="numoftkt" id="check">
                </div>

                <div>
                        @for ($n = 1; $n < 8; $n++)
                            <div class="checkbox">
                                @for($j=1;$j<7;$j++)

                                        <label style="font-size: 2.5em">
                                            <input type="checkbox" name="seat[]" value="S{{$n}}{{$j}}">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>

                                @endfor
                            </div>
                        @endfor
                </div>
                <span>selected seat: </span><p id="select_seat"></p>
                <button type="submit" class="btn btn-primary">Book</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#theatre_id').change(function () {
            var theatre_id = $(this).val();
            //alert(id);
            $('#show_id').find('option').not(':first').remove();

            $.ajax({
                url:'theatre/'+theatre_id,
                type:'get',
                dataType:'json',
                success:function (response) {
                    //console.log(response);
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len>0) {
                        for (var i = 0; i<len; i++) {
                            var id = response.data[i].id;
                            var name = response.data[i].name;
                            var start_time = response.data[i].start_time;
                            var end_time = response.data[i].end_time;

                            var option = "<option value='"+id+"'>"+name+" "+start_time+ "-" +end_time+"</option>";

                            $("#show_id").append(option);
                        }
                    }
                }
            })
        });
    });
</script>



</body>
