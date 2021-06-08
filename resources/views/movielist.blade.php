<x-sidebar />
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>Movie List</i></center></h3>
</head>
<div style="margin-left: 248px">
<table class="mt-3 table table-striped" border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Overview</th>
        <th>Image</th>
        <th>Release Year</th>
        <th>Run Time</th>
        <th>Cast Members</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($movielist as $movie)
        <tr>
            <td> {{$movie->m_id}} </td>
            <td> {{$movie->title}} </td>
            <td> {{$movie->overview}} </td>

            <td> <img src="{{$movie->image}}" width="80px" height="80px"> </td>
            <td> {{$movie->release_year}} </td>
            <td> {{$movie->runtime}} </td>
            <td> {{$movie->cast_member}} </td>
            <td>
                <form method="get">
                @csrf
                    @method('UPDATE')
                    <a href="{{ url('/editmovie',$movie->m_id) }}" class="btn btn-success"><i class="far fa-edit"></i></a>

                    @method('DELETE')
                    <a href="{{ url('/deletemovie',$movie->m_id) }}" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    <div style="margin-left: 42%;">
        {{ $movielist->links() }}
    </div>
</div>
</body>
</html>
