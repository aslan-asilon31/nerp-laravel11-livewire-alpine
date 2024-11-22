<?php

namespace App\Livewire\Pages\Sales\SalesProductSales\Forms;

use Livewire\Form;

class ProductForm extends Form
{
  public string|null $name = '';

  public function rules()
  {
    return [
      'name' => 'required|string'
    ];
  }
}
