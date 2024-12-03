<?php

namespace App\Livewire\Pages\Master\Company;

use Livewire\Component;
use App\Models\Company;

class CompanyIndex extends Component
{

  public $route = '';
  public string $title = 'Company';
  public string $url = '/company';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }

  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.master.company.company-index', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ])->title($this->title);
  }
}
