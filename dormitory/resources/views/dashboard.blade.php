<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormitory Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Custom styles for Telkom University theme */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fff; 
    }

    header {
        background-color: #BF131D; /* Telkom University Maroon */
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul li a,
    .navbar-nav .nav-link {
        color: #fff;
        text-decoration: none;
    }

    section {
        padding: 20px;
        background-color: #fff; /* White background */
        border-radius: 10px;
        margin-bottom: 20px;
    }

    section h2 {
        border-bottom: 2px solid #BF131D; /* Telkom University Maroon */
        padding-bottom: 10px;
    }

    footer {
        background-color: #BF131D; /* Telkom University Maroon */
        color: #fff;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>

</head>
<body>
    <!-- Bootstrap Navbar -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #BF131D;">
            <a class="navbar-brand" href="#">Dormitory Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#checkin">Check-in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#checkout">Check-out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roominfo">Informasi Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#residentprofile">Profil Penghuni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#activitypermission">Perizinan Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#helpdesk">Helpdesk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dormshop">Dormitory Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#calendar">Kalender Kegiatan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="container mt-5">
        <!-- Content Sections -->
        <section id="home">
            <h2>Home</h2>
            <p>Welcome to Dormitory Dashboard!</p>
        </section>
        
        <section id="checkin">
            <h2>Check-in</h2>
            <p>Check-in information goes here.</p>
        </section>
        
        <section id="checkout">
            <h2>Check-out</h2>
            <p>Check-out information goes here.</p>
        </section>
        
        <section id="roominfo">
            <h2>Informasi Kamar</h2>
            <p>Room information goes here.</p>
        </section>
        
        <section id="residentprofile">
            <h2>Profil Penghuni</h2>
            <p>Resident profile information goes here.</p>
        </section>
        
        <section id="activitypermission">
            <h2>Perizinan Kegiatan</h2>
            <p>Activity permission information goes here.</p>
        </section>
        
        <section id="helpdesk">
            <h2>Helpdesk</h2>
            <p>Helpdesk information goes here.</p>
        </section>
        
        <section id="dormshop">
            <h2>Dormitory Shop</h2>
            <p>Dormitory shop information goes here.</p>
        </section>
        
        <section id="calendar">
            <h2>Kalender Kegiatan</h2>
            <p>Calendar of activities goes here.</p>
        </section>
    </div>

    <!-- Bootstrap JS script (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
