export default function initPopups() {
  const popupButtons = document.querySelectorAll('.popup-button') as NodeListOf<HTMLElement>;
  const popups = document.querySelectorAll('.popup') as NodeListOf<HTMLElement>;
  popupButtons.forEach(button => {
    button.addEventListener('click', () => {
      const popup = document.getElementById(button.dataset.popup);
      if (popup) {
        popup.classList.add('active');
        document.body.classList.add('popup-opened');
      }
    })
  });

  popups.forEach(popup => {
    const close = () => {
      popup.classList.remove('active');
      document.body.classList.remove('popup-opened');
    };
    popup.addEventListener('click', close)
    popup.querySelector('.popup-content')?.addEventListener('click', (e) => {
      e.stopPropagation();
    });
  })
}