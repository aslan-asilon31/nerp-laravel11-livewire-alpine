<?php

namespace App\Livewire\Pages\wWlcome;

use Livewire\Component;

class DashboardWelcome extends Component
{
  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'welcome'; // Default module
  }

  public function navigateToWelcome()
  {
    $this->activeModule = 'whr';
  }

  public function render()
  {

    return view('livewire.pages.welcome.dashboard-welcome')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.welcome.components.sidebar-welcome'),
      ]);
  }
}
