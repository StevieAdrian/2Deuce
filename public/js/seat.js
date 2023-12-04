const container = document.querySelector(".main");

container.addEventListener("click", (e) => {
    e.target.classList.toggle("select");
});
