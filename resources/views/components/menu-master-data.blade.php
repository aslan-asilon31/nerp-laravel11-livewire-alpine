<div>
  <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">Master Data</h3>
  <ul class="mb-6 flex flex-col gap-1.5">
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.bank.index') }}" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Bank
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.company') }}" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Company
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="/" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Department
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.image') }}" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Image
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.price') }}" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Price
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.region') }}" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Region
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.product.index') }}" @click="selected = (selected === 'Product' ? '':'Product')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product') && (page === 'Product') }">
        <!-- Product Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Product
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.category') }}" @click="selected = (selected === 'Category' ? '':'Category')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Category') && (page === 'Category') }">
        <!-- Category Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Category
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="{{ route('master.brand') }}" @click="selected = (selected === 'Brand' ? '':'Brand')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Brand') && (page === 'Brand') }">
        <!-- Brand Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Brand
      </a>
    </li>
    <li>
      <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
        href="" @click="selected = (selected === 'Warehouse' ? '':'Warehouse')"
        :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Warehouse') && (page === 'Warehouse') }">
        <!-- Warehouse Icon -->
        <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M4 1H14C14.5304 1 15 1.46957 15 2V16C15 16.5304 14.5304 17 14 17H4C3.46957 17 3 16.5304 3 16V2C3 1.46957 3.46957 1 4 1Z" />
        </svg>
        Master Warehouse
      </a>
    </li>
  </ul>

</div>
