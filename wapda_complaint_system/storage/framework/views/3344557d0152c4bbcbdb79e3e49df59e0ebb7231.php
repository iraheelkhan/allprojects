;
<?php $__env->startSection('content'); ?>
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">Divisions List</h2>
                  <?php if(Session::has('message')): ?>
                    <p class="alert alert-success"><?php echo Session::get('message'); ?></p>
                  <?php endif; ?>
                  <a href="<?php echo e(route('DivisionAdd')); ?>" class="btn btn-primary">New Divisions</a>
                 
                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewD', Auth::user())): ?>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Division Name</th>
                          <th>Division Description</th>
                          <th>Division Code</th>.
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td> <?= $index++ ?>
                          <td><?php echo e($list->division_name); ?></td>
                          <td> <?php echo e($list->division_description); ?> </td>
                          <td> <?php echo e($list->division_code); ?></td>
                          <td> <a href="<?php echo e(route('DivisionEdit',$list->id)); ?>" class="btn btn-info">E</a>
                              <a href="<?php echo e(route('DivisionDelete',$list->id)); ?>" class="btn btn-danger">D</a>
                          </td> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            
           
          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>