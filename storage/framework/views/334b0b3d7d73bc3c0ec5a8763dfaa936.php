<?php $__env->startSection('content'); ?>

<div class="p-5 page-content">
    <h2 class="mt-5">DashBoard v2</h2>
       <div class="container-fluid">
        <div class="row">
        <div class="grid-container col">
            <div class="grid-item">
            <div class="one-chart">
                <div class="icon"><button><i class="fa-solid fa-gear"></i></button></div>
                <div class="icon-letter">
                    <p>CPU Traffic</p>
                    <p>10%</p>
                </div>
             </div>
             </div>

            <div class="grid-item">
                <div class=" one-chart">
                    <div class="icon-red"><button><i class="fa-solid fa-gear"></i></button></div>
                    <div class="icon-letter">
                        <p>CPU Traffic</p>
                        <p>10%</p>
                    </div>
                 </div>
            </div>

            <div class="grid-item">
                <div class=" one-chart">
                    <div class="icon-green"><button><i class="fa-solid fa-gear"></i></button></div>
                    <div class="icon-letter">
                        <p>CPU Traffic</p>
                        <p>10%</p>
                    </div>
                 </div>
            </div>

            <div class="grid-item">
                <div class=" one-chart">
                    <div class="icon-yellow"><button><i class="fa-solid fa-gear"></i></button></div>
                    <div class="icon-letter">
                        <p>CPU Traffic</p>
                        <p>10%</p>
                    </div>
                 </div>
            </div>

             </div>
             <div class="mt-4 col">
                <table class="table">
                    <thead class="table-danger">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Admins</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Update Date</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $adminData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"></th>
                            <td><?php echo e($data->name); ?></td>
                            <td><?php echo e($data->created_at); ?></td>
                            <td><?php echo e($data->updated_at); ?></td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
             </div>
             </div>
             </div>


    <div class="container">
        <div class="row">
            <div class="login-wrap col-6">
            <div class="login-content">
                <h2 class="mb-2 text-center">Admin Data</h2>
                <div class="login-form">

                        <div class="form-group">
                            <label>Username</label>
                            <input class="au-input au-input--full " type="text" name="name" placeholder="Username"
                                value="<?php echo e(Auth::user()->name); ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full " type="email" name="email" placeholder="Email"
                                value="<?php echo e(Auth::user()->email); ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                           <img src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" class="my-4 shadow-sm img-thumbnail w-25 "/>
                        </div>
                </div>
            </div>
        </div>

        
        <div class="login-wrap col-6">
            <div class="login-content">
                <h2 class="mb-2 text-center">Change Account Information</h2>
                <div class="login-form">
                    <form action="<?php echo e(route('admin#input')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label>Username</label>
                            <input class="au-input au-input--full <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name" placeholder="Username">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" placeholder="Email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="p-3 form-group">
                            <input type='file' name="image" class="<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button class="btn btn-dark col m-b-20" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_shop_one\resources\views/admin/adminData.blade.php ENDPATH**/ ?>