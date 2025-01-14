<?php

namespace App\Livewire\Pages\Hr;

use Livewire\Component;

class DashboardHr extends Component
{
  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'hr'; // Default module
  }

  public function navigateToHr()
  {
    $this->activeModule = 'hr';
  }

  public function render()
  {

    return view('livewire.pages.hr.dashboard-hr')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.hr.components.sidebar-hr'),
      ]);
  }
}
