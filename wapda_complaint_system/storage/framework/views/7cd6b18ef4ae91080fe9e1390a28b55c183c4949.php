;
<?php $__env->startSection('content'); ?>
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">Sub Divisions List</h2>
                  <?php if(Session::has('message')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                  <?php endif; ?>
                  <a href="<?php echo e(route('SubDivisionAdd')); ?>" class="btn btn-primary">New Sub Division</a>
                 
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Division Name</th>
                          <th>Division Description</th>
                          <th>Division Code</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td> <?= $index++ ?>
                          <td><?php echo e($list->subdivision_name); ?></td>
                          <td> <?php echo e($list->subdivision_code); ?> </td>
                          <td> <?php echo e($list->division->division_name); ?></td>

                          <td> 
                            <form action="<?php echo e(route('DeleteSubDivision')); ?>" method="POST">
                              <?php echo e(method_field('DELETE')); ?>

                              <?php echo e(csrf_field()); ?>

                              <input type="hidden" name="id" value="<?php echo e($list->id); ?>">
                              <button type="submit" class="btn btn-danger">D</button>
                            </form>
                              <a href="<?php echo e(route('SubDivisionEdit', $list->id)); ?>" class="btn btn-info">E</a>
                            
                          </td>

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