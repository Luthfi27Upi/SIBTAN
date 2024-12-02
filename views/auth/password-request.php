<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Reset Kata Sandi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    <h1>Permintaan Reset Kata Sandi</h1>
    <form id="requestForm" action="/password-reset-request" method="POST"> 
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Kirim Permintaan Reset">
    </form>
</body>
<script>
        $(document).ready(function() {
            $('#requestForm').on('submit', function(event) {
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
