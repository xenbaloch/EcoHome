<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: home.html'); }

//process login form if submitted
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($user->login($username,$password)){
        $_SESSION['username'] = $username;
        header('Location: home.html');
        exit;

    } else {
        $error[] = 'Wrong username or password or your account has not been activated.';
    }

}//end if submit

//define page title
$title = 'Login';

//include header template
require('layout/header.php');
?>


    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" action="" autocomplete="off">
                    <h2>Please Login</h2>
                    <p><a href='./'>Back to Registration</a></p>
                    <hr>

                    <?php
                    //check for any errors
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<p class="bg-danger">'.$error.'</p>';
                        }
                    }

                    if(isset($_GET['action'])){

                        //check the action
                        switch ($_GET['action']) {
                            case 'active':
                                echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
                                break;
                            case 'reset':
                                echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
                                break;
                            case 'resetAccount':
                                echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
                                break;
                        }

                    }


                    ?>

                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                    </div>

                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <a href='reset.php'>Forgot your Password?</a>
                        </div>
                    </div>

                    <hr>
                    <label><button type="submit" name="submit" value="submit" class="button">Login</button></label>
                </form>
            </div>
        </div>



    </div>


<?php
//include header template
require('layout/footer.php');
?>
<?php
/**
 * Created by PhpStorm.
 * User: Zain Baloch
 * Date: 10/10/2017
 * Time: 4:15 PM
 */