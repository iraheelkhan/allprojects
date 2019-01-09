;
<?php $__env->startSection('title'); ?>
  Register New Complaint
<?php $__env->stopSection(); ?>
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
          <form id="my_form" action="<?php echo e(route('store_complaint')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="c_customer_id" value="<?php echo e(Auth::user()->id); ?>">
                    <input type="hidden" name="c_tracking_no" value="<?php echo e(str_random(8)); ?>">
                   <!--  <input type="text" name="c_tracking_no" value="<?php echo e(uniqid(4)); ?>"> -->


                    <div class="form-group">
                      <label>Complaint Title</label>
                       <input id="c_title" class="form-control input-lg" name="complaint_title" type="text" placeholder="complaint_title"  value="<?php echo e(old('complaint_title')); ?>">
                    <br>
                    </div>
                    <div class="form-group">
                      <label>Complaint Description</label>
                      <textarea id="c_description" class="form-control" name="complaint_description" rows="3" placeholder="complaint_description" ><?php echo e(old('complaint_description')); ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input id="c_email" class="form-control input-lg" name="c_email" type="text" placeholder="Enter your Email" value="<?php echo e(old('c_email')); ?>">
                     
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="c_address" class="form-control" name="c_address" rows="3" placeholder="" value="<?php echo e(old('c_address')); ?>">
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="tel" id="c_phone" class="form-control" name="c_phone" rows="3" placeholder="" value="<?php echo e(old('c_phone')); ?>">
                    </div>


                    <div class="form-group">
                      <label>Select Division</label>
                      <select id="c_division" class="form-control" name="c_division">
                        <?php $__currentLoopData = $data['division']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $div): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=" <?php echo e($div->id); ?>"><?php echo e($div->division_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Select Sub Division</label>
                      <select id="c_subdivision" class="form-control" name="c_subdivision">
                        <?php $__currentLoopData = $data['subdivision']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $div): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=" <?php echo e($div->id); ?>"><?php echo e($div->subdivision_name); ?></option>
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