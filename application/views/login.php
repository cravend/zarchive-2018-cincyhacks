<div class="container" id="first">
  <div id="buttonsContainer" style="height: 20vh; margin-top: 35vh;">
    <div class="row">
      <a class="offset-by-four two columns button button-primary" onclick="showSignup();">
        Sign up
      </a>
    </div>

    <div class="row">
      <p class="offset-by-five two columns" style="display: inline; padding: 0em 2em; text-align: center; font-size: 1.25em; margin-bottom: 0;">OR</p>
    </div>

    <div class="row">
      <a class="offset-by-four two columns button button-primary" onclick="showLogin();">
        Log in
        </a>
    </div>
  </div>
  
  <style>
    .color {
      background: initial;
      color: initial;
    }
  </style>

  <script>
    function showSignup() {
      document.getElementById("buttonsContainer").style.display = 'none';
      document.getElementById("signup").style.display = 'initial';
      document.getElementById("login").style.display = 'none';
    }

    function showLogin() {
      document.getElementById("buttonsContainer").style.display = 'none';
      document.getElementById("signup").style.display = 'none';
      document.getElementById("login").style.display = 'initial';
    }

    function goBack() {
      document.getElementById("buttonsContainer").style.display = '';
      document.getElementById("signup").style.display = 'none';
      document.getElementById("login").style.display = 'none';
    }
  </script>
  
  <style>
    #login {
      display: none;
    }

    #signup {
      display: none;
    }

    #buttonsContainer>.row>a {
      padding: 25px;
      height: 85px;
      width: 300px;
      font-size: 1.5em;
    }

  </style>
  
  
  <?php echo form_open("auth/loginVerify", "id='login'") ?>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" id="emailInput" name="email" required>
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Password</label>
      <input class="u-full-width" type="password" id="passwordInput" name="password" required>
    </div>
  </div>
  <input class="button-primary" type="submit" value="Log in">
  <button class="button" onclick="goBack();">
      Go Back
    </button>
  </form>

  <?php echo form_open("auth/signup", "id='signup'") ?>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" id="emailInput" name="email" required>
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Password</label>
      <input class="u-full-width" type="password" id="passwordInput" name="password" required>
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">First Name</label>
      <input class="u-full-width" type="text" id="firstNameInput" name="firstName" required>
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Last Name</label>
      <input class="u-full-width" type="text" id="lastNameInput" name="lastName" required>
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Birthday</label>
      <input class="u-full-width" type="date" id="birthdayInput" name="birthday" required>
    </div>
    <div class="six columns">
      <label for="type">Type</label>
      <select class="u-full-width" id="typeInput" name="type" required>
          <option value="" selected disabled>Select Below</option>
          <option value="host">Host</option>
          <option value="guest">Guest</option>
        </select>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <label for="exampleEmailInput">Profile Picture URL</label>
      <input class="u-full-width" type="text" id="imageInput" name="image" required>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <label for="exampleEmailInput">Bio</label>
      <textarea class="u-full-width" type="text" id="bioInput" name="bio" required style="resize: vertical;">
         </textarea>
    </div>
  </div>
  <input class="button-primary" type="submit" value="Sign up">
  <button class="button" onclick="goBack();">
      Go Back
    </button>
  </form>
</div>