<?php

namespace App\Livewire\Pages\Service;

use Livewire\Component;

class DashboardService extends Component
{
  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'service'; // Default module
  }

  public function navigateToService()
  {
    $this->activeModule = 'whr';
  }

  public function render()
  {

    return view('livewire.pages.service.dashboard-service')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.service.components.sidebar-service'),
      ]);
  }
}
