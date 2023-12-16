// Burger

const burger = document.querySelector("#burger"); //cari element yang id nya burger
const navMenu = document.querySelector("#nav-menu"); // cari element yang id nyanav-menu

burger.addEventListener("click", function () {
    burger.classList.toggle("burger-active");
    navMenu.classList.toggle("hidden");
});

currentSlideID = 1;

sliderElement = document.getElementById("slider");
totalSlides = sliderElement.childElementCount;
autoSlideInterval = 3000; // 3detik
autoSlideTimer = null;

function next() {
    currentSlideID = currentSlideID < totalSlides ? currentSlideID + 1 : 1;
    showSlide();
}

function prev() {
    currentSlideID = currentSlideID > 1 ? currentSlideID - 1 : totalSlides;
    showSlide();
}

function showSlide() {
    slides = document.getElementById("slider").getElementsByTagName("li");
    for (let index = 0; index < totalSlides; index++) {
        const element = slides[index];
        if (currentSlideID === index + 1) {
            element.classList.remove("hidden");
        } else {
            element.classList.add("hidden");
        }
    }
}

function startAutoSlide() {
    autoSlideTimer = setInterval(next, autoSlideInterval);
}

function stopAutoSlide() {
    clearInterval(autoSlideTimer);
}

// Mulai slide otomatis saat halaman dimuat
startAutoSlide();
