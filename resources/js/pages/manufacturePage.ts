export default function manufacturePage() {
  initProcesses();
}


function initProcesses() {
  const processesWrapper = document.querySelector('.manufacture-processes') as HTMLElement;
  if (!processesWrapper)
    return;
  const processes = processesWrapper.querySelectorAll('.manufacture-process') as NodeListOf<HTMLElement>;
  processes.forEach((process) => {
    process.addEventListener('click', () => {
      processes.forEach((p) => p.classList.remove('active'));
      process.classList.add('active');
    });
  })

}