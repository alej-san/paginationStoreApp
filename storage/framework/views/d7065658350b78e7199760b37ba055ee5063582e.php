<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="userTable">
            <thead>
                <tr>
                    <th scope="col">
                        # id 
                        <a href="<?php echo e($order['id']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['id']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        nombre
                        <a href="<?php echo e($order['nombre']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['nombre']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        descripción
                        <a href="<?php echo e($order['descripcion']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['descripcion']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        precio
                        <a href="<?php echo e($order['precio']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['precio']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        tipo
                        <a href="<?php echo e($order['tnombre']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['tnombre']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        desde
                        <a href="<?php echo e($order['desde']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['desde']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        hasta
                        <a href="<?php echo e($order['hasta']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['hasta']['desc']); ?>">&#x25be;</a>
                    </th>
                     <th scope="col">
                        astillero
                        <a href="<?php echo e($order['anombre']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['anombre']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        User
                        <a href="<?php echo e($order['uname']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['uname']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        email
                        <a href="<?php echo e($order['email']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['email']['desc']); ?>">&#x25be;</a>
                    </th>
                    <th scope="col">
                        type
                        <a href="<?php echo e($order['type']['asc']); ?>">&#x25b4;</a>
                        <a href="<?php echo e($order['type']['desc']); ?>">&#x25be;</a>
                    </th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $yates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($yate->id); ?>

                    </td>
                    <td>
                        <?php echo e($yate->title); ?>

                    </td>
                    <td>
                        <?php echo e(substr($yate->description, 0, 10)); ?>...
                    </td>
                    <td>
                        <?php echo e($yate->price); ?>

                    </td>
                    <td>
                        <?php echo e($yate->price); ?>  <!-- usando el método tipo (belongsTo) de la clase Yate -->
                    </td>
                     <td>
                        <?php echo e($yate->genre); ?> <!-- usando el método astillero (belongsTo) de la clase Yate -->
                    </td>
                    <td>
                        <?php echo e($yate->file); ?> <!-- usando el método astillero (belongsTo) de la clase Yate -->
                    </td>
                  
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
         <ul class="pagination">
         
         </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('assets/js/common.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/neomode/resources/views/yate/index2.blade.php ENDPATH**/ ?>