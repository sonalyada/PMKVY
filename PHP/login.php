<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f1f1f1;
      }

      .container {
        width: 300px;
        padding: 20px;
        margin: 100px auto;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      h2 {
        text-align: center;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      input[type="submit"] {
        width: 100%;
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      .signup-link {
        text-align: center;
        margin-top: 16px;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h2>Login</h2>
      <form form="login_form" onsubmit="submitForm()">
        <input type="text" name="username" placeholder="Username" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <input type="submit" value="Login" />
      </form>
      <div class="signup-link">
        <a href="signup.html">Create an account</a>
      </div>
      <script type="text/javascript">
        function submitForm() {
          alert("Login Succesful");
        }
        function validation () {
          var id=document.f1.user.value;
          var ps=document.f1.pass.value;
          if (id.length==""&&ps.length=="") {
            alert ("Username and password firlds are empty.");
            return false;
          } else {
            if (id.length=="") {
              alert ("Username is empty.");
              return false;
            } if (ps.length=="") {
              alert("password is empty.");
              return false;
            }
          }
        }
      </script>
    </div>
  </body>
</html>
