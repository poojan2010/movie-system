<x-sidebar />
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>Booking List</i></center></h3>
</head>
<div style="margin-left: 248px">
    <table class="mt-3 table table-striped" border="1px">
        <thead>
        <tr>
            <th>Booking ID</th>
            <th>Movie Name</th>
            <th>User Name</th>
            <th>Theatre ID</th>
            <th>Seats</th>
            <th>Seat Numbers</th>


        </tr>
        </thead>
        <tbody>
        @foreach($bookinglist as $booking)
            <tr>
                <td> {{$booking->id}} </td>
                <td> {{$booking->m_name}} </td>
                <td> {{$booking->person_name}} </td>
                <td> {{$booking->theatre_id}} </td>
                <td> {{$booking->numoftkt}} </td>
                <td> {{$booking->seat_num}} </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
