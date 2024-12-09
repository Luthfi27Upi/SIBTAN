<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Bebas Tanggungan</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="resources/css/login.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <div class="login-content">
        <div class="login-form">
            <div class="header">
              <img src="img/logologin.png" alt="Logo Sistem Bebas Tanggungan" class="logo">
              <h1>Sistem Bebas Tanggungan</h1>
            </div>
          <form id="loginForm" method="POST" action="actionlogin">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="nim" id="nim" placeholder="Username">
            </div>
            <div class="form-group ">
              <label for="password">Kata Sandi</label>
              <div class="password-wrapper">
                  <input type="password" name="password" id="password" placeholder="Kata Sandi">
                  <span class="toggle-password">&#128065;</span>
              </div>
            </div>
            <button type="submit" class="login-button">Masuk</button>
          </form>
        </div>
        <div class="login-image">
          <img src="img/gedunglogin.jpg" alt="Gedung Kampus">
        </div>
      </div>
    </div>
  </div>

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
                        window.location.href = 'auth/otp';
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error submitting the form: ' + error);
                }
            });
        }
        });
    });

    $(document).ready(function () {
        $(".toggle-password").click(function () {
            let input = $("#password");
            let type = input.attr("type") === "password" ? "text" : "password"; //Logika untuk menentukan apakah tipe input itu password atau bukan
            input.attr("type", type);  //merubah ke teks atau password seperti simbol titik
            $(this).toggleClass("active");  //digunakan untuk mengubah gaya ikon dari mata terbuka ke mata tertutup.
        });
    });

    </script>
</body>
</html>