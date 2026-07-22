import {lockBody, unlockBody} from "@/helpers/popups";

export default function initBurger() {
  document.querySelector('.burger-close').addEventListener('click', () => {
    const menu = document.querySelector<HTMLElement>('.header-menu');
    menu.classList.remove('active');
    unlockBody();
  });
  const burger = document.querySelector<HTMLElement>(".header-burger");
  burger.addEventListener('click', () => {
    const menu = document.querySelector<HTMLElement>('.header-menu');

    if (menu.classList.contains('active')) {
      document.querySelector('.burger-close').classList.remove('active');
      menu.classList.remove('active');
      burger.classList.remove('active');
      unlockBody();
    } else {
      document.querySelector('.burger-close').classList.add('active');
      menu.classList.add('active');
      burger.classList.add('active');
      lockBody();
    }
  });

  const media = window.matchMedia('(max-width: 1359px');
  const openSubmenu = (submenu: HTMLElement) => {
    if (!media.matches)
      return;
    submenu.classList.add('active');
    submenu.style.overflow = 'hidden';
    submenu.style.maxHeight = '0px';
    submenu.style.maxHeight = submenu.scrollHeight + 'px';
  }
  const closeSubmenu = (submenu: HTMLElement) => {
    if (!media.matches)
      return;
    submenu.style.maxHeight = submenu.scrollHeight + 'px';
    setTimeout(() => {
      submenu.style.overflow = 'hidden';
      submenu.style.maxHeight = '0px';
    }, 50)
    submenu.classList.remove('active');
  }

  const triggers = [
    ...document.querySelectorAll<HTMLElement>('.header-submenu-trigger'),
    ...document.querySelectorAll<HTMLElement>('.footer-list .footer-title')
  ];

  media.addEventListener('change', function () {
    if (!media.matches)
      triggers.forEach((t) => {
        const submenu = t.nextElementSibling as HTMLElement;
        closeSubmenu(submenu);
        t.classList.remove('active');
      });
  })

  triggers.forEach((t) => {
    const submenu = t.nextElementSibling as HTMLElement;
    submenu.addEventListener('transitionend', (e) => {
      if (e.target !== submenu)
        return;
      if (submenu.classList.contains('active')) {
        submenu.style.overflow = 'visible';
        submenu.style.maxHeight = null;
      } else {
        submenu.style.overflow = null;
        submenu.style.maxHeight = null;
      }
    });

    t.addEventListener('click', () => {
      if (submenu.classList.contains('active')) {
        closeSubmenu(submenu);
        t.classList.remove('active');
      } else {
        openSubmenu(submenu);
        t.classList.add('active');
      }
    });
  });
}