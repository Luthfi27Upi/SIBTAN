<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi OTP</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="/resources/css/otp.css">
</head>
<body>
  <div class="otp-container">
    <div class="otp-box">
      <div class="otp-content">
        <div class="otp-form">
          <div class="info">
            You have received the OTP code in your email.
          </div>
          <h1>Enter OTP Code</h1>
          <form method="POST" action="/verifyOTP">
            <div class="input-container">
              <input type="text" name="otp" id="otp" maxlength="6" placeholder="Enter your OTP" required>
            </div>
            <button type="submit" class="verify-button">Verify OTP</button>
          </form>
        </div>
        <div class="otp-image">
          <img src="/resources/img/gedunglogin.jpg" alt="Campus Building">
        </div>
      </div>
    </div>
  </div>
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
                            if (userRole === '2') {
                                window.location.href = '/home'; 
                            } else if (userRole === '3') {
                                window.location.href = '/home'; 
                            } else {
                                window.location.href = '/home'; 
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