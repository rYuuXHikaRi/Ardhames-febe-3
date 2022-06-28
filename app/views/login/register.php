<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/style2.css" />
    <title>Login Page</title>
  </head>
  <body>
    <div class="kiri">
      <div class="regis">
        <h1><strong>Registration</strong></h1>
        <p class="welcome">Silahkan isi form dibawah!</p>
        <hr />
        <form>
          <label for="email">Email</label><br />
          <input type="text" id="email" placeholder="mail@website.com" /><br />
          <label for="password">Password</label><br />
          <input type="password" id="password" placeholder="Min. 8 character" /><br />
          <label for="password">Re-type Password</label><br />
          <input type="password" id="password" placeholder="Min. 8 character" /><br />
          <div class="name">
            <div class="fname">
              <label for="fname">First Name</label><br />
              <input type="text" id="fname" placeholder="First Name" />
            </div>
            <div class="lname">
              <label for="lname">Last Name</label><br />
              <input type="text" id="lname" placeholder="Last Name" />
            </div>
          </div>
          <div class="gender">
            <p>Gender</p>
            <div class="male">
              <input type="radio" id="male" name="gender" />
              <label for="male">Male</label>
            </div>
            <div class="female">
              <input type="radio" id="female" name="gender" />
              <label for="female">Female</label>
            </div>
          </div>
          <input type="submit" value="Register" id="register" /><br />
        </form>
      </div>
    </div>
    <div class="kanan cf"></div>
  </body>
</html>
