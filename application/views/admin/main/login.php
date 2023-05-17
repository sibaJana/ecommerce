<style>
   .container {
  max-width: 500px;
  margin: auto;
}

.login-form {
  background-color: #f9f9f9;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.login-form label {
  font-weight: 600;
  color: #555;
  display: block;
  margin-bottom: 5px;
}

.login-form input[type="email"],
.login-form input[type="password"] {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  margin-bottom: 20px;
  font-size: 16px;
  color: #555;
}

.login-form button[type="submit"] {
  background-color: #6c757d;
  color: #fff;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: 600;
  border: none;
  transition: background-color 0.2s ease-in-out;
}

.login-form button[type="submit"]:hover {
  background-color: #343a40;
  cursor: pointer;
}


</style>
<div class="sufee-login d-flex align-content-center flex-wrap">
  <div class="container">
    <div class="login-content">
      <h3 align="center" ><i class="fa fa-align-center" aria-hidden="true">Admin Login</i></h3>
      <div class="login-form mt-150">
        <form>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" id="email_admin" class="form-control"  placeholder="Email" autocomplete="new-password">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" id="password_admin" class="form-control"  placeholder="Password" autocomplete="new-password">
          </div>
          <!-- <button type="button" id="login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button> -->
          <input type="button" value="Sign in" id="login_admin" class="btn btn-success btn-flat m-b-30 m-t-30">
        </form>
      </div>
    </div>
  </div>
</div>
