<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM BEBAS TANGGUNGAN</title>
    <style>
        /* STyle Default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #0E4088;
            color: #333;
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

nav .nav-link {
    color: white;
    text-decoration: none; 
}

nav .nav-link.active {
    background-color: #D3D3D3; 
}

        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin-left: 1px;
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
            border-radius: 5px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 1em;
            margin: 0 15px;
            padding: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #345f80;
            border-radius: 5px;
        }

        /* Header*/
        header {
            background: url('../img/RuanganDashboard.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px; 
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.5em;
            font-weight: bold;
        }

        /* Content */
        .content {
            padding: 27px 0;
            background-color: white;
        }

        .content h4 {
            font-size: 2em;
            text-align: center;
            margin-bottom: 30px;
        }

        .content p {
            font-size: 1.2em;
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;

        }

        /* Footer */
        footer {
            background-color: #0E4088;
            color: white;
            padding: 10px 5px;
            text-align: center;
            font-size: 0.8em;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
    <div class="logo">
    <img src="../img/designLogo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
    SIBTAN
</div>

        <ul>
            <li><a href="#" class="nav-link active">Home</a></li>
            <li><a href="#" class="nav-link ">Informasi</a></li>
            <li><a href="#" class="nav-link ">Menu</a></li>
            <li><a href="#" class="nav-link ">About</a></li>
        </ul>
    </nav>
    
    <header>
        <div class="container">
            <h1>Sistem Bebas Tanggungan</h1>
            <p>Jurusan Teknologi Informasi</p>
        </div>
    </header>

    <section class="content">
        <div class="container">
            <h4>Profil Sistem Bebas Tanggungan</h4>
            <p>Sistem informasi bebas tanggungan tugas akhir adalah sistem yang dirancang untuk melakukan pengolahan data validasi bebas tanggungan melalui software sehingga proses kegiatan validasi surat dapat dikelola dengan baik sehingga menjadi informasi yang bermanfaat untuk manajemen perguruan tinggi dan pengambilan surat untuk mahasiswa akhir.
</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 SiBTAN JTI Polinema.</p>
        </div>
    </footer>
</body>
</html>
