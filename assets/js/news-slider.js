document.addEventListener("DOMContentLoaded", function () {

  const track = document.querySelector(".news-track");
  if (!track) return;

  const slides = document.querySelectorAll(".news-slide");
  const next = document.querySelector(".news-next");
  const prev = document.querySelector(".news-prev");
  const dotsContainer = document.querySelector(".news-dots");

  let index = 0;
  let timer;

  slides.forEach((_, i) => {
    const dot = document.createElement("button");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => {
      index = i;
      update();
      restart();
    });
    dotsContainer.appendChild(dot);
  });

  function update() {
    track.style.transform = `translateX(-${index * 100}%)`;
    document.querySelectorAll(".news-dots button").forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });
  }

  function auto() {
    timer = setInterval(() => {
      index = (index + 1) % slides.length;
      update();
    }, 5000);
  }

  function restart() {
    clearInterval(timer);
    auto();
  }

  next.addEventListener("click", () => {
    index = (index + 1) % slides.length;
    update();
    restart();
  });

  prev.addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    update();
    restart();
  });

  auto();
});