<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>
   <div class="container-fluid mt-4">
        <!--ALERT - SUCCESS MSG -->
        <?php if(session()->getFlashdata('status')){?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hey! </strong> <?= session()->getFlashdata('status'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
            }
        ?>
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5>Seller Information
                            <div class="btn-group float-end" role="group" aria-label="Basic mixed styles example">
                                <a href="<?= base_url('sellers/create'); ?>" class="btn btn-warning btn-sm float-end nav-link">Add Seller</a>
                            </div>
                        </h5>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-sm table-hover table-bordered border-primary table-fixed" id="users-list">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Name Of Org.</th>
                                    <th>Type Of Org.</th>
                                    <th>Name Of Owner</th>
                                    <th>Mobile No.</th>
                                    <th>Name Of Employee</th>
                                    <th>Landmark Nearby</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>State District</th>
                                    <th>Country</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Formatted</th>
                                    <th>Timestamp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($sellers): ?>
                                    <?php foreach($sellers as $row): ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name_of_org']; ?></td>
                                            <td><?php echo $row['type_of_org']; ?></td>
                                            <td><?php echo $row['name_of_owner']; ?></td>
                                            <td><?php echo $row['mobile_no']; ?></td>
                                            <td><?php echo $row['name_of_employee']; ?></td>
                                            <td><?php echo $row['landmark_nearby']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['state']; ?></td>
                                            <td><?php echo $row['state_district']; ?></td>
                                            <td><?php echo $row['country']; ?></td>
                                            <td><?php echo $row['latitude']; ?></td>
                                            <td><?php echo $row['longitude']; ?></td>
                                            <td class="text-wrap text-wrap"><?php echo $row['formatted']; ?></td>
                                            <td><?php echo $row['timestamp']; ?></td>
                                            <td>
                                               <!--  <a href="<?php //base_url('seller/edit/'.$row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?php //base_url('seller/delete/'.$row['id']); ?>" class="btn btn-danger btn-sm">Delete</a> -->


                                                <a href="<?= base_url('seller/edit/'.$row['id']); ?>" class="btn btn-primary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg>
                                                </a>
                                                <a href="<?= base_url('seller/delete/'.$row['id']); ?>" class="btn btn-danger btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

            </div> <!-- col-md-12 -->  
        </div>    <!-- row -->                            
   </div>

<?= $this->endsection()?>