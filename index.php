<?php

session_start();

$toggle = "show";
$passwordFieldType = "password";
$password = "";
$email = "";
if(isset($_SESSION['password_field_type'])){
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $passwordFieldType = $_SESSION['password_field_type'];
    $toggle =  $_SESSION['toggle'];
    // unset($_SESSION);
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive Login Form in PHP</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        height: 100vh;
      }
      main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .login-form {
        max-width: 500px;
        width: 90%;
        background: rgb(230, 234, 236);
      }
      .login-form-header {
        padding: 20px 30px;
        text-align: center;
        background-color: blue;
        color: white;
      }
      .login-form-body {
        padding: 30px 40px;
      }
      .form-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
      }
      label {
        font-size: 0.9rem;
        color: rgba(0, 0, 0, 0.8);
        font-weight: bold;
        flex-basis: 30%;
      }

      .form-control {
        flex: 1;
        padding: 6px 5px;
        font-size: 0.95rem;
        border: 1px solid grey;
        outline: none;
      }
      .input-group .form-control {
        border-right: none;
      }
      .input-group {
        display: flex;
        flex: 1;
      }
      button.toggler {
        padding: 10px 5px;
        font-size: 0.95rem;
        cursor: pointer;
        color: blue;
        background: white;
        border: 1px solid grey;
        border-left: none;
        padding-right: 10px;
      }
      button.toggler:active,
      button.toggler:focus {
        outline: none;
      }
      button.sign-in {
        display: block;
        width: 100%;
        padding: 10px 5px;
        border: none;
        background-color: rgb(174, 60, 91);
        color: ghostwhite;
        margin-top: 40px;
        font-size: 0.95rem;
      }
      @media (max-width: 768px) {
        body {
          background: gainsboro;
          color: white;
        }
        .form-group {
          flex-direction: column;
          align-items: flex-start;
          justify-content: flex-start;
        }
        .input-group,
        input {
          width: 100%;
        }
        label {
          margin-bottom: 5px;
        }
      }
    </style>
  </head>
  <body>
    <main>
      <div class="login-form">
        <div class="login-form-header">
          <h3>JCC Backend Fundamentals Class</h3>
        </div>
        <div class="login-form-body">
          <form action="process-login.php" method="POST">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                placeholder="example@email.com"
                value="<?= $email; ?>"
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <div class="input-group">
                <input
                  class="form-control"
                  type="<?= $passwordFieldType; ?>"
                  value="<?= $password; ?>"
                  name="password"
                  id="password"
                  placeholder="password"
                />
                <button
                  class="toggler"
                  type="submit"
                  name="toggler"
                  value="<?= $toggle; ?>"
                >
                  <?= $toggle; ?>
                </button>
              </div>
            </div>
            <button class="sign-in">Sign In</button>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
