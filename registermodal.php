<!--SignUp Form using Modal-->
<div id="id01" class="modal"> 
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
  <div class="container register">
                <div class="row" pagination-centered style="margin-top:120px;margin-left:50px;">
                    <div class="register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from a whole new experience!</p>
                    </div>
                    <div class="tab-content" id="myTabContent">
                    
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign Up</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username" id="uname"> 
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" id="pwd">
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="re-enter password" name="pwd2">
          </div>

          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
           
          </div>
        </form>
         <input value="Register" class="btn float-right login_btn" name="register_btn" id="registerbtn" onclick="register()">
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="#">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>