<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('icons/font/bootstrap-icons.min.css')); ?>">
</head>
<body>
<div class="container">
    <div class="row">
        <form action="<?php echo e(route('authors.store')); ?>"  method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name:</label>
              <input type="text"  name="name" class="form-control">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Bio:</label>
              <textarea  name="bio"  class="form-control"  required></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
    
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\WebEnv\nginx-1.24.0\html\laravel-crud\resources\views/Authors/create.blade.php ENDPATH**/ ?>