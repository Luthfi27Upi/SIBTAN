<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi OTP</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <form method="POST" action="/verifyOTP">
        <label for="otp">Masukkan kode OTP:</label>
        <input type="text" name="otp" id="otp" maxlength="6">
        <br>
        <button type="submit">Verifikasi</button>
    </form>
</body>
<script>
    $(function() {
        $('form').on('submit', function(e) {
            e.preventDefault(); 

            var otp = $('#otp').val();
            var valid = true;

            if (otp.length === 0) {
                alert('kolom tidak boleh kosong');
                valid = false;
            }

            if (valid) {
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        var jsonResponse = JSON.parse(response);
                        if (jsonResponse.status === "error") {
                            alert('Error: ' + jsonResponse.message);
                        } else if (jsonResponse.status === "success") {
                            var userRole = jsonResponse.role; 
                            if (userRole === 'admin') {
                                window.location.href = '../dashboardAdminJurusan.php'; 
                            } else if (userRole === 'admin_prodi') {
                                window.location.href = '../dashboardAdminProdi.php'; 
                            } else {
                                window.location.href = '../dashboard.php'; 
                            }
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
</html> 