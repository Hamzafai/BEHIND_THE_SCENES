<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="slider-container">
        <button class="slide-left">&lt;</button>
        <div class="slider-wrapper">
          <div class="slider">
            <div class="slider-item">Item 1</div>
            <div class="slider-item">Item 2</div>
            <div class="slider-item">Item 3</div>
            <div class="slider-item">Item 4</div>
            <div class="slider-item">Item 5</div>
            <div class="slider-item">Item 6</div>
          </div>
        </div>
        <button class="slide-right">&gt;</button>
      </div>
         
</body>
    <style>
 .slider-container {
  display: flex;
  align-items: center;
  width: 500px; /* Width for 3 items */
  margin: auto;
}

.slider-wrapper {
  overflow: hidden;
  width: 100%; /* Restricts visible area to 3 items */
}

.slider {
  display: flex;
  transition: transform 0.5s ease;

}

.slider-item {
  flex: 0 0 120px; /* Width of each item */
  margin: 0 10px;
  text-align: center;
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

button {
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 4px;
  padding: 10px;
  cursor: pointer;
}

button:disabled {
  background-color: #ccc;
  cursor: not-allowed;
}

    </style>
    <script>
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slideLeft = document.querySelector(".slide-left");
  const slideRight = document.querySelector(".slide-right");

  const itemWidth = document.querySelector(".slider-item").offsetWidth + 20; // Item width + margin
  const visibleItems = 3; // Number of items visible at a time
  const totalItems = slider.children.length;
  let currentIndex = 0;

  function updateSlider() {
    const offset = currentIndex * itemWidth;
    slider.style.transform = `translateX(-${offset}px)`;

  }

  slideLeft.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  });

  slideRight.addEventListener("click", () => {
    if (currentIndex < totalItems - visibleItems) {
      currentIndex++;
      updateSlider();
    }
  });

  updateSlider(); // Initialize
});


    </script>
</html>