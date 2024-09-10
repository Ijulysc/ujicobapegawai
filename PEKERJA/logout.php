<?php
session_start();
session_destroy(); // Mengakhiri sesi

header('Location: login.php'); // Redirect kembali ke halaman login
exit;
