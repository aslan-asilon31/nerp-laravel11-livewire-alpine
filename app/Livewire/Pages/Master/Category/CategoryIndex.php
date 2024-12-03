<?php

namespace App\Livewire\Pages\Master\Category;

use Livewire\Component;
use App\Models\Company;

class CategoryIndex extends Component
{

  public $route = '';
  public string $title = 'Category';
  public string $url = '/category';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }

  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.master.category.category-index', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ])->title($this->title);
  }
}
