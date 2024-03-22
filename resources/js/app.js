import './bootstrap';
import {livewire_hot_reload} from 'virtual:livewire-hot-reload'
import 'flowbite';
import { initFlowbite } from 'flowbite';

livewire_hot_reload();

document.addEventListener('livewire:navigated', () => {
    initFlowbite();
});