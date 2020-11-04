<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model
{
  protected $table = 'customers';
  protected $returnType = 'object';
  protected $allowedFields = ['first_name', 'last_name'];

  public function getCustomer($id = false)
  {
    if (!$id)
      return $this->findAll();
    return $this->find($id);
  }

  public function saveCustomer($data)
  {
    return $this->insert($data);
  }

  public function updateCustomer($id, $data)
  {
    return $this->update($id, $data);
  }

  public function deleteCustomer($id)
  {
    return $this->delete($id);
  }
}
