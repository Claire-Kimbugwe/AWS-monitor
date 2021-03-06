<?php $__env->startSection('content'); ?>
<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Stations</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Number</th>
                                                    <th>location</th>
                                                    <th>longitude</th>
                                                    <th>Latitude</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>

                                     
                                            <tbody>
                                            <?php $__currentLoopData = $stations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($station['station_name']); ?></td>
                                                    <td><?php echo e($station['station_number']); ?></td>
                                                    <td><?php echo e($station['station_location']); ?></td>
                                                    <td><?php echo e($station['longitude']); ?></td>
                                                    <td><?php echo e($station['latitude']); ?></td>
                                                    <td><button class="btn btn-icon btn-success m-b-5 edit-station-button" data-toggle="modal" id="<?php echo e(htmlspecialchars(json_encode($station))); ?>" data-target="#full-width-modal"  data-delete-link="" > <i class="fa fa-thumbs-o-up"></i> Edit </button></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> <!-- End Row -->

                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                           <div class="modal-body">
                           <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> 
                                <h3 class="panel-title btn btn-primary">Edit Station Demographics</h3> 
                            </div> 
                            <div class="panel-body"> 
                                <form id="" method="post" action="<?php echo e(url('updateStation')); ?>" style="margin-bottom: 30px;">
                                    <div>
                                    <?php echo e(csrf_field()); ?>

                                        
                                        <div class="" style="display:none">
                                                    <input class="form-control" id="station_number" name="station_number" type="text">
                                                </div>
                                        <section style="padding-bottom:30px;">
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label" for="sname">Station name</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control" id="station_name" name="station_name" type="text">
                                                </div>
                                                <label class="col-lg-2 control-label" for="snumber">Station number</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control" id="snumber" name="snumber" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="slocation">Station location</label>
                                                <div class="col-lg-4">
                                                    <input id="slocation" name="slocation" type="text" class="form-control">

                                                </div>
                                                <label class="col-lg-2 control-label " for="city" >City</label>
                                                <div class="col-lg-4">
                                                    <input id="city" name="city" type="text" class="form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="longitude">Longitude</label>
                                                <div class="col-lg-4">
                                                    <input id="longitude" name="longitude" type="number" class="form-control">
                                                </div>
                                                <label class="col-lg-2 control-label " for="latitude">Latitude</label>
                                                <div class="col-lg-4">
                                                    <input id="latitude" name="latitude" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="code">Code</label>
                                                <div class="col-lg-4">
                                                    <input id="code" name="code" type="text" class="form-control">
                                                </div>
                                                <label class="col-lg-2 control-label " for="region">Region</label>
                                                <div class="col-lg-4">
                                                    <input id="region" name="region" type="number" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="dateopened">Date opened</label>
                                                <div class="col-lg-4">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="date_opened">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <label class="col-lg-2 control-label " for="dateclosed">Date closed</label>
                                                <div class="col-lg-4">
                                                <div class="input-group">
                                                        <input type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="date_closed">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="station_type">station Type</label>
                                                <div class="col-lg-4">
                                                    <input id="station_type" name="station_type" type="number" class="form-control">
                                                </div>
                                                
                                            </div>
                                            
                                        </section>

                                        
                                        
                                    </div>
                                    <div class="modal-footer">
                                <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                            </div>
                                </form>
                            </div>  <!-- End panel-body -->
                            
                        </div> <!-- End panel -->

                    </div> <!-- end col -->

</div> <!-- End row -->
 

                                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>