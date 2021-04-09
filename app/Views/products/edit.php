<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Product Information
                        <a href="<?= base_url('products')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('product/update/'.$product['id']); ?>" method="POST">
                        <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label><strong>Price</strong></label>
                            <input type="text" name="price" value="<?= $product['price'];?>" class="form-control" placeholder="Enter The Product Price" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Unit</strong></label>
                            <input type="text" name="unit" value="<?= $product['unit'];?>" class="form-control" placeholder="Enter The Product Unit" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Quantity</strong></label>
                            <input type="text" name="quantity" value="<?= $product['quantity'];?>" class="form-control" placeholder="Enter The Quantity" required>
                        </div>
                        <div class="form-group mb-2">
                            <label><strong>Stock</strong></label>
                            <input type="text" name="stock" value="<?= $product['stock'];?>" class="form-control" placeholder="Enter Stock" required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection()?>