(() => {
  const refs = {
    openModalBtn: document.querySelector("[data-open]"),
    closeModalBtn: document.querySelector("[data-close]"),
    modal: document.querySelector("[data-modal-menu]"),
    bodyOverFlowHidden: document.querySelector("[data-body-hidden]"),
  };

  refs.openModalBtn.addEventListener("click", toggleModal);
  refs.closeModalBtn.addEventListener("click", toggleModal);

  function toggleModal() {
    refs.modal.classList.toggle("is-open");
    refs.bodyOverFlowHidden.classList.toggle("is-hidden");
  }
})();
