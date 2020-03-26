<div class="card my-5">
    <h5 class="card-header">Login</h5>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">User name</label>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="password" name="password" required>
            </div>
            <hr>
            <input type="submit" class="btn btn-primary" value="Send">
        </form>
    </div>
</div>

<?php

    $login = new MvcController();
    $login ->login();

    if(isset($_GET['action']) && $_GET['action'] == 'error') {
        echo "<script>
                Swal.fire(
                  'Oops!!',
                  'Bad Credentials',
                  'error'
                )
              </script>";
    }

?>