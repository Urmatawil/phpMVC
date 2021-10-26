<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $emp) { ?>
            <tr>
                <td><?php echo $emp->id; ?></td>
                <td><?php echo $emp->name; ?></td>
                <td><?php echo $emp->email; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>