<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 21/09/2018
 * Time: 5:33 PM
 */

include 'inc/header.php';
echo "<title>Login | Journlr</title>";
include 'inc/navbar.php';
?>



    <div class="container align-vertical" style="width:30%">
        <div class="form-group align-self-center ">
            <form class="text-center border border-light p-5" method="POST">
                <p class="h4 mb-4">Login</p>


                <!-- E-mail -->
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign in</button>
            </form>
        </div>
    </div>

<?php
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $query = "SELECT * FROM USERS WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {
        header("Location: login.php?response=error1");
        exit();
    } else {

        if ($row = mysqli_fetch_assoc($result)) {
            $hashedPasswordCheck = password_verify($password, $row['password']);
            if($hashedPasswordCheck == false) {
                $_SESSION['loggedin'] = false;
                header("Location: login.php?response=error2");
                exit();
            }
            elseif($hashedPasswordCheck == true) {
                $_SESSION['loggedin'] = true;
                $_SESSION['u_id'] = $row['email'];
                $_SESSION['u_first'] = $row['firstname'];
                $_SESSION['u_last'] = $row['lastname'];
                header("Location: allposts.php");
                exit();

            }
        }

    }
}

?>

<?php
include 'inc/footer.php';
?>
