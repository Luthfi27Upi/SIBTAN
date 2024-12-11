<nav>
    <div class="logo">
        <img src="../img/designLogo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
        SIBTAN
    </div>

    <ul>
        <li>
            <a href="home"
                class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home' ? 'active' : ''; ?>">Home</a>
        </li>
        <li>
            <a href="informasi"
                class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'informasi' ? 'active' : ''; ?>">Informasi</a>
        </li>
        <li><a href="users/home" class="nav-link ">Menu</a></li>
        </li>
    </ul>
</nav>