import './bootstrap';
// resources/js/app.js

import './../../vendor/power-components/livewire-powergrid/dist/tailwind.css'
import { Livewire } from 'livewire';
import Alpine from 'alpinejs';
import * as FilePond from 'filepond';

Livewire.start();
Alpine.start();
window.FilePond = FilePond;