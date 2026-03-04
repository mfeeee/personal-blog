<?php 
    session_start();

    $admin_user = 'admin';
    // This hash corresponds to 'password'
    $admin_pass_hash = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        if($user === $admin_user && password_verify($password, $admin_pass_hash)) {
            $_SESSION['logged_in'] = true;
            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid credentials!";
        }
    }

    include __DIR__ . '/../index.php';
?>

<?php if(isset($error)): ?>
    <script>
        window.onload = function() {
            openLogin();
            document.querySelector('#dynamic-content').insertAdjacentHTML('afterbegin', '<p style="color: red;"><?= $error ?></p>');
        };
    </script>
<?php endif; ?>


