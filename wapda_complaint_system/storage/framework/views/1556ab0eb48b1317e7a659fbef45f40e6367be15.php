;
<?php $__env->startSection('title'); ?>
Complaint List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
      <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php if(Session::has('message')): ?>
                    <p class="alert alert-success"><?php echo Session::get('message'); ?></p>
                  <?php endif; ?>
                  <a href="<?php echo e(route('ComplaintAdd')); ?>" class="btn btn-primary">New Complaint</a>
                  <h2 class="card-title">Complaints List</h2>
                 
                  <div class="table-responsive">
                    <table class="table"> 
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Action</th>
                          <th>Status</th>
                          <th>Title</th>
                          <!-- <th>Description</th> -->
                          <th>Email</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Customer</th>
                          <th>Sub Divison</th>
                          <th>Reference ID</th>
                          <th>Tracking ID</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       
                        <?php $index = 1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td> <?= $index++ ?>
                          <td> 
                           <!--  if(Auth::user()->id == $list->user_id) -->
                            <form action="<?php echo e(route('DeleteComplaint')); ?>" method="POST">
                              <?php echo e(method_field('DELETE')); ?>

                              <?php echo e(csrf_field()); ?>

                              <input type="hidden" name="id" value="<?php echo e($list->id); ?>">
                              <button type="submit" class="btn btn-danger">D</button>
                            </form>
                              <a href="<?php echo e(route('ComplaintView', $list->id)); ?>" class="btn btn-info">V</a>
                              <!-- endif -->
                          </td>
                          <td>
                            <span style="font-size: 18px;" class="badge 
                              <?php if($list->status == 'solve'): ?> badge-success">
                                Solved
                              <?php endif; ?>
                              <?php if($list->status == "open"): ?>
                              badge-warning">
                                Opened
                              <?php endif; ?>  
                              </span></td>
                          <td><?php echo e($list->c_title); ?></td>
                          <!-- <td> <?php echo e($list->c_description); ?> </td> -->
                          <td> <?php echo e($list->c_email); ?></td>
                          <td> <?php echo e($list->c_address); ?></td>
                          <td> <?php echo e($list->c_phone); ?></td>
                          <td> <?php echo e($list->user->name); ?></td>
                          <td> <?php echo e($list->subdivision->subdivision_name); ?>

                          </td>
                          <td> <?php echo e($list->c_reference_no); ?></td>
                          <td> <?php echo e($list->c_tracking_no); ?></td>
                          
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>