<link rel="stylesheet" href="/resources/css/components/sidebar.css">

<nav class="sidebar">
  <div class="text-center py-4">
    <img src="/../img/designLogo.png" alt="Logo SiBTAN" class="logo mb-1">
    <h5>SiBTAN</h5>
  </div>
  <ul class="nav flex-column px-2">
    <li class="nav-item my-2">
      <a href="/users/home" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home' ? 'active' : ''; ?>">Home</a>
    </li>
    <li class="nav-item">
      <a href="/users/tatacara" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'tatacara' ? 'active' : ''; ?>">Tata Cara</a>
    </li>
    <li class="nav-item">
      <a href="/users/data" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'data' ? 'active' : ''; ?>">Dataku</a>
    </li>
    <li class="nav-item">
      <a href="/users/infodata" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'infodata' ? 'active' : ''; ?>">Info Data</a>
    </li>
    <li class="nav-item">
      <a href="/users/logout" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'logout' ? 'active' : ''; ?>">Logout</a>
    </li>
    <li class="nav-item">
      <a href="/users/callcenter" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'callcenter' ? 'active' : ''; ?>">Call Center</a>
    </li>
  </ul>
  <div class="sidebar-footer">
    © 2024 SiBTAN JTI Polinema.
  </div>
</nav>
