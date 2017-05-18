<?php require './UserBuilder.php' ?>

<div class="jumbotron">
  <h2>Please fill this form for Emily to contact you</h2>
</div>

<hr>

<div class="row">
  <div class="col-md-offset-1 col-md-10">
  
    <div style="width: 100%; text-align: center;">
      <?php 
        $builder = new UserBuilder;
        $user = $builder->buildUser($_GET, $_POST);

        if (!is_null($user))
          // If the user has submitted their name, it will display 
          echo "<h1>Hello, {$user->getFullName()}!</h1>";
        else
          echo "<h1>Hello, Stranger!</h1>";
      ?>
    </div>
  
    
    <form method="get" action="">
      <fieldset class="form-group">
        <label for="first-name">First Name</label>
        <input class="form-control" name="first-name" placeholder="First Name" required>
      </fieldset>

      <fieldset class="form-group">
        <label for="last-name">Last Name</label>
        <input class="form-control" name="last-name" placeholder="Last Name">
      </fieldset>

      <fieldset class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" placeholder="Email">
      </fieldset>

      <button class="btn btn-primary" type="submit">Submit</button>
    </form>

  </div>
</div>

<hr>
