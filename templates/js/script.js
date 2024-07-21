var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 15,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 2,
            spaceBetween: 0,

        },
        520: {
            slidesPerView: 3,
            spaceBetween: 15,

        },
        950: {
            slidesPerView: 5,
            spaceBetween: 15,

        },
    },
  });


const off = 10;
let l = off;
const marqueeElements = Array.from(document.querySelectorAll('.marquee span'));
const speed = 2;
const stack = [];
let pause = false;

marqueeElements.forEach(element => {
    const width = element.offsetWidth + off;
    element.style.left = `${l}px`;
    l += width;
    stack.push(element);
});

function moveMarquee() {
    if (!pause) {
        marqueeElements.forEach(element => {
            const currentLeft = parseFloat(getComputedStyle(element).left);
            const newLeft = currentLeft - speed;
            element.style.left = `${newLeft}px`;

            if (newLeft + element.offsetWidth < -130) {
                const firstElement = stack.shift();
                const lastElement = stack[stack.length - 1];
                element.style.left = `${parseFloat(getComputedStyle(lastElement).left) + lastElement.offsetWidth + off}px`;
                stack.push(element);
            }
        });
    }
    requestAnimationFrame(moveMarquee);
}

requestAnimationFrame(moveMarquee);

const marqueeContainer = document.querySelector('.marquee');
marqueeContainer.addEventListener('mouseover', () => {
    pause = true;
});
marqueeContainer.addEventListener('mouseout', () => {
    pause = false;
});



