<?php

namespace App\Livewire\Pages\Master\Image;

use Livewire\Component;
use App\Models\Company;

class ImageIndex extends Component
{

  public $route = '';
  public string $title = 'Image';
  public string $url = '/image';


  public function mount()
  {
    $this->route = request()->route()->getName(); // Set initial route on mount
  }


  public function render()
  {
    $companies = Company::all();
    return view('livewire.pages.master.image.image-index', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ]);
  }
}
