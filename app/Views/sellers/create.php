<?= $this->extend('layouts/frontend.php')?>
<?= $this->section('content')?>

<div class="container mt-4">
    <div class="row justify-content-center">
    <div class="col-md-8 pt-4" style="background: #06beb6;">
   
  <div class="card">
                <div class="card-header">
                    <h5>Add Seller Information
                        <a href="<?= base_url('sellers')?>" class="btn btn-danger btn-sm float-end">BACK</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form id="myForm" action="<?= base_url('sellers/add')?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-2">
                              <label><strong>Name Of Organization</strong></label>
                              <input type="text" name="name_of_org" class="form-control" placeholder="Enter The Name Of Organization" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-2">
                              <label><strong>Type Of Organization</strong></label>
                              <input type="text" name="type_of_org" class="form-control" placeholder="Enter The Type Of Organization" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label><strong>Name Of Owner</strong></label>
                                <input type="text" name="name_of_owner" class="form-control" placeholder="Enter The Name Of Owner" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group mb-2">
                              <label><strong>Owner Mob No.</strong></label>
                              <input type="text" name="mobile_no" class="form-control" placeholder="Enter Owner Mobile No." required>
                          </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-2">
                              <label><strong>Name Of Employee</strong></label>
                              <input type="text" name="name_of_employee" class="form-control" placeholder="Enter Name Of Employee" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-2">
                              <label><strong>Landmark Nearby</strong></label>
                              <input type="text" name="landmark_nearby" class="form-control" placeholder="Enter Nearby Landmark" required>
                          </div>
                        </div>
                    </div>
                    <div style="display:none;" id="location">
              
                                   
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label><strong>Take a Picture</strong></label>
                                <div id="my_camera" style="width: 320px; height: 240px; border: 1px solid black;"></div>
                                <input type=button value="Take Snapshot" class="btn btn-info mt-2" onClick="take_snapshot()">
                                <input type=button value="Save Snapshot" class="btn btn-primary mt-2" onClick="saveSnap()">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label><strong>Preview</strong></label>
                                <div id="results" style="width: 320px; height: 240px; border: 1px dotted black;"></div>
                            </div>  
                        </div>
                    </div>
                        </div>  
                    </div>
                                  
                    </form>
                </div>
            </div>

    </div> 

    </div>
</div>

<script> 
    window.onload = function(){
           
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
  
  ` <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-2">
                <label><strong>Latitude:</strong></label>
                <input type="text"  name="latitude" value="${data.results[0].geometry.lat}" class="form-control">     
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-2">           
                <label><strong>Longitude:</strong></label>
                <input type="text"  name="longitude" value="${data.results[0].geometry.lng}" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="form-group mb-2"> 
                <label><strong>Country:</strong></label>
                <input type="text"  name="country" value="${data.results[0].components.country}" class="form-control">
            </div>
        </div>
        <div class="col-md-6"> 
            <div class="form-group mb-2"> 
                <label><strong>State:</strong></label>
                <input type="text"  name="state" value="${data.results[0].components.state}" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="form-group mb-2"> 
              <label><strong>City:</strong></label>
              <input type="text"  name="city" value="${data.results[0].components.town}" class="form-control">
          </div>
        </div>
        <div class="col-md-6">    
            <div class="form-group mb-2"> 
                <label><strong>State District:</strong></label>
                <input type="text"  name="state_district" value="${data.results[0].components.state_district}" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-2"> 
                <label><strong>Formatted:</strong></label>
                <textarea type="textarea"  name="formatted" class="form-control">${data.results[0].formatted}</textarea>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group mb-2"> 
              <label><strong>TimeStamp:</strong></label>
              <input type="text"  name="timestamp" value="${data.timestamp.created_http}" class="form-control">
          </div>
        </div>
    </div>
          <hr>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-primary mt-2">Save</button>
            </div>
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
<!-- /* WebCam Script */ -->
<script src="<?= base_url('js/webcam.min.js');?>"></script>
<script language="JavaScript">
 Webcam.set({
  width: 320,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );


 function take_snapshot() {
   
 // take snapshot and get image data
 Webcam.snap( function(data_uri) {
  // display results in page
  document.getElementById('results').innerHTML = 
   '<img id="imageprev" src="'+data_uri+'"/>';
  } );

  Webcam.reset();
}
function saveSnap(){
 // Get base64 value from <img id='imageprev'> source
 var base64image = document.getElementById("imageprev").src;

 Webcam.upload( base64image, 'saveimage.php', function(code, text) {
  console.log('Save successfully');
  console.log(text);
 });

}
</script>
<!-- /* WebCam Script */ -->
<?= $this->endsection()?>