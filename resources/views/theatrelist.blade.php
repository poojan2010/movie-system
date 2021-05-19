<x-sidebar />
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>Theatre List</i></center></h3>
</head>
<div style="margin-left: 248px;">
    <table class="mt-3 table table-striped" border="1px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Area</th>
            <th>City</th>
        </tr>
        </thead>
        <tbody>
        @foreach($theatrelist as $theatre)
            <tr>
                <td> {{$theatre->id}} </td>
                <td> {{$theatre->name}} </td>
                <td> {{$theatre->area}} </td>
                <td> {{$theatre->city}} </td>

                <td>
                    <form method="get">
                        @csrf
                        @method('UPDATE')
                        <a href="{{ url('/edittheatre',$theatre->id) }}" class="btn btn-success">EDIT</a>

                        @method('DELETE')
                        <a href="{{ url('/deletetheatre',$theatre->id) }}" type="submit" class="btn btn-danger">DELETE</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
