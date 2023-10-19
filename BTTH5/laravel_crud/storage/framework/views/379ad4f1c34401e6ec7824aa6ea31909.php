<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('icons/font/bootstrap-icons.min.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a> <!--No se link ve dau ?-->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!--Cai nut nay dau roi -->
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('books.index')); ?>">Books</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="text-center bg-danger pt-3 pb-3" >List Author</h1>
    <a  href="<?php echo e(route('authors.create')); ?>"  class="btn  btn-success">Add  New Author</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
          </tr> 
        </thead>
        <tbody>
            <?php foreach($authors as $row)
                { 
            ?>
            <tr>
                <td scope="row"><?php echo "{$row->id}"; ?></td>
                <td scope="row"><?php echo "{$row->name}"; ?></td>
                <td><a href="<?php echo e(route('authors.edit', $row->id)); ?>">Edit</a></td>
                <td><a data-bs-toggle="modal" data-bs-target="#id<?php echo e($row->id); ?>" >Delete</a></td> <!--data-bs-toggle va data-bs-target ???-->
            </tr>

            <div class="modal fade" id="id<?php echo e($row->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                        Are you sure delete student have id: <?php echo e($row->id); ?>  ?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <form action="<?php echo e(route('authors.destroy', $row->id )); ?>" method="POST" >

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-primary"  href="">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </tbody>

    </table>

    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.js')); ?>"></script>
</body>
</html><?php /**PATH C:\WebEnv\nginx-1.24.0\html\laravel-crud\resources\views/Authors/index.blade.php ENDPATH**/ ?>