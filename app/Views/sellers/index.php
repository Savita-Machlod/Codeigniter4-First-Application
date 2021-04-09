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
                        <button class="btn btn-warning btn-sm" id="mybtn" onclick="CheckMyBrowser()" role="button">Add Location</button>
                        <a href="<?= base_url('sellers/create'); ?>" class="btn btn-success btn-sm float-end">Add Seller</a>
                        </div>

                       
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



        <!-- Location Form Field Starts Here-->
        
        <div class="card container  mt-4" style="display:none;" id="location">
                <div class="card-header">
                    <h5>Location Information
                        <a href="<?= base_url('sellers')?>" class="btn btn-danger btn-sm float-end">CLOSE</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST" id="myForm">
                      
                    
                        
                    </form>
                </div>
            </div>
        <!-- Location Form Field Ends Here-->
            </div>
        </div>
   </div>
  
<script> 
         function CheckMyBrowser(){
        if(navigator.geolocation){
          
           
            navigator.geolocation.watchPosition(MyCoordinates,myerror);
            
        }
        else{
            alert("Your Browser Does Not Support Geo location Api");
        }
    }
    function MyCoordinates(position){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        var myapi="https://api.opencagedata.com/geocode/v1/json?q=" + latitude + "," + longitude +"&key=87f70e732bbd44d984f351fc57d3e4cc";
       
       $.get(myapi,function(data){
         console.log(data);
         $('#location').css('display', 'block');
  document.getElementById("myForm").innerHTML +=
  
  `<div class="form-group mb-2 view">
                <label><strong>Latitude:</strong></label>
                <input type="text" value="${data.results[0].geometry.lat}" class="form-control">     
            </div>
            <div class="form-group mb-2 view">           
                <label><strong>Longitude:</strong></label>
                <input type="text" value="${data.results[0].geometry.lng}" class="form-control">
            </div>
         
            <div class="form-group mb-2 view"> 
            <label><strong>Country:</strong></label>
            <input type="text" value="${data.results[0].components.country}" class="form-control">
            </div>
          <div class="form-group mb-2 view"> 
            <label><strong>State:</strong></label>
            <input type="text" value="${data.results[0].components.state}" class="form-control">
            </div>
          <div class="form-group mb-2 view"> 
            <label><strong>City:</strong></label>
            <input type="text" value="${data.results[0].components.city}" class="form-control">
            </div>
          <div class="form-group mb-2 view"> 
            <label><strong>State District:</strong></label>
            <input type="text" value="${data.results[0].components.state_district}" class="form-control">
            </div>
          <div class="form-group mb-2 view"> 
            <label><strong>Formatted:</strong></label>
            <input type="textarea" value="${data.results[0].formatted}" class="form-control">
            </div>
          <div class="form-group mb-2 view"> 
            <label><strong>TimeStamp:</strong></label>
            <input type="text" value="${data.timestamp.created_http}" class="form-control">
            </div><hr>
  `;          
       });

    }
   
    function myerror(error){
      if(error.code=0){
        alert("UNKNOWN_ERROR");
      }
      else if (error.code=1){
        alert("PERMISSION_DENIED");
      }
      else if(error.code=2){
        alert("POSITION_UNAVAILABLE");
      }
      else if(error.code=3){
        alert("TIMEOUT");
      }
    }    	
    
    </script>
<?= $this->endsection()?>