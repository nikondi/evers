export default function selectTabs() {
  const selectTabs = document.querySelectorAll<HTMLDivElement>('.select-tabs');
  selectTabs.forEach((wrapper) => {
    const trigger = wrapper.querySelector<HTMLButtonElement>('.select-tab-current');
    trigger.addEventListener('click', () => wrapper.classList.toggle('active'));

    const options = wrapper.querySelectorAll<HTMLElement>('.select-tab');
    options.forEach((option) => {
      option.addEventListener('click', () => trigger.innerText = option.innerText);
      wrapper.classList.remove('active');
    })
  });

  document.addEventListener("click", function (e) {
    selectTabs.forEach((wrapper) => {
      const trigger = wrapper.querySelector<HTMLButtonElement>('.select-tab-current');
      if (e.target !== trigger || !trigger.contains(e.target as HTMLElement)) {
        wrapper.classList.remove('active');
      }
    })
  });
}

