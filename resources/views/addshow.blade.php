<x-sidebar />
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>
<div class="mt-3" style="margin-left: 400px">
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>ADD SHOW</i></b>
        </div>
        <div class="card-body">
            <form method="post" action="/addshow" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Show Name</b></label>
                    <input type="text" class="form-control"  name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="start_time" class="form-label"><b>Start Time</b></label>
                    <input type="time" class="form-control" name="start_time" id="start_time">
                </div>

                <div class="mb-3">
                    <label for="end_time" class="form-label"><b>End Time</b></label>
                    <input type="time" class="form-control"  name="end_time" id="end_time">
                </div>

                <div class="mb-3">
                    <label for="theatre_id" class="form-label"><b>Choose Theatre</b></label><br>
                    <select name="theatre_id" id="theatre_id" style="width:665px;" class="form-control">
                        @foreach($theatrelist as $list)
                            <option value="{{$list->id}}">{{ $list->name }}</option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Add Show</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
