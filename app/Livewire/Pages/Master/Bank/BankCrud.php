<?php

namespace App\Livewire\Pages\Master\Bank;

use App\Models\Bank;
use Livewire\WithFileUploads;
use Livewire\Component;

class BankCrud extends Component
{
  use WithFileUploads;

  public $route = '';
  public string $title = 'Bank';
  public string $url = '/bank';

  public null|string $id = null;
  public string $name = '';
  public $banks = [];  // Stores all banks data

  protected $rules = [
    'name' => 'required|string|max:255',
  ];

  // Call this method to populate the banks data
  public function amount()
  {
    $this->banks = Bank::all()->mapWithKeys(function ($bank) {
      return [$bank->id => $bank->name];  // Use bank id as value and bank name as label
    });
  }

  public function store()
  {
    $this->amount();

    // Now store the new bank
    Bank::create([
      'name' => $this->name
    ]);

    session()->flash('success_notification', __('Bank created successfully.'));

    return redirect()->route('master.bank.index');
  }

  public function render()
  {
    return view('livewire.pages.master.bank.bank-crud')
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales'),
      ])->title($this->title);
  }
}
