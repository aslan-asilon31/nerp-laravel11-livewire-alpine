<a href="/welcome/dashboard" class="{{ request()->routeIs('welcome.*') ? 'active-page' : '' }}" wire:navigate.hover>Welcome</a>
<a href="/sales/dashboard" class="{{ request()->routeIs('sales.*') ? 'active-page' : '' }}" wire:navigate.hover>Sales</a>
<a href="/service/dashboard" class="{{ request()->routeIs('service.*') ? 'active-page' : '' }}" wire:navigate.hover>Service</a>
<a href="/warehouse/dashboard" class="{{ request()->routeIs('warehouse.*') ? 'active-page' : '' }}" wire:navigate.hover>Warehouse</a>
<a href="/hr/dashboard" class="{{ request()->routeIs('hr.*') ? 'active-page' : '' }}" wire:navigate.hover>HR</a>
<a href="/manufacture/dashboard" class="{{ request()->routeIs('manufacture.*') ? 'active-page' : '' }}" wire:navigate.hover>Manufacture</a>
<a href="/marketing/dashboard" class="{{ request()->routeIs('marketing.*') ? 'active-page' : '' }}" wire:navigate.hover>Marketing</a>
