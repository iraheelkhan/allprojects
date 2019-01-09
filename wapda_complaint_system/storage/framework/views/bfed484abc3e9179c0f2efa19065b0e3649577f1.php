;
<?php $__env->startSection('content'); ?>
<div class="row">
      
        <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
          <form id="my_form" action="<?php echo e(route('store_subdivision')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label>Sub Division Name</label>
                       <input id="subdivision_name" class="form-control input-lg" name="subdivision_name" type="text" placeholder="complaint_title" value="<?php echo e(old('subdivision_name')); ?>">
                       <?php if($errors->has('subdivision_name')): ?> <p class="alert alert-danger"><?php echo e($errors->first('subdivision_name')); ?></p> <?php endif; ?>
                    <br>
                    </div>
                    
                    <div class="form-group">
                      <label>Sub Division Code</label>
                      <input id="subdivision_code" class="form-control input-lg" name="subdivision_code" type="text" placeholder="Enter your Code"  value="<?php echo e(old('subdivision_code')); ?>">
                      <?php if($errors->has('subdivision_code')): ?> <p class="alert alert-danger"><?php echo e($errors->first('subdivision_code')); ?></p> <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                      <label>Select Division</label>
                      <select id="fk_division_id" class="form-control" name="fk_division_id">

                         <?php $__currentLoopData = $data['division']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $div): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($div->id); ?>"><?php echo e($div->division_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </select>
                      <?php if($errors->has('fk_division_id')): ?> <p class="alert alert-danger"><?php echo e($errors->first('fk_division_id')); ?></p> <?php endif; ?>
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