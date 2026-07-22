export default function cartPage() {
  const wrapper = document.querySelector<HTMLElement>(".cart-items-wrapper");
  if (!wrapper)
    return;

  const checks = wrapper.querySelectorAll<HTMLInputElement>(".cart-check input")
  const checkAll = wrapper.querySelector<HTMLInputElement>(".cart-check-all input");

  const cartDelete = wrapper.querySelector<HTMLButtonElement>('.cart-delete');
  const cartDeleteCount = cartDelete.querySelector<HTMLSpanElement>(".cart-delete__count");

  const checkCheckAll = () => {
    let checked = 0;
    checks.forEach((check) => checked += check.checked ? 1 : 0);
    checkAll.checked = checked === checks.length;

    cartDeleteCount.innerText = checked + '';
    cartDelete.disabled = checked == 0;
    if (checked > 0)
      cartDelete.classList.add("active");
    else
      cartDelete.classList.remove("active");
  }

  checkCheckAll();
  checks.forEach(function (check) {
    check.addEventListener("change", function () {
      checkCheckAll();
    })
  });

  checkAll.addEventListener('change', function () {
    checks.forEach(function (check) {
      check.checked = checkAll.checked;
    });
    checkCheckAll();
  });
}