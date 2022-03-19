import { fixViewport } from './modules/fixViewport';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// 375px以下の場合、viewportを固定
fixViewport();
