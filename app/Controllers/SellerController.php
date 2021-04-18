<?php namespace App\Controllers;

use App\Models\SellerModel;

class SellerController extends BaseController
{
	public function index()
	{
        $seller = new SellerModel();
        $data['sellers'] = $seller->findAll(); 
		return view('sellers/index.php', $data); 
	}
	public function create(){
		return view('sellers/create');
	}
	public function store(){
		$sellers = new SellerModel();
		
		$data = [
			
			//db_column                             //input_tag
			'name_of_org' => $this->request->getPost('name_of_org'),
			'type_of_org' => $this->request->getPost('type_of_org'),
			'name_of_owner' => $this->request->getPost('name_of_owner'),
			'mobile_no' => $this->request->getPost('mobile_no'),
			'name_of_employee' => $this->request->getPost('name_of_employee'),
			'landmark_nearby' => $this->request->getPost('landmark_nearby'),
			'city' => $this->request->getPost('city'),
			'state_district' => $this->request->getPost('state_district'),
			'state' => $this->request->getPost('state'),
			'country' => $this->request->getPost('country'),
			'latitude' => $this->request->getPost('latitude'),
			'longitude' => $this->request->getPost('longitude'),
			'formatted' => $this->request->getPost('formatted'),
			'timestamp' => $this->request->getPost('timestamp')
		];
		$sellers->save($data);
		return redirect('sellers')->with('status', "Seller Data Inserted Sucessfully!");
	}
	public function edit($id){
		$seller = new SellerModel();
		$data['seller'] = $seller->find($id);
		return view('sellers/edit', $data);
	}
	public function update($id){
		//echo "Id:".$id."<br>";
		$seller = new SellerModel();
		//$seller_item = $seller->find($id);
		//echo $seller_item['photo_of_org'];

		$data = [
			//db_column                             //input_tag
			'name_of_org' => $this->request->getPost('name_of_org'),
			'type_of_org' => $this->request->getPost('type_of_org'),
			'name_of_owner' => $this->request->getPost('name_of_owner'),
			'mobile_no' => $this->request->getPost('mobile_no'),
			'name_of_employee' => $this->request->getPost('name_of_employee')
			/* 'landmark_nearby' => $this->request->getPost('landmark_nearby'),
			'city' => $this->request->getPost('city'),
			'state_district' => $this->request->getPost('state_district'),
			'state' => $this->request->getPost('state'),
			'country' => $this->request->getPost('country'),
			'latitude' => $this->request->getPost('latitude'),
			'longitude' => $this->request->getPost('longitude'),
			'formatted' => $this->request->getPost('formatted'),
			'timestamp' => $this->request->getPost('timestamp') */
		];
		$seller->update($id, $data);
		return redirect()->to(base_url('/sellers'))->with('status','Seller Updated Successfully!');
	}
	public function delete($id = null){
		$seller = new SellerModel();
		$seller->delete($id);
		return redirect()->back()->with('status','Seller Data Deleted Successfully!');
	}
}
?>