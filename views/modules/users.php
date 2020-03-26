<div class="card my-5">
    <h5 class="card-header">Users - List</h5>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Pass</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $users = new MvcController();
                    $users->findAll();
                ?>
            </tbody>
        </table>
    </div>
</div>

