document.addEventListener("DOMContentLoaded", () => {
  // hamBurger menu and left-nav toggle
  const body = document.querySelector("body");
  const hamBurger = document.getElementById("hamBurger");
  const sidebar = document.getElementById("sidebar");

  hamBurger.addEventListener("click", () => {
    body.classList.toggle("pulled");

    hamBurger.classList.toggle("clicked");
    hamBurger.setAttribute(
      "aria-expanded",
      hamBurger.classList.contains("clicked"),
    );

    sidebar.classList.toggle("pulled");
  });
});
