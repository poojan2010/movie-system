<x-sidebar />
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<div class="mt-3" style="margin-left: 400px">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>EDIT SHOW</i></b>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/editshow',$editshow->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control"  name="name" id="name" value="{{ $editshow->name }}" />

                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label"><b>Strat Time</b></label>
                    <input type="text" class="form-control"  name="start_time" id="start_time" value="{{ $editshow->start_time }}" />

                </div>
                <div class="mb-3">
                    <label for="end_time" class="form-label"><b>Name</b></label>
                    <input type="text" class="form-control"  name="end_time" id="end_time" value="{{ $editshow->end_time }}" />

                </div>

                <div class="mb-3">
                    <label for="theatre_id" class="form-label"><b>Theatre Id</b></label>
                    <input type="text" class="form-control"  name="theatre_id" id="theatre_id" value="{{ $editshow->theatre_id }}" />

                </div>

                {{--<div class="mb-3">
                    <label for="theatre_id" class="form-label"><b>Choose Theatre</b></label><br>
                    <select name="theatre_id" id="theatre_id" style="width:665px;" class="form-control">
                        @foreach($theatrelist as $list)
                            <option value="{{$list->id}}">{{ $list->name }}</option>
                        @endforeach
                    </select>
                </div>--}}


                <button type="submit" class="btn btn-primary"> Update </button>
            </form>
        </div>
    </div>
</div>

</body>

</html>
