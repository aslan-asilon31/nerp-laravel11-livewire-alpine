<?php

namespace App\Livewire\Pages\Master\Bank;

use Livewire\Component;
use App\Models\Company;

class BankIndex extends Component
{

  public $route = '';
  public string $title = 'Bank';
  public string $url = '/brank';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }

  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.master.bank.bank-index', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ])->title($this->title);
  }
}
