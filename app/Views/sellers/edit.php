<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Seller Information
                        <a href="<?= base_url('sellers')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5> 
                </div>
                <div class="card-body">
                    <form action="<?= base_url('seller/update/'.$seller['id']); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Name Of Organization</strong></label>
                                    <input type="text" name="name_of_org" value="<?= $seller['name_of_org'];?>" class="form-control" placeholder="Enter The Name Of Organization" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Type Of Organization</strong></label>
                                    <input type="text" name="type_of_org" value="<?= $seller['type_of_org'];?>" class="form-control" placeholder="Enter The Type Of Organization" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label><strong>Name Of Owner</strong></label>
                                        <input type="text" name="name_of_owner" value="<?= $seller['name_of_owner'];?>" class="form-control" placeholder="Enter The Name Of Owner" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label><strong>Owner Mob No.</strong></label>
                                        <input type="text" name="mobile_no" value="<?= $seller['mobile_no'];?>" class="form-control" placeholder="Enter Owner Mobile No." required>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label><strong>Name Of Employee</strong></label>
                                        <input type="text" name="name_of_employee" value="<?= $seller['name_of_employee'];?>" class="form-control" placeholder="Enter Name Of Employee" required>
                                    </div>
                                </div>
                       
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label><strong>Landmark Nearby</strong></label>
                                        <input type="text" disabled name="landmark_nearby" value="<?= $seller['landmark_nearby'];?>" class="form-control" placeholder="Enter Nearby Landmark" required>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>City</strong></label>
                                    <input type="text" name="city" disabled value="<?= $seller['city'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>State District</strong></label>
                                    <input type="text" name="state_district" disabled value="<?= $seller['state_district'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>State</strong></label>
                                    <input type="text" name="state" disabled value="<?= $seller['state'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Country</strong></label>
                                    <input type="text" name="country" disabled value="<?= $seller['country'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Latitude</strong></label>
                                    <input type="text" name="latitude" disabled value="<?= $seller['latitude'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Longitude</strong></label>
                                    <input type="text" name="longitude" disabled value="<?= $seller['longitude'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Formatted</strong></label>
                                    <input type="text" name="formatted" disabled value="<?= $seller['formatted'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label><strong>Timestamp</strong></label>
                                    <input type="text" name="timestamp" disabled value="<?= $seller['timestamp'];?>" class="form-control" placeholder="Enter City" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

<?= $this->endsection()?>