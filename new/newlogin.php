<?php
include 'C:\xampp\htdocs\dashboard\newtheme\jobhunt\header.php';

if (isset($_SESSION['candidate_id'])) {
    header("Location: index.php");
    exit();
}

$email = $password = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $errors['password'] = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT candidate_id, candidate_name, password FROM candidate WHERE candidate_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($candidate_id, $candidate_name, $db_password);
            $stmt->fetch();
            if (password_verify($password, $db_password)) {
                $_SESSION['candidate_id'] = $candidate_id;
                $_SESSION['candidate_name'] = $candidate_name;
                header("Location: jobs.php");
                exit;
            } else {
                $errors['general'] = "Invalid email or password.";
            }
        } else {
            $errors['general'] = "Invalid email or password.";
        }

        $stmt->close();
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        margin: 0;
    }

    .login-container {
        max-width: 400px;
        padding: 40px;
        background: #fff;
        border-radius: 10px;
        /* Enhanced shadow for better aesthetics */
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.3), 0px 4px 10px rgba(0, 0, 0, 0.2);
        color: #333;
    }

    .btn-primary {
        background: #6a11cb;
        border: none;
    }

    .btn-primary:hover {
        background: #2575fc;
    }

    .form-control {
        border-radius: 20px;
    }

    .text-link {
        color: #6a11cb;
        text-decoration: none;
    }

    .text-link:hover {
        color: #2575fc;
        text-decoration: underline;
    }

    .page-container {
        display: flex;
        width: 100%;
        height: 100vh;
    }

    .left-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 20px;
        text-align: center;
        background: rgba(255, 255, 255, 0.1);
    }

    .left-section img {
        max-width: 80%;
        margin-bottom: 20px;
    }

    .right-section {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>


<div class="page-container">
    <!-- Left Section -->
    <div class="left-section">
        <!-- <img src="https://via.placeholder.com/300" alt="Illustration"> -->
        <h2>Your Career, Our Priority</h2>
        <p>Find your dream job and start your journey with us. Thousands of opportunities await you!</p>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <div class="login-container">
            <h2 class="text-center mb-4">Welcome Back!</h2>
            <p class="text-center text-muted">Login to your account and explore new opportunities</p>

            <?php if (!empty($errors['general'])) echo "<div class='alert alert-danger'>{$errors['general']}</div>"; ?>

            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" required>
                    <?php if (isset($errors['email'])) echo "<span class='text-danger'>{$errors['email']}</span>"; ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    <?php if (isset($errors['password'])) echo "<span class='text-danger'>{$errors['password']}</span>"; ?>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
            </form>

            <p class="text-center mt-3">
                Don't have an account? <a href="newsignup.php" class="text-link">Sign Up</a>
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
