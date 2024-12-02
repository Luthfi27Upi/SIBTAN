<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <form id="loginForm" method="POST" action="/login">
        <label for="nim">Masukkan kode nim:</label>
        <input type="text" name="nim" id="nim" maxlength="6">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Verifikasi</button>
        <a href="../auth/password-request.php">forgot password?</a>
    </form>

    <script>
    $(function() {
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            var nim = $('#nim').val();
            var password = $('#password').val();
            var valid = true;

            if (nim.length === 0 || password.length === 0) {
                alert('kolom tidak boleh kosong');
                valid =false;
            }
            if(valid){
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    var jsonResponse = JSON.parse(response);
                    if (jsonResponse.status === "error") {
                        alert('Error: ' + jsonResponse.message);
                    } else if (jsonResponse.status === "success") {
                        window.location.href = '/views/auth/otp.php';
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error submitting the form: ' + error);
                }
            });
        }
        });
    });
    </script>
</body>
</html> 