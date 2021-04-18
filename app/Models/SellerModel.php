<?php 

    namespace App\Models;
    
    use CodeIgniter\Model;

    class SellerModel extends Model
    {
        protected $table = 'sellers';
        protected $primaryKey = 'id';
        protected $allowedFields = [
            'name_of_org',
            'type_of_org',
            'name_of_owner',
            'mobile_no',
            'name_of_employee',
            'landmark_nearby',
            'city',
            'state_district',
            'state',
            'country',
            'latitude',
            'longitude',
            'formatted',
            'timestamp'
        ];
    }  
?>