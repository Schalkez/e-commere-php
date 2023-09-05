<?php
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $query = "SELECT * FROM member WHERE username='$username'";
        $result = $connect->query($query);
        if (mysqli_num_rows($result) !== 0) {
            $alert = "Username have been used by other";
        } else {
            $password = md5($_POST['password']);
            $fullname = $_POST['fullname'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $query = 
                    "INSERT INTO member 
                        (username, password, fullname, mobile, address, email) 
                    VALUES
                        ('$username', '$password', '$fullname', '$mobile', '$address', '$email')";
            
            $connect->query($query);
            header("location: ?option=signin");
        }
    }
?>
<?= isset($alert) ? $alert : null ?>
<h1>Signup</h1>
<section>
    <form method="post" onsubmit="return handleSubmit(event)">
        <section>
            <label for="signup-name">Username:</label>
            <input id='signup-name' type="text" name='username' required value="abcd">
        </section>
        <section>
            <label for="signup-password">Password:</label>
            <input id='signup-password' type="text"  name='password' required value="123123">
        </section>
        <section>
            <label for="signup-confirm-password">Confirm password:</label>
            <input id='signup-confirm-password' type="text"  name='confirm-password' required value="123123">
        </section>
        <section>
            <label for="signup-fullname">Fullname:</label>
            <input id='signup-fullname' type="text"  name='fullname' required value="nguyen hien">
        </section>
        <section>
            <label for="signup-mobile">Mobile:</label>
            <input id='signup-mobile' type="tel"  name='mobile' required value="0123456789">
        </section>
        <section>
            <label for="signup-address">Address:</label>
            <textarea id='signup-address' name='address' required value="tan lam"></textarea>
        </section>
        <section>
            <label for="signup-email">Email:</label>
            <input id='signup-email' type="text"  name='email' value="mynameishieenf@gmail.com">
        </section>
        <section>
            <input type="submit" value="Create">
        </section>
    </form>
</section>
<script>
    const handleSubmit = () => {
        event.preventDefault();
        const passwordVal = document.querySelector('#signup-password').value;
        const confirmPasswordVal = document.querySelector('#signup-confirm-password').value;
        alert('Confirm password does not match');
        if (passwordVal !== confirmPasswordVal) return false;
    }
</script>