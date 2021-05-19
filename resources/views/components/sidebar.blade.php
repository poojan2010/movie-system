<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-grey w3-bar-block" style="width:16%">
    <h3 class="w3-bar-item">Menu</h3>


    <div class="w3-dropdown-hover">
        <button class="w3-button">Movies</button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addmovie" class="w3-bar-item w3-button">Add Movie</a>
            <a href="/movielist" class="w3-bar-item w3-button">Movie list</a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button">Starcast</button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addstarcast" class="w3-bar-item w3-button">Add Starcast</a>
            <a href="/starcastlist" class="w3-bar-item w3-button">Starcast list</a>
        </div>
    </div>

    <div class="w3-dropdown-hover">
        <button class="w3-button">Theatre</button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="/addtheatre" class="w3-bar-item w3-button">Add Theatre</a>
            <a href="/theatrelist" class="w3-bar-item w3-button">Theatre list</a>
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
