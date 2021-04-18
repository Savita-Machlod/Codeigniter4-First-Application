<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Add Product Information
                        <a href="<?= base_url('products')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('products/add')?>" method="POST">
                        <div class="form-group mb-2">
                            <label><strong>Price</strong></label>
                            <input type="text" name="price" class="form-control" placeholder="Enter The Price" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Unit</strong></label>
                            <input type="text" name="unit" class="form-control" placeholder="Enter The Unit" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Quantity</strong></label>
                            <input type="text" name="quantity" class="form-control" placeholder="Enter The Quantity" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Stock</strong></label>
                            <input type="text" name="stock" class="form-control" placeholder="Enter The Stock" required>
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