
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://localhost/blog/index.php">Penta core</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="http://localhost/blog/index.php">Home</a>
        </li>
        <li>
            <!--<a href="http://localhost/blog/admin/login/login.php">Login</a>-->
            <style>
                b, strong {
                    font-weight: 800;
                }
                #login-dp{
                    min-width: 275px;
                    padding: 14px 14px 0;
                    overflow:hidden;
                    background-color:rgba(255,255,255,.8);
                }
                #login-dp .help-block{
                    font-size:12px
                }
                #login-dp .bottom{
                    background-color:rgba(255,255,255,.8);
                    border-top:1px solid #ddd;
                    clear:both;
                    padding:14px;
                }
                #login-dp .social-buttons{
                    margin:12px 0
                }
                #login-dp .social-buttons a{
                    width: 49%;
                }
                #login-dp .form-group {
                    margin-bottom: 10px;
                }
                .btn-fb{
                    color: #fff;
                    background-color:#3b5998;
                }
                .btn-fb:hover{
                    color: #fff;
                    background-color:#496ebc
                }
                .btn-tw{
                    color: #fff;
                    background-color:#55acee;
                }
                .btn-tw:hover{
                    color: #fff;
                    background-color:#59b5fa;
                }
                @media(max-width:768px){
                    #login-dp{
                        background-color: inherit;
                        color: #fff;
                    }
                    #login-dp .bottom{
                        background-color: inherit;
                        border-top:0 none;
                    }
                }
            </style>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>SignIn</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Signin via
                                    <div class="social-buttons">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                    </div>
                                    or
                                    <form action="admin/login/login.php" method="post" class="form" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <input name="user_email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input name="user_password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            <div class="help-block text-right"><a href="#">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-block" value="Sign in" name="submit">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="rememberMe" value="Yes"> keep me logged-in
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <!--<div class="bottom text-center">
                                    New here ? <a href="#"><b>Join Us</b></a>
                                </div>-->
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="http://localhost/blog/about.php">About</a>
        </li>
        <li>
            <a href="http://localhost/blog/admin/login/signup.php">SignUp</a>
        </li>
        <li>
            <a href="http://localhost/blog/contact.php">Contact</a>
        </li>
    </ul>
</div>