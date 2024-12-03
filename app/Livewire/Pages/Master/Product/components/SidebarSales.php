<?php

namespace App\Livewire\Pages\Master\Product\Components;

use Livewire\Component;
use App\Models\Company;

class SidebarSales extends Component
{


  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.sales.components.sidebar-sales');
  }
}