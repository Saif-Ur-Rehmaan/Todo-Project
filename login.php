<?php include ".inc/head.php";  ?>



<div class="container">
    <h1 class="row justify-content-center mt-5 border-bottom p-3 border-dark mb-5">login first</h1>
    
     <form action="worksattion.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">UserName</label>
      <input type="text" class=" form-control" name="username" id="" aria-describedby="emailHelpId" placeholder="e.g saif">
      <small id="emailHelpId" class="form-text text-muted">Enter your registered username </small>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">password</label>
      <input type="text" class=" form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="e.g 123">
      <small id="emailHelpId" class="form-text text-muted">Enter your registered password </small>
    </div>
    <div  style="width: 100% ;">
        <input type="submit" class="btn btn-outline-dark px-5 mx-5" name="login">
    </div>
    </form>

</div>
<?php include ".inc/foot.php";  ?>