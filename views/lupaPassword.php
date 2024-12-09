<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #0A3D7C; 
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 80%;
      max-width: 900px;
      height: 400px;
      display: flex;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border: 1px solid #fff;
    }

    .image-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .image-section img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(80%);
    }

    .form-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .form-section h2 {
      margin: 0 0 10px 0;
      color: #0A3D7C;
      font-size: 1.5rem;
    }

    .form-section p {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 30px;
    }

    .form-group {
      width: 100%;
      max-width: 300px;
      margin-bottom: 30px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
    }

    .form-group input:focus {
      outline: none;
      border-color: #0A3D7C;
    }

    .form-group button {
      width: 50%;
      padding: 10px;
      background-color: #0A3D7C;
      color: white;
      border: none;
      border-radius: 30px;
      font-size: 1rem;
      cursor: pointer;
      justify-content: center;  
    }

    .form-group button:hover {
      background-color: #08325F;
    }

    .form-group.button-wrapper {
      display: flex;
      justify-content: center; /* Pusatkan horizontal */
      align-items: center;   /* Pusatkan vertikal */
      height: 50%;          /* Buat elemen ini memenuhi tinggi yang ada */
    }

    .notification {
        background-color: #F9F9F9; 
        border: 1px solid #E0E0E0; /* Warna border */
        padding: 8px 12px; /* Kurangi padding atas-bawah (8px) dan samping (12px) */
        border-radius: 8px; /
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        margin-bottom: 20px; 
        font-size: 0.8rem; 
        display: flex; 
        align-items: center; 
        
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="image-section">
      <img src="img/foto dashboard.jpg" alt="Gedung">
    </div>
    <div class="form-section">
      <div class="notification">
        <p>You have received the reset link for your email!</p>
      </div>
      <h2>Enter Your Email</h2>
      <p>Please enter your email</p>
      <div class="form-group">
        <input type="email" placeholder="Email">
      </div>
      <div class="form-group button-wrapper ">
        <button>Send Code</button>
      </div>
    </div>
  </div>
</body>
</html>
