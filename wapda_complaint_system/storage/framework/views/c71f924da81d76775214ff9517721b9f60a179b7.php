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
                    <p class=""><?php echo Session::get('message'); ?></p>
                  <?php endif; ?>
                  <a href="<?php echo e(route('ComplaintList')); ?>" class="btn btn-primary">Back to Complaints List</a>

                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
					  Update Status
					</button>
                  <h2 class="card-title"></h2>

                 <div class="">
                    <table class="table"> 
	                      	
	                        <tr>
	                        	<td >Complaint Title </td>
	                        	<td><?php echo e($data->c_title); ?></td>	
	                        </tr>
	                        <tr>
	                        	<td >Complaint Description </td>
	                        	<td style="width: 100px; word-wrap: break-word;"><?php echo e($data->c_description); ?></td>	
	                        </tr>
	                        <tr>
	                        	<td >Address</td>
	                        	<td><?php echo e($data->c_address); ?></td>	
	                        </tr>
	                        <tr>
	                        	<td >Phone </td>
	                        	<td><?php echo e($data->c_phone); ?></td>	
	                        </tr>
	                        <tr>
	                        	<td >Complainer Name</td>
	                        	<td>Mazhar Sahb</td>	
	                        </tr>
	                        <tr>
	                        	<td >Division </td>
	                        	<td>Division</td>	
	                        </tr>
	                        <tr>
	                        	<td >Sub Division </td>
	                        	<td>Sub Division</td>	
	                        </tr>
	                        <tr>
	                        	<td >Reference Number </td>
	                        	<td><?php echo e($data->c_reference_no); ?></td>	
	                        </tr>
	                        <tr>
	                        	<td>Status</td>
	                        	<td> 
	                        		<span style="font-size: 18px;" class="badge 
	                        		<?php if($data->status == 'solve'): ?> badge-success">
	                        			Solved
	                        		<?php endif; ?>
	                        		<?php if($data->status == "open"): ?>
	                        		badge-warning">
	                        			Opened
	                        		<?php endif; ?>	
	                        		</span></td>	
	                        </tr>
                    	
                    </table>
                </div>
                 </div>
              </div>
            </div>
            
           
          </div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Complaint Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<h2> Update the Status </h2>


        	<form action="<?php echo e(route('ComplaintStatus')); ?>" method="POST">
        		<input type="hidden" name="c_id" value="<?php echo e($data->id); ?>">
        		<?php echo e(csrf_field()); ?>

    			<div class="form-radio">
	            <label class="form-check-label">
	              <input type="radio" class="form-check-input" name="status" id="" value="open" checked=""> Opened
	            	<i class="input-helper"></i></label>
		          </div>

		          <div class="form-radio">
		            <label class="form-check-label">
		              <input type="radio" class="form-check-input" name="status" id="" value="solve" > Solved
		            <i class="input-helper"></i></label>
		          </div>

		          <div class="form-radio">
		            <label class="form-check-label">
		              <input type="radio" class="form-check-input" name="status" id="" value="2" disabled=""> Forward
		            <i class="input-helper"></i></label>
		          </div>
		        </div>	
		    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>