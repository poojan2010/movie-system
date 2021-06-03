<x-sidebar />
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>Show List</i></center></h3>
</head>
<div style="margin-left: 248px">
    <table class="mt-3 table table-striped" border="1px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Theatre Id</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($showlist as $show)
            <tr>
                <td> {{$show->id}} </td>
                <td> {{$show->name}} </td>
                <td> {{$show->start_time}} </td>
                <td> {{$show->end_time}} </td>
                <td> {{$show->theatre_id}} </td>
                <td>
                    <form method="get">
                        @csrf
                        @method('UPDATE')
                        <a href="{{ url('/editshow',$show->id) }}" class="btn btn-success"><i class="far fa-edit"></i></a>

                        @method('DELETE')
                        <a href="{{ url('/deleteshow',$show->id) }}" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
