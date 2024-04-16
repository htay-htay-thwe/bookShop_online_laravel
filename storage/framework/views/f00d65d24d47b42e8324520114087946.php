<?php $__env->startSection('content'); ?>
<div class="p-5 page-content container-fluid" style="margin-top:500px;">
        <div class="row">
            <div class="mt-4 login-wrap col-5">
                <div class="shadow-lg login-content">
                    <h2 class="mb-2 text-center">Input Data about Post</h2>
                    <div class="login-form">
                         <form method="post" action="<?php echo e(route('post#create')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Book Name</label>
                            <input class="au-input au-input--full <?php $__errorArgs = ['bookName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="bookName" placeholder="Book Name" >
                            <?php $__errorArgs = ['bookName'];
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
                          <label>Genre</label>
                          <select name="genre" type='text' class="form-select au-input au-input--full" aria-label="Default select example">
                            <option value="" selected>Choose Genre</option>
                            <?php $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($gen->genre); ?>"><?php echo e($gen->genre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>

                        <div class="form-group">
                            <label>Writer Name</label>
                            <input class="au-input au-input--full <?php $__errorArgs = ['writerName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="writerName" placeholder="Writer Name" >
                            <?php $__errorArgs = ['writerName'];
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
                         <label>Number</label>
                          <input class="au-input au-input--full <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="number" placeholder="Number">
                          <?php $__errorArgs = ['number'];
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
                            <label>Price</label>
                             <input class="au-input au-input--full <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="price" placeholder="Number">
                             <?php $__errorArgs = ['price'];
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
                            <label>Book Image</label>
                            <input type="file" name="bookImage" class="<?php $__errorArgs = ['bookImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['bookImage'];
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
                            <label>Description</label>
                            <textarea type="scroll" class="au-input au-input--full <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" cols="7" rows="5" type="text" name="description" placeholder="Description"></textarea>
                            <?php $__errorArgs = ['description'];
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
                        <button class="mt-3 btn btn-dark offset-4 col-4" type="submit">Create</button>
                         </form>
                        </div>
                </div>
            </div>

            <div class="p-5 col-7">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>

                                    <div class="card-image">
                                        <img src="<?php echo e(asset('storage/'.$data->bookImage)); ?>" alt="" class="card-img"/>
                                    </div>
                                </div>
                                <div class="card-content">
                                   <h2 class="name"><?php echo e($data->bookName); ?> - <span style="color:brown;">ID <?php echo e($data->id); ?></span></h2>
                                  <p class="mt-3 mb-3 description">စာအုပ်အရေအတွက် - <?php echo e($data->number); ?> </p>
                                  <div style="display: flex;gap:1rem;">
                                    <a href="<?php echo e(route('post#delete',$data->id)); ?>"><span class="p-2 btn btn-danger"><i class="fa-solid fa-trash-can"></i></span></a>
                                    <a href="<?php echo e(route('post#editPage',$data->id)); ?>"><span class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></span></a>
                                </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                   </div>

    <div class="mt-5 shadow-lg login-content">
        <h2 class="mb-2 text-center">Genre Create Page</h2>
        <div class="login-form">
             <form method="post" action="<?php echo e(route('genre#create')); ?>">
                <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Genre</label>
                <input class="au-input au-input--full <?php $__errorArgs = ['genre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="genre" placeholder="Genre" >
                <?php $__errorArgs = ['genre'];
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
            <button class="mt-3 btn btn-dark offset-4 col-4" type="submit">Create</button>
             </form>
            </div>
            </div>
            </div>
    </div>
        </div>
    <?php $__env->stopSection(); ?>
<script>
    window.onload = function () {
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 1,
        centeredSlides: false,
        spaceBetween: 30,
        grabCursor: true,
        loop:true,
        fade:true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets:true,
        },
        breakpoints:{
            0: {
                slidesPerView:1,
            },
            550:{
                slidesPerView:1,
            },
            855: {
                slidesPerView:1,
            },
            950: {
                slidesPerView:1,
            },
        },
      });
    }
</script>


<?php echo $__env->make('home.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_shop_one\resources\views/post/postCreate.blade.php ENDPATH**/ ?>