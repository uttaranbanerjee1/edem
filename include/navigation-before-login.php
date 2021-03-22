<div class="navigation-menu text-right">


<div class="dropdown language-bar d-inline mr-4">
        <button id="dLabel" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flag-icon flag-icon-gb"></span> English
    <img src="image/chevron-down-solid.svg" class="ml-2" width="10">
        </button>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
          <li><span class="flag-icon flag-icon-gb mr-2"></span> English</li>
          <li><span class="flag-icon flag-icon-de mr-2"></span> Germen</li>
          
        </ul>
      </div>



                    <!-- <div class="dropdown d-inline mr-4">
                        <button class="btn btn-lang-drop dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-gb-eng mr-2"></span> English
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de mr-2"></span>
                                Germeny</a>

                        </div>
                    </div> -->
                    
                    
                    <a href="#" class="btn btn-link support-button" role="button">Support</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary login-button" role="button" data-toggle="modal" data-target="#login">Login</a>
                </div>


                <!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Log in to EDM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form>
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					
					<input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
				</div>
				<div class="form-group mt-3">
					
				
					<input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
          <a  class="mt-2" style="float:right;font-size:12px;"  role="button" href="#forget-password" data-toggle="modal" data-dismiss="modal">Forgot password?</a>
				</div>
				<button type="submit" class="btn btn-light-blue btn-block mt-5">Sign in</button>
				
			
			</form>
		</div>
	</div>
</div>
</div>

      </div>
   
    </div>
  </div>
</div>



   <!-- Forget Password Modal -->
   <div class="modal fade" id="forget-password" tabindex="-1" role="dialog" aria-labelledby="forget-passwordLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forget-passwordLabel">Forget Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form action="#">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
				
					<input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required>
				</div>
				
				<button type="submit" class="btn btn-light-blue btn-block mt-4">Recover Password</button>


               
				<div class="login-now text-center my-4">
					Already have an account? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Login Here</a>
				</div>
				
			
			</form>
		</div>
	</div>
</div>
</div>

      </div>
   
    </div>
  </div>
</div>
