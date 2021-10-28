<a name="" id="" class="btn btn-success" href="?controller=employees&action=create" role="button">Add new employee</a>

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
                        <a href="?controller=employees&action=update&id=<?php echo $emp->id; ?>" class="btn btn-info">Edit</a>
                        <a href="?controller=employees&action=delete&id=<?php echo $emp->id; ?>" class="btn btn-danger" onclick="javascript:if(!confirm('¿Desea Eliminar?'))return false">Delete</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>