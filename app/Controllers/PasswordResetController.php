<?php
class PasswordResetController {
    private $auth;
    
    public function __construct(Auth $auth) {
        $this->auth = $auth;
    }
    
    public function requestReset() {
        $email = $_POST['email'];
        
        try {
            $token = $this->auth->createPasswordResetToken($email);
            $resetLink = "http://localhost/password-reset?token=$token";
            
            mail($email, "Password Reset Request", 
                 "Klik link ini untuk reset password: $resetLink");
            
            return "Link akan dikirimkan lewat email jika terdaftar.";
        } catch (Exception $e) {
            return "Terjadi kesalahan saat memproses permintaan.";
        }
    }
    
    public function resetPassword() {
        $token = trim($_GET['token']);
        $newPassword = $_POST['new_password'];
        
        if ($this->auth->resetPassword($token, $newPassword)) {
            return "Password berhasil diganti.";
        }
        
        return "Token tidak valid atau kadaluarsa.";
    }
}