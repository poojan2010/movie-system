<x-sidebar />
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>StarCast List</i></center></h3>
</head>
<div style="margin-left: 248px;">
    <table class="mt-3 table table-striped" border="1px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>BIO</th>
            <th>Birth Date</th>
            <th>Worked Movie</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($starcastlist as $starcast)
            <tr>
                <td> {{$starcast->id}} </td>
                <td> {{$starcast->name}} </td>
                <td> {{$starcast->bio}} </td>
                <td> {{$starcast->birth_date}} </td>
                <td> {{$starcast->worked_movie}} </td>

                <td>
                    <form method="get">
                        @csrf
                        @method('UPDATE')
                        <a href="{{ url('/editstarcast',$starcast->id) }}" class="btn btn-success">EDIT</a>

                        @method('DELETE')
                        <a href="{{ url('/delete',$starcast->id) }}" type="submit" class="btn btn-danger">DELETE</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
