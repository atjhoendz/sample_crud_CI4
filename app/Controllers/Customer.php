<?php

namespace App\Controllers;

use App\Models\Customer as ModelsCustomer;

class Customer extends BaseController
{
  protected $custModel;

  public function __construct()
  {
    $this->custModel = new ModelsCustomer();
  }

  public function index()
  {
    $data['customers'] = $this->custModel->getCustomer();
    return view('customer_view', $data);
  }

  public function add()
  {
    return view('add_customer_view');
  }

  public function save()
  {
    $data = array(
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name')
    );
    $this->custModel->saveCustomer($data);

    return redirect()->to('/customer');
  }

  public function edit($id)
  {
    $data['customer'] = $this->custModel->getCustomer($id);
    return view('edit_customer_view', $data);
  }

  public function update($id)
  {
    $data = array(
      'first_name' => $this->request->getPost('first_name'),
      'last_name' => $this->request->getPost('last_name')
    );

    $this->custModel->updateCustomer($id, $data);
    return redirect()->to('/customer');
  }

  public function delete($id)
  {
    $this->custModel->deleteCustomer($id);
    return redirect()->to('/customer');
  }
}
