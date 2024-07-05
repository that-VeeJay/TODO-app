<?php
include(__DIR__ . "/templates/head.php");
include(__DIR__ . "/helpers/notification.helper.php")
?>

<body>
    <div id="main">
        <div class="login-card">
            <img class="clip" src="assets/clip.png" alt="clip image" draggable="false">
            <h3 class="card-title">LOGIN</h3>
            <hr>

            <?php
            flashMessage('errors');
            ?>


            <form action="./controllers/Users.php" method="post">
                <input type="hidden" name="type" value="login">
                <!-- Email -->
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <input class="input-field" type="email" placeholder="Email" name="email">
                </div>
                <!-- Password -->
                <div class="input-container">
                    <i class="fa-solid fa-key"></i>
                    <input class="input-field" type="password" placeholder="Password" name="password">
                    <img class="toggle-icon" src="assets/eye-regular.svg" alt="Password Toggle Icon" draggable="false">
                </div>
                <!-- Forgot Password -->
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
                <!-- Button -->
                <button class="register-btn" type="submit">LOGIN</button>
                <div class="bottom-link">
                    <p>Not a member yet? <a class="login-link" href="registration.php">Register.</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>