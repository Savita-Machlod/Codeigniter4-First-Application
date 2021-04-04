<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>
   <div class="container mt-4">

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
                        <h5>Product Information
                        <a href="<?= base_url('products/create'); ?>" class="btn btn-info btn-sm float-end">Add Product</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="users-list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Price</th>
                                    <th>Unit</th>
                                    <th>Quantity</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($products): ?>
                                    <?php foreach($products as $row): ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['unit']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['stock']; ?></td>
                                            <td style="text-align:center;">
                                                <a href="<?= base_url('product/edit/'.$row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="<?= base_url('product/delete/'.$row['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
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