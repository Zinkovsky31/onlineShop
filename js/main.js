function changeTab(tabIndex) {
  const tabButtons = document.querySelectorAll(".tab-button");
  const tabPanels = document.querySelectorAll(".tab-panel");

  tabButtons.forEach((button) => {
    button.classList.remove("active");
  });

  tabPanels.forEach((panel) => {
    panel.classList.remove("active");
  });

  tabButtons[tabIndex].classList.add("active");
  tabPanels[tabIndex].classList.add("active");
}

document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".slider");
  const prevButton = document.querySelector(".prev-button");
  const nextButton = document.querySelector(".next-button");
  const slides = Array.from(slider.querySelectorAll("img"));
  const slideCount = slides.length;
  let slideIndex = 0;

  prevButton.addEventListener("click", () => {
    slideIndex = (slideIndex - 1 + slideCount) % slideCount;
    slide();
  });

  nextButton.addEventListener("click", () => {
    slideIndex = (slideIndex + 1) % slideCount;
    slide();
  });

  const slide = () => {
    const imageWidth = slider.clientWidth;
    const slideOffset = -slideIndex * imageWidth;

    slider.style.transform = `translateX(${slideOffset}px)`;
  };

  slide();
});

const openPopUp = document.getElementById("open__pop__up");
const closePopUp = document.getElementById("pop__up__close");
const popUp = document.getElementById("pop__up");

openPopUp.addEventListener("click", function (e) {
  e.preventDefault();
  popUp.classList.add("active");
});

closePopUp.addEventListener("click", () => {
  popUp.classList.remove("active");
});
