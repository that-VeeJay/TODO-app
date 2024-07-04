<?php include(__DIR__ . "/templates/head.php"); ?>

<body>
    <div id="main">
        <div class="login-card">
            <img class="clip" src="assets/clip.png" alt="clip image" draggable="false">
            <h3 class="card-title">LOGIN</h3>
            <hr>
            <form action="#" method="post">
                <!-- Email -->
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <input class="input-field" type="email" placeholder="Email">
                </div>
                <!-- Password -->
                <div class="input-container">
                    <i class="fa-solid fa-key"></i>
                    <input class="input-field" type="password" placeholder="Password">
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