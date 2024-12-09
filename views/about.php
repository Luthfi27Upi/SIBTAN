<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM BEBAS TANGGUNGAN</title>
    <style>
        /* Default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            display: flex; 
            flex-direction: column;
            min-height: 100vh; 
        }

        /* Navbar */
        nav {
            background-color: #0E4088;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 5;
            color: white;
        }

        nav .logo {
            color: white;
            font-size: 1.2em; 
            font-weight: bold;
            text-transform: uppercase;
            display: flex;
            align-items: center; 
        }

        nav .logo img {
            height: 40px;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 0.8em;
            padding: 5px;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #5db0d0;
        }

        nav ul li .active {
            background-color: #D3D3D3;
        }

        /* Main */
        main {
            flex: 1; 
            padding: 40px 5px 5px 10px;
            background-color: white;
            display: flex; /* Add flexbox for side-by-side layout */
            justify-content: space-between; /* Ensure columns are spaced out */
            gap: 20px;
        }

        .left-column {
            flex: 2; /* Lebar lebih besar dari right column */
            padding: 20px;
        }


        .right-column img {
    width: 100%; /* Increase width to fill more space */
    border-radius: 10px;
    margin-bottom: 0px; /* Reduce bottom margin to zero */
}


        /* Memastikan setiap li berada dalam kolom */
        .left-column ul {
            display: flex;
            flex-direction: column; /* Membuat setiap li berada di dalam kolom */
            padding: 0;
        }

        .left-column ul li {
            margin-bottom: 10px;
            font-size: 1em;
            background-color: #E9F4FB; /* Background box */
            padding: 8px; /* Padding inside the box */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
            border: 1px solid #ddd; /* Light border around each li */
        }

        /* Footer */
        footer {
            background-color: #0E4088;
            color: white;
            padding: 10px 10px;
            text-align: center;
            font-size: 0.9em;
        }

        /* Responsiveness */
        .left-column, .right-column {
            flex: 1 1 100%; /* Membuat kolom menjadi satu baris pada perangkat kecil */
            padding: 20px;
        }

        @media (min-width: 768px) {
            .left-column, .right-column {
                flex: 1; /* Make both columns take equal width on larger screens */
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="../img/designLogo.png" alt="Logo">
            SIBTAN
        </div>
        <ul>
            <li><a href="#" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Informasi</a></li>
            <li><a href="#" class="nav-link">Menu</a></li>
            <li><a href="#" class="nav-link active">About</a></li>
        </ul>
    </nav>

    <main>
        <!-- Left Column -->
        <div class="left-column">
            <!-- Image for left column (add image source) -->
            <img src="path-to-your-left-image.jpg" alt="Tentang SIBTAN" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
            
            <ul>
                <li>Pendahuluan</li>
                <li>Tujuan dan Manfaat</li>
                <li>Ketentuan Umum dan Khusus</li>
                <li>Info Data</li>
                <li>Call Center</li>
            </ul>
        </div>

        <!-- Right Column -->
        <div class="right-column">
            <img src="../img/gedung.jpg" alt="Gedung SIBTAN" ">
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SiBTAN JTI Polinema.</p>
    </footer>
</body>
</html>
