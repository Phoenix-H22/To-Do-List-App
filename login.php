<?php include('includes/header.php'); ?>
<?php include('db.php'); ?>
<link rel="stylesheet" href="assets/style.css">

<main>
<div class="container pt-4">
  <!--  -->
<?php if (isset($_SESSION['message'])) : ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          
        </button>
      </div>
      <?php session_unset(); ?>
<?php endif; ?>
<div class="d-flex justify-content-center align-items-center mt-5">



<div class="card">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item text-center">
      <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
    </li>
    <li class="nav-item text-center">
      <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
    </li>
   
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <form action="auth.php" method="POST">
      <div class="form px-4 pt-5">
      <input type="text" name="type" value="login" hidden>
        <input type="text" name="email" class="form-control" placeholder="Email or Phone">

        <input type="text" name="password" class="form-control" placeholder="Password">
        <button class="btn btn-dark btn-block" type="submit">Login</button>

      </div>

    </form>

    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <form action="auth.php" method="POST">

      <div class="form px-4">
      <input type="text" name="type" value="register" hidden>
        <input type="text" name="name" class="form-control" placeholder="Name">

        <input type="text" name="email" class="form-control" placeholder="Email">
        
        <input type="text" name="password" class="form-control" placeholder="Password">

        <button class="btn btn-dark btn-block" type="submit">Signup</button>
        

      </div>

    </form>

    </div>
    
   </div>




</div>
        

      </div>
</div>
</main>
<?php include('includes/footer.php'); ?>
