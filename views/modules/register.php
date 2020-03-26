<div class="card my-5">
    <h5 class="card-header">New User</h5>
    <div class="card-body">
        <form action="" method="post">
            <div class="from-group">
                <label for="username">User name</label>
                <input type="text" class="form-control" placeholder="Username" id="usernameNew" name="usernameNew" required>
            </div>
            <div class="from-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="password" id="passwordNew" name="passwordNew" required>
            </div>
            <div class="from-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="email" id="emailNew" name="emailNew" required>
            </div>
            <hr>
            <input type="submit" class="btn btn-primary" value="Send">
        </form>
    </div>
</div>

<?php
    $row = new MvcController();
    $row->createUser();

    if(isset($_GET['action']) && $_GET['action'] == 'ok') {
        echo "<script>
                Swal.fire(
                  'Success',
                  'User create successfully',
                  'success'
                )
              </script>";
    }
?>