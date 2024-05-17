
<?php
function register_user($username, $password, $email, $user_type) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, email, user_type) VALUES ('$username', '$hashed_password', '$email', '$user_type')";
    return query($sql);
}

function login_user($username, $password) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = query($sql);
    $user = fetch_assoc($result);
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}
?>
