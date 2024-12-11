<style>
    header {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 10px 20px;
        background-color: #CCE5FF;
    }

    header .user {
        font-weight: bold;
        color: #2B74C4;
    }
</style>

<header>
    <img src="../img/logouser.jpg" alt="User Avatar"
        style="width: 25px; height: 25px;  border-radius: 50%;margin-right: 10px;">
    <div class="user"><?php echo $_SESSION['user']['username'] ?></div>
</header>