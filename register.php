<!DOCTYPE html>
<html>
<head>
   <title>UAS PWEB SEM 2</title>
   <link rel="stylesheet" href="bootstrap.css" type="text/css"> 
</head>
<body>
    <nav class="navbar">
        <div class="menu">
            <div class="pweb"><label  for="">Pemograman WEB</label></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Social Media</a>
                <ul class="dropdown">
                    <li><a href="https://discord.gg/GvypmEy">Discord</a></li>
                    <li><a href="https://web.facebook.com/fachriahmad.fauzi">Facebook</a></li>
                    <li><a href="https://instagram.com/fachri_a.f">Instagram</a></li>
                    <li><a href="https://twitter.com/FachriFaf">Twitter</a></li>
                </ul>
            </li>
            <li><a href="register.html">Registration</a></li>
            <li><a href="biodata.php">About</a></li>
        </ul>
        </div>
    </nav>
    <div class="main">
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
              <div class="panel panel-primary">
                <div class="panel-heading text-center">
                  <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                  <form action="connect.php" method="post">
                    <div class="form-group">
                      <label for="firstName">First Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="firstName"
                        name="firstName"
                      />
                    </div>
                    <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="lastName"
                        name="lastName"
                      />
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <div>
                        <label for="male" class="radio-inline"
                          ><input
                            type="radio"
                            name="gender"
                            value="m"
                            id="male"
                          />Male</label
                        >
                        <label for="female" class="radio-inline"
                          ><input
                            type="radio"
                            name="gender"
                            value="f"
                            id="female"
                          />Female</label
                        >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email"
                      />
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                      />
                    </div>
                    <div class="form-group">
                      <label for="number">Phone Number</label>
                      <input
                        type="number"
                        class="form-control"
                        id="number"
                        name="number"
                      />
                    </div>
                    <input type="submit" class="btn btn-primary" />
                  </form>
                </div>
                <div class="panel-footer text-right">
                  <small>&copy; fachri2000018139</small>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
</html>