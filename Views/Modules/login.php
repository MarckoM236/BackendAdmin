
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="inicio">
                        <img class="align-content" src="Views/Img/Icons/logo.png" alt="" width="300px" height="300px">
                    </a>
                </div>
                <div class="login-form">
                    <form  id="loginform">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="passw">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                        </div>
                        <div>
                            <button class="btn btn-success" type="button" onclick="entrar()" name="login">Login</button>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href=""> Sign Up Here</a></p>
                        </div>
                        <div id="response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>