<?php $title = "Log in";
include "header.php"; ?>

<!--breadcrumb area start-->
<div class="breadcrumb_container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <nav>
          <ul>
            <li>
              <a href="index.html">Home ></a>
            </li>
            <li>Log in </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<!--breadcrumb area end-->

<!--login page section-->

<div class="page_login_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
        <div class="login_page_form">
          <form id="login-form">
            <div class="row">
              <div class="col-12">
                <div class="input_text">
                  <label for="name">Username or email <span>*</span></label>
                  <input id="name" type="text" required>
                </div>
              </div>
              <div class="col-12">
                <div class="input_text">
                  <label for="password">Passwords <span>*</span></label>
                  <input id="password" type="password" required>
                </div>
              </div>
              <div class="col-12">
                <div class="login_submit">
                  <input class="inline" value="Login" name="Login" type="submit">
                  <label class="inline" for="rememberme">
                    <input id="rememberme" type="checkbox">
                    Remember me
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
<!--login page section end-->
<!-- your footer content -->
<?php include "footer.php"; ?>