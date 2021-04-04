<?php namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
	public function index()
	{
        $product = new ProductModel();
        $data['products'] = $product->findAll(); 
		return view('products/index.php', $data); 
	}
	public function create(){
		return view('products/create');
	}
	public function store(){
		$products = new ProductModel();
		$data = [
			//db_column                             //input_tag
			'price' => $this->request->getPost('price'),
			'unit' => $this->request->getPost('unit'),
			'quantity' => $this->request->getPost('quantity'),
			'stock' => $this->request->getPost('stock')
		];
		$products->save($data);
		return redirect('products')->with('status', "Product Data Inserted Sucessfully1");
	}
	public function edit($id = null){
		echo $id;
		$product = new ProductModel();
		$data['product'] = $product->find($id);
		return view('products/edit', $data);
	}
	public function update($id = null){
		//echo "i am in update";
		$product = new ProductModel();
		$data = [
			//db_column                             //input_tag
			'price' => $this->request->getPost('price'),
			'unit' => $this->request->getPost('unit'),
			'quantity' => $this->request->getPost('quantity'),
			'stock' => $this->request->getPost('stock')
		];
		$product->update($id, $data);
		return redirect()->to(base_url('products'))->with('status','Product Updated Successfully!');
	}
	public function delete($id = null){
		$product = new ProductModel();
		$product->delete($id);
		return redirect()->back()->with('status','Product Data Deleted Successfully!');
	}
}
?>