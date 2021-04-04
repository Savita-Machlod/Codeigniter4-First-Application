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
                            <a href="<?= base_url('sellers/create'); ?>" class="btn btn-info btn-sm float-end">Add Seller</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="users-list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Of Organisation</th>
                                    <th>Type Of Organisation</th>
                                    <th>Name Of Owner</th>
                                    <th>Mobile No.</th>
                                    <th>Name Of Employee</th>
                                    <th>Landmark Nearby</th>
                                    <th>Location</th>
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
                                            <td><?php echo $row['location']; ?></td>
                                            <td style="text-align:center;">
                                                <a href="<?= base_url('seller/edit/'.$row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?= base_url('seller/delete/'.$row['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>


<?= $this->endsection()?>