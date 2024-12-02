<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Kata Sandi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Reset Kata Sandi</h1>
    <form action="/password-reset?token=<?php echo htmlspecialchars($_GET['token'] ?? ''); ?>" method="POST">
        <label for="new_password">Kata Sandi Baru:</label>
        <input type="password" id="new_password" name="new_password" required>
        <br>
        <input type="submit" value="Reset Kata Sandi">
    </form>
</body>
<script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response);
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat mengirim permintaan.');
                    }
                });
            });
        });
    </script>
</html>