document.addEventListener("scroll", () => {
  const navbar = document.querySelector("nav, button");

  if (window.scrollY >= 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
