<?php 
$event = "SELECT * FROM add_event";
$events = $crud->select($event);


?>




<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Events</h4>
                    <p>All about students like name, student id, phone, email, country, city and more</p>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>Location</th>
                                    <th>Manage by</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php 
                        $x = 1;
                       
                        
                            while($items = $events->fetch_object()){
                            ?>
                                <tr>
                                    <td><?php echo $x++ ?></td>
                                    <td><span class="list-img"><img src="upload/<?php echo $items->file ?>" alt=""></span></td>
                                    <td><?php echo $items->name ?></td>
                                    <td>
                                        <?php
                                        $d = $items->date;
                                        $y = date("d-m-Y", strtotime($d));
                                         echo $y;
                                         
                                         ?>
                                    
                                    </td>
                                    <td><?php echo $items->location ?></td>
                                    <td><?php echo $items->manage_by ?></td>
                                    <td>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td><a href="admin-edit-event.php?id=<?php echo $items->id ?>" class="ad-st-view">Edit</a></td>
                                </tr>

                                <?php } ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>