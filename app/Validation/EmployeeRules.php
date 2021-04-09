<?php
    namespace App\Validation;
    use App\Models\EmployeeModel;

    class EmployeeRules{
        public function validateEmployee(string $str, string $fields, array $data){
            $model =new EmployeeModel();
            $employee = $model->where('email', $data['email'])
                              ->first();
            
            if(!$employee)
                return false;

            return password_verify($data['password'], $employee['password']);
                
        }
    }
?>