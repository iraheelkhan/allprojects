;
<?php $__env->startSection('content'); ?>
<div class="row">
      
        <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                  <?php endif; ?>
          <form id="my_form" action="<?php echo e(route('store_city')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label>City Name</label>
                       <input id="city_name" class="form-control input-lg" name="city_name" type="text" placeholder="complaint_title">
                    <br>
                    </div>
                    <div class="form-group">
                      <label>City Description</label>
                      <textarea id="city_description" class="form-control" name="city_description" rows="3" placeholder="complaint_description"></textarea>
                    </div>
                    <div class="form-group">
                      <label>City Code</label>
                      <input id="city_code" class="form-control input-lg" name="city_code" type="text" placeholder="Enter your Email">
                     
                    </div>
                    


                    <div class="form-group">
                      <label>Select Province</label>
                      <select id="fk_province_id" class="form-control" name="fk_province_id">
                        <?php $__currentLoopData = $data['province']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <option value="<?php echo e($pro->id); ?>"><?php echo e($pro->province_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        
                      </select>
                    </div>
                     

                    <div class="box-footer">
                    <input id="btn_submit" type="submit" class="btn btn-primary" value="submit">
                  </div>

                    </form>
            
            </div>
          </div>
           </div>
          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>