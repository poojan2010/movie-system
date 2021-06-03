<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-grey w3-bar-block" style="width:16%">
    <h2 class="w3-bar-item"><b>Menu</b></h2><br>


    <div class="w3-dropdown-hover">
        <button class="w3-button"><h4>Movies</h4></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addmovie" class="w3-bar-item w3-button">Add Movie</a>
            <a href="/movielist" class="w3-bar-item w3-button">Movie list</a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button"><h4>Starcasts</h4></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addstarcast" class="w3-bar-item w3-button">Add Starcast</a>
            <a href="/starcastlist" class="w3-bar-item w3-button">Starcast list</a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button"><h4>Theatres</h4></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addtheatre" class="w3-bar-item w3-button">Add Theatre</a>
            <a href="/theatrelist" class="w3-bar-item w3-button">Theatre list</a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button"><h4>Shows</h4></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addshow" class="w3-bar-item w3-button">Add Show</a>
            <a href="/showlist" class="w3-bar-item w3-button">Show list</a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button"><h4>Bookings</h4></button>
        <div class="w3-dropdown-content w3-bar-block">
           <a href="/bookinglist" class="w3-bar-item w3-button">Booking List</a>
        </div>
    </div>

</div>

<!-- Page Content -->
<div style="margin-left:16%">

    <div class="w3-container w3-green">
        <h1>Movie System</h1>
    </div>
</div>

</body>
</html>
