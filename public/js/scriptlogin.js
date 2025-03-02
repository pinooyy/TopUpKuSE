// Simulasi database user yang sudah terdaftar
const registeredUsers = [
    { username: "user1", password: "pass123" },
    { username: "user2", password: "pass456" }
];

// Event listener untuk form login
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah refresh halaman
        
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        // Cek apakah username dan password cocok dengan data yang terdaftar
        let user = registeredUsers.find(user => user.username === username && user.password === password);

        if (user) {
            alert("Login berhasil! Selamat datang, " + username);
            // Redirect ke halaman lain jika diperlukan
            // window.location.href = "dashboard.html";
        } else {
            alert("Akun tidak ditemukan. Register akun terlebih dahulu.");
        }
    });
});
