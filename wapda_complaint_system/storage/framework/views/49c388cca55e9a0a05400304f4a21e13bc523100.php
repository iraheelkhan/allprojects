;
<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('adminonly')): ?>
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">Cities List</h2>
                  <?php if(Session::has('message')): ?>
                    <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                  <?php endif; ?>
                  <a href="<?php echo e(route('CityAdd')); ?>" class="btn btn-primary">New City</a>
                 
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>City Name</th>
                          <th>City Description</th>
                          <th>City Code</th>
                          <th>Province</th>
                          <th>Action</th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td> <?= $index++ ?>
                          <td> <?php echo e($list->city_name); ?> </td>
                          <td> <?php echo e($list->city_description); ?> </td>
                          <td> <?php echo e($list->city_code); ?> </td>
                          <td> <?php echo e($list->province->province_name); ?> </td>
                          <td> <a href="" class="btn btn-info">E</a>
                              <a href="<?php echo e(route('CityDelete',$list->id)); ?>" class="btn btn-danger">D</a>
                          </td> 
                          
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                 
                </div>
              </div>
            </div>
            
           
          </div>
 <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>