const hamburger = document.getElementById("hamburger")
const closeBtn = document.getElementById("close")
const sidebar = document.getElementById("sidebar")

hamburger.addEventListener("click", () => {
    sidebar.classList.add("translate-x-0")
    sidebar.classList.remove("translate-x-full")
})

closeBtn.addEventListener("click", () => {
    sidebar.classList.remove("translate-x-0")
    sidebar.classList.add("translate-x-full")
})