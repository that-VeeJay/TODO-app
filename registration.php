<?php include(__DIR__ . "/templates/head.php"); ?>

<body>
    <div id="main">
        <div class="bg-card">
        </div>
        <div class="card">
            <img class="clip" src="assets/clip.png" alt="clip image" draggable="false">
            <h3 class="card-title">REGISTER</h3>
            <hr>
            <form action="#" method="post">
                <!-- Username -->
                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input class="input-field" type="text" placeholder="Username">
                </div>
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
                <!-- Confirm Password -->
                <div class="input-container">
                    <i class="fa-solid fa-key"></i>
                    <input class="input-field confirm-password" type="password" placeholder="Confirm Password">
                    <img class="toggle-icon-confirm" src="assets/eye-regular.svg" alt="Password Toggle Icon" draggable="false">
                </div>
                <!-- Button -->
                <button class="register-btn" type="submit">REGISTER</button>
                <div class="bottom-link">
                    <p>Already a member? <a class="login-link" href="login.php">Login here.</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>