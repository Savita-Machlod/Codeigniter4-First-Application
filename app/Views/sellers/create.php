<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Add Seller Information
                        <a href="<?= base_url('sellers')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('sellers/add')?>" method="POST">
                        <div class="form-group mb-2">
                            <label><strong>Name Of Organization</strong></label>
                            <input type="text" name="name_of_org" class="form-control" placeholder="Enter The Name Of Organization" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Type Of Organization</strong></label>
                            <input type="text" name="type_of_org" class="form-control" placeholder="Enter The Type Of Organization" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Name Of Owner</strong></label>
                            <input type="text" name="name_of_owner" class="form-control" placeholder="Enter The Name Of Owner" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Owner Mob No.</strong></label>
                            <input type="text" name="mobile_no" class="form-control" placeholder="Enter Owner Mobile No." required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Name Of Employee</strong></label>
                            <input type="text" name="name_of_employee" class="form-control" placeholder="Enter Name Of Employee" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Landmark Nearby</strong></label>
                            <input type="text" name="landmark_nearby" class="form-control" placeholder="Enter Nearby Landmark" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Location</strong></label>
                            <input type="text" name="location" class="form-control" placeholder="Enter Location" required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary mt-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection()?>