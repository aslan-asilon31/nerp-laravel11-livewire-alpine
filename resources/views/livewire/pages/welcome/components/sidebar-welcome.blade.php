<div>
  <aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <x-menu-sidebar />

    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear ">
      <!-- Sidebar Menu -->
      <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6 bg-red" x-data="{ selected: $persist('Dashboard') }">
        <!-- Menu Group -->
        <div>
          <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

          <ul class="mb-6 flex flex-col gap-1.5">
            <!-- Menu Item Dashboard -->
           

            <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                      href="index.html"
                      :class="page === 'ecommerce' && '!text-purple-300 hover:bg-purple-700'">Dashboard welcome
                    </a>

          </ul>
        </div>

        <!-- Others Group -->
        <div>
          <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">Master Data</h3>
          <ul class="mb-6 flex flex-col gap-1.5">
            <li>
              <a class="text-purple-300 hover:bg-purple-700 group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                href="chart.html" @click="selected = (selected === 'Product' ? '':'Product')"
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
                href="chart.html" @click="selected = (selected === 'Category' ? '':'Category')"
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
                href="chart.html" @click="selected = (selected === 'Brand' ? '':'Brand')"
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
                href="chart.html" @click="selected = (selected === 'Warehouse' ? '':'Warehouse')"
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
      </nav>
      <!-- Sidebar Menu -->


    </div>
  </aside>
</div>
