<?php

namespace App\Livewire\Pages\Sales\SalesProductSales;

use App\Models\Product;
use App\Models\Company;
use Livewire\WithFileUploads; 
use App\Livewire\Pages\Sales\SalesProductSales\Forms\ProductForm;
use Livewire\Component;

class SalesProductSalesCrud extends Component
{

  public $route = '';


  // #[\Livewire\Attributes\Locked]
  public string $id = '';
  public string $name = '';
  public $filepond = '';


  private  string $model = Product::class;

  public ProductForm $ProductForm;

  public function mount()
  {
    if (request()->segment(4) === 'destroy') {
      $this->destroy($this->id);
    }

    if ($this->id) {
      $this->edit();
    } else {
      $this->saving();
    }
  }


  public function saving()
  {
    if (empty($this->name)) {
      $this->create();
    }
  }

  public function saved()
  {
    $validatedForm = $this->ProductForm->validate();

    dd($this->filepond);
    $products = Product::create([
      'name' => $validatedForm['name'],
      'created_by' => auth()->user() ? auth()->user()->name : 'anonymous',
    ]);

    if ($products) {
      session()->flash('message', 'Product successfully saved!');
      return redirect('sales/product-sales');
    } else {
      session()->flash('message', 'Product Failed Save!');
      return redirect('sales/product-sales');
    }
  }

  public function create() {}

  public function history_log() {}

  public function edit()
  {
    $record = $this->model::findOrFail($this->id);
    $this->ProductForm->fill($record);
  }

  public function updating()
  {
    if ($this->id) {
      $this->updated();
    } else {
      $this->saved();
    }
  }

  public function updated()
  {
    // Temukan produk berdasarkan ID
    $product = Product::find($this->id);

    if ($product) {
      // Update produk dengan data baru
      $product->update([
        'name' => $this->ProductForm->name,
      ]);

      // Berikan pesan sukses
      session()->flash('message', 'Product successfully updated!');

      // Redirect ke halaman daftar produk
      return redirect('sales/product-sales');
    } else {
      // Jika produk tidak ditemukan
      session()->flash('message', 'Product not found!');
      return redirect('sales/product-sales');
    }
  }

  public function destroy($id)
  {
    $product = Product::find($id);

    if ($product) {
      $product->delete();
      session()->flash('message', 'Product successfully deleted!');
      return redirect('sales/product-sales');
    } else {
      session()->flash('message', 'Product not found!');
      return redirect('sales/product-sales');
    }
  }




  public function render()
  {

    $companies = Company::all();

    return view('livewire.pages.sales.SalesProductSales.sales-product-sales-crud', [
      'companies' => $companies,
    ])
      ->layout('components.layouts.app', [
        'sidebar' => view('livewire.pages.sales.components.sidebar-sales', [
          'companies' => $companies,
        ]),
      ])->title($this->title);
  }

  public string $title = 'Product Sales';
}
