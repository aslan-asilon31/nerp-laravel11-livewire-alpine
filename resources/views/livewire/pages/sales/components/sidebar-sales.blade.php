<div>
  <aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->


    <x-dropdown-workspace :companies="$companies" />


    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear ">
      <!-- Sidebar Menu -->
      <nav class="mt-2 px-4 py-4 lg:mt-9 lg:px-6 bg-red" x-data="{ selected: $persist('Dashboard') }">
        <!-- Menu Group -->
        <div>
          <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

          <ul class="mb-6 flex flex-col gap-1.5">


            <li>
              <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                href="{{ route('sales.report') }}" @click="selected = (selected === 'Sales Report' ? '':'Sales Report')"
                :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Sales Report') && (page === 'sales-report') }"
                wire:navigate>
                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                    fill="" />
                  <path
                    d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                    fill="" />
                  <path
                    d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                    fill="" />
                  <path
                    d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                    fill="" />
                </svg>
                Dashboard Sales <x-star-off />



              </a>
            </li>

            <li>
              <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                href="{{ route('sales.report') }}" @click="selected = (selected === 'Sales Report' ? '':'Sales Report')"
                :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Sales Report') && (page === 'sales-report') }"
                wire:navigate>
                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 2L12 6V4H6V2H4V6H2V8H4V14H6V16H12V14H14V8H16V6H14V4H16V2Z" />
                </svg>
                Sales Report <x-star-off />
              </a>
            </li>

            <!-- Menu Item Best Seller -->
            {{-- <li>
              <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                href="{{ route('sales.best-seller') }}"
                @click="selected = (selected === 'Best Seller' ? '':'Best Seller')"
                :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Best Seller') && (page === 'best-seller') }">
                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 0L7 5H3L6 8L5 13L9 10L13 13L12 8L15 5H11L9 0Z" />
                </svg>
                Best Seller
              </a>
            </li> --}}

            <!-- Menu Item Product Sales -->
            <li>
              <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                href="{{ route('sales.product-sales') }}"
                @click="selected = (selected === 'Product Sales' ? '':'Product Sales')"
                :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Product Sales') && (page === 'product-sales') }"
                wire:navigate>
                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4 1H14C14.55 1 15 1.45 15 2V16C15 16.55 14.55 17 14 17H4C3.45 17 3 16.55 3 16V2C3 1.45 3.45 1 4 1Z" />
                </svg>
                Product Sales <x-star-on />
              </a>
            </li>

            <!-- Menu Item Category Sales -->
            <li>
              <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                href="{{ route('sales.category') }}"
                @click="selected = (selected === 'Category Sales' ? '':'Category Sales')"
                :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Category Sales') && (page === 'category-sales') }">
                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6 3H12C12.55 3 13 3.45 13 4V12C13 12.55 12.55 13 12 13H6C5.45 13 5 12.55 5 12V4C5 3.45 5.45 3 6 3Z" />
                </svg>
                Category Sales <x-star-off />
              </a>
            </li>


          </ul>
        </div>

        <!-- Others Group -->
        <x-menu-master-data />

      </nav>
      <!-- Sidebar Menu -->


    </div>
  </aside>
</div>
