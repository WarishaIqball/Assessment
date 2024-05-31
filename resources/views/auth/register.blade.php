<!-- resources/views/layouts/app.blade.php -->
@include('auth.head')
        

        <div>
          <div id="card">
            <div id="card-content">
              <div id="card-title">
                <h2>Lets Sign Up</h2>
                <div class="underline-title"></div>
              </div>
              @include('partials.messages')
            <form action="{{route('register.perform')}}" method="POST" class="form">

                  @csrf
                  <input type="hidden" class="form-control" placeholder="Name" aria-label="Name" name="user_type" value="user">
                  <input type="hidden" class="form-control" placeholder="Name" aria-label="Name" name="role" value="2">
                  <!-- <label for="user-email" style="padding-top:13px"> -->
                    &nbsp;Name
                  <!-- </label> -->
                </br>
                <input id="user-name" class="form-content" type="name" name="name" autocomplete="on" placeholder="Enter Your Name" required /> </br>
                <div class="form-border"></div>

                <!-- <label for="user-email" style="padding-top:13px"> -->
                    &nbsp;Email
                  <!-- </label> -->
                </br>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" placeholder="Enter Your Email" required /> </br>
                <div class="form-border"></div>
                
                <!-- <label for="user-password" style="padding-top:22px"> -->
                &nbsp;Password
                  <!-- </label> -->
                  </br>
                <input id="user-password" class="form-content" type="password" name="password" placeholder="Enter Your Password" required /> </br>
                <div class="form-border"></div>
                <!-- <a href="#">
                  <legend id="forgot-pass">Forgot password?</legend>
                </a> -->
                <input id="submit-btn" type="submit" name="submit" value="Signup" />
               
              </form>
            </div>
            
          </div>
    
       
      </div>


                    </br></br>

        <!--login screen-->
    
        @include('auth.footer')
        