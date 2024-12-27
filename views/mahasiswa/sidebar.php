  <style>
    .sidebar {
        background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff); 
        color: white;
        min-width: 200px;
        max-width: 200px;
        display: flex;
        flex-direction: column;
        height: 100vh;
        top: 0;
        left: 0;
        padding-top: 0.10px;
        position: fixed;
    }

    .sidebar .nav-link {
        color: white;
        font-weight: 500;
        padding: 10px 20px;
    }

    .sidebar .nav-link.active, .sidebar .nav-link:hover{
        background-color: #FFE492; 
        color: white;
        border-radius: 8px;
        font-size: 15px;
    }

    .sidebar .logo {
        width: 80px;
        margin-top: -20px;
    }

    .sidebar-footer {
        margin-top: auto;
        font-size: 0.8rem;
        text-align: center;
        padding: 10px 0;
        color: white;
    }

    .sidebar .nav-item {
        margin-bottom: 15px;
    }

    h5{
        margin-top: -20px;
    }
    </style>

<nav class="sidebar">
  <div class="text-center py-4">
    <img src="/img/designLogo.png" alt="Logo SiBTAN" class="logo mb-1">
    <h5>SiBTAN</h5>
  </div>
  <ul class="nav flex-column px-2">
    <li class="nav-item my-2">
      <a href="home" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home' ? 'active' : ''; ?>">Home</a>
    </li>
    <li class="nav-item">
      <a href="profile" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'profile' ? 'active' : ''; ?>">Profile</a>
    </li>
    <li class="nav-item">
      <a href="tatacara" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'tatacara' ? 'active' : ''; ?>">Tata Cara</a>
    </li>
    <li class="nav-item">
      <a href="dataku" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'dataku' ? 'active' : ''; ?>">Dataku</a>
    </li>
    <li class="nav-item">
      <a href="infodata" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'infodata' ? 'active' : ''; ?>">Info Data</a>
    </li>
    <li class="nav-item">
      <a href="logout" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'logout' ? 'active' : ''; ?>">Logout</a>
    </li>
    <li class="nav-item">
      <a href="callcenter" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'callcenter' ? 'active' : ''; ?>">Call Center</a>
    </li>
  </ul>
  <div class="sidebar-footer">
    © 2024 SiBTAN JTI Polinema.
  </div>
</nav>
