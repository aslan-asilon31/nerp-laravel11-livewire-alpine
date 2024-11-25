<?php

namespace App\Livewire\Pages\Sales\SalesProductSales\components;

use Livewire\Pages\Sales\SalesProductSales\components;
use App\Models\Company;


class SidebarSales extends Component
{

  public $route = '';
  public $companies;


  public function mount()
  {
    $this->route = request()->route()->getName();
    dd($this->route); // Debug route
    $this->companies = Company::all();
  }

  public function render()
  {
    dd($this->companies);
    return view('livewire.pages.sales.components.sidebar-sales');
  }
}
