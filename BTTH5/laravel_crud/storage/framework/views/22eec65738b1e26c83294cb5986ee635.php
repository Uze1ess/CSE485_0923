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
        <form  action="<?php echo e(route('authors.update',  $author->id)); ?>"  method="POST"> 
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div  class="form-group">
                <label  for="name">Name:</label>
                <input	type="text"	name="name"	class="form-control"	value="<?php echo e($author->name); ?>"  required>
            </div>
                
            <div  class="form-group">
                <button  type="submit"  class="btn  btn-primary">Update</button>
            </div>
        </form>
            
    </div>
</div>
    
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\WebEnv\nginx-1.24.0\html\laravel-crud\resources\views/authors/edit.blade.php ENDPATH**/ ?>