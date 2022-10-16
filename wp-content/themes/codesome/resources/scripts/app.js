import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';
import Swiper, { Navigation, EffectFade } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  window.Alpine = Alpine;
  Alpine.start();

  const swiper = new Swiper('.swiper', {
    modules: [Navigation, EffectFade],
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
