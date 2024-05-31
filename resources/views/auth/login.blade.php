<!-- resources/views/layouts/app.blade.php -->
@include('auth.head')
        

<div>
                  <div style="text-align:center;">
               
                    </div>
                      <div id="card">
                      
                        <div id="card-content">
                          <div id="card-title">
                            <h2>LOGIN</h2>
                            <div class="underline-title"></div>
                           
                          </div>
                        <form action="{{ route('login.perform') }}" method="POST" class="form">

                              @csrf
                              
                            <!-- <label for="user-email" style="padding-top:13px">
                                &nbsp;Email
                              </label> -->
                              Email   
                            </br>
                            <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" placeholder="Enter Your Email" required />
                            <div class="form-border"></div>
                            </br></br>
                            <!-- <label for="user-password" style="padding-top:22px">&nbsp;Password
                              </label> -->
                              Password
                              </br>
                            <input id="user-password" class="form-content" type="password" name="password" placeholder="Enter Your Password" required />
                            <div class="form-border"></div>
                            <!-- <a href="#">
                              <legend id="forgot-pass">Forgot password?</legend>
                            </a> -->
                            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                            <a href="{{route('register')}}" id="signup">Don't have an account? Sign up</a>
                          </form>
                        </div>
                        
                      </div>
                   
                      
                  </div>


                    </br></br>

        <!--login screen-->
    
        @include('auth.footer')
        