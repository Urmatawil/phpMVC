<div class="card">
    <div class="card-header">
        Add Employee
    </div>
    <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
                <label for="" class="form-label">ID:</label>
                <input type="text" value="<?php echo $employee->id; ?>" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID employee" readonly>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="<?php echo $employee->name; ?>" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="John Doe">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo $employee->email; ?>" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="user@email.com">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Update Employee">

        </form>

    </div>

</div>