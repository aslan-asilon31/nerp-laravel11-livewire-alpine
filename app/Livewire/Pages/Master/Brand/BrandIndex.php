<?php

namespace App\Livewire\Pages\Master\Brand;

use Livewire\Component;
use App\Models\Brand;

class BrandIndex extends Component
{

  public $route = '';
  public string $title = 'Brand';
  public string $url = '/brand';

  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }


  public function render()
  {
    $brands = Brand::all();
    return view('livewire.pages.master.brand.brand-index', [
      'companies' => $brands,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ])->title($this->title);
  }
}
