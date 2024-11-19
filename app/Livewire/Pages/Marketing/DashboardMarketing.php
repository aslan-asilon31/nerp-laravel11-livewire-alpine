<?php

namespace App\Livewire\Pages\Marketing;

use Livewire\Component;

class DashboardMarketing extends Component
{
  public $activeModule;

  public function mount()
  {
    $this->activeModule = 'marketing'; // Default module
  }

  public function navigateToMarketing()
  {
    $this->activeModule = 'whr';
  }

  public function render()
  {

    return view('livewire.pages.marketing.dashboard-marketing')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.marketing.components.sidebar-marketing'),
      ]);
  }
}
