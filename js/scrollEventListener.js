(() => {
  const refs = {
    bellowButtonHidden: document.querySelector("[data-scroll-reaction]"),
  };
  window.addEventListener("scroll", scrollEvent);
  function scrollEvent() {
    let scrollY = this.scrollY;

    scrollY > window.innerHeight &&
      refs.bellowButtonHidden.classList.add("is-scroll");
    scrollY < window.innerHeight &&
      refs.bellowButtonHidden.classList.remove("is-scroll");
  }
})();
