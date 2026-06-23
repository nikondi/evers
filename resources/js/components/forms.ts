import IMask from "imask";

export default function initForms() {
  document.querySelectorAll('.form').forEach((f) => {
    const formFields = f.querySelector('.form-fields') as HTMLElement;
    const form = formFields.querySelector('form');
    const formSuccess = f.querySelector('.form-success') as HTMLElement;
    const submits = formFields.querySelectorAll('[type=submit]') as NodeListOf<HTMLInputElement | HTMLButtonElement>;

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      submits.forEach((s) => s.disabled = true);

      fetch(form.action, {
        body: new FormData(form),
        method: 'POST',
      })
        .then(() => {
          formFields.style.display = 'none';
          formSuccess.style.display = 'block';
        })
        .catch(() => alert('Что-то пошло не так'))
        .finally(() => submits.forEach((s) => s.disabled = false))
    });

    (formFields.querySelectorAll('input[type=tel]') as NodeListOf<HTMLElement>).forEach((el) => {
      IMask(el, {
        mask: '+7 (000) 000-00-00',
      });
    })
  });

  document.querySelectorAll('.labeled-file').forEach((f) => {
    const input = f.querySelector('input') as HTMLInputElement;
    const text = f.querySelector('.labeled-file__text') as HTMLInputElement;
    input.addEventListener('change', () => {
      if (input.files[0]) {
        f.classList.add('selected');
        text.innerText = input.files[0].name + ' ';

        const button = document.createElement('span');
        button.innerText = 'Открепить';
        button.style.cursor = 'pointer';
        button.style.textDecoration = 'underline';
        text.append(button);
        button.addEventListener('click', (e) => {
          e.stopPropagation();
          e.preventDefault();
          input.value = null;
          f.classList.remove('selected');
          text.innerText = 'Прикрепить файл'
        });
      }
    })
  });
}