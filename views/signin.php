<?php
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM member WHERE username='$username' AND password='$password'";
        $result = $connect->query($query);
        if (mysqli_num_rows($result) === 0) {
            $alert = "Username or password incorrect";
        } else {
            $result = mysqli_fetch_array($result);
            if ($result['status'] === '0') {
                $alert = "Your account is being locking or processing";
            } else {
                $_SESSION['member'] = $username;
                header("location: ?option=home");
            }
        };
    };
?>
<section>
    <h1>Signin</h1>
    <section>
        <?=
            isset($alert) ? $alert : "";
        ?>
    </section>
    <section>
        <form method="post">
            <section>
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" required>
            </section>
            <section>
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required>
            </section>
            <section>
                <input type="submit" value="Signin">
            </section>
        </form>
    </section>
</section>