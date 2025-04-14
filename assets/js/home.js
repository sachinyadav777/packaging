// const container = document.querySelector(".award-container");
// const carausel = document.querySelector(".carausel");
// const firstReviewBoxWidth = carausel.querySelector(".review-box").offsetWidth;
// const arrowBtns = document.querySelectorAll(".button");
// const carauselChildrens = [...carausel.children];

// let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;


// // Get the number of cards that can fit in the carousel at once
// let cardPerView = Math.round(carausel.offsetWidth / firstReviewBoxWidth);

// // Insert copies of the last few cards to beginning of carousel for infinite scrolling
// carauselChildrens.slice(-cardPerView).reverse().forEach(card => {
//     carausel.insertAdjacentHTML("afterbegin", card.outerHTML);
// });

// // Insert copies of the first few cards to end of carousel for infinite scrolling
// carauselChildrens.slice(0, cardPerView).forEach(card => {
//     carausel.insertAdjacentHTML("beforeend", card.outerHTML);
// });

// // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
// carausel.classList.add("no-transition");
// carausel.scrollLeft = carausel.offsetWidth;
// carausel.classList.remove("no-transition");

// // Add event listeners for the arrow buttons to scroll the carausel left and right
// arrowBtns.forEach(btn => {
//     btn.addEventListener("click", () => {
//         carausel.scrollLeft += btn.id == "left" ? -firstReviewBoxWidth : firstReviewBoxWidth;
//     });
// });

// const dragStart = (e) => {
//     isDragging = true;
//     carausel.classList.add("dragging");
//     // Records the initial cursor and scroll position of the carousel
//     startX = e.pageX;
//     startScrollLeft = carausel.scrollLeft;
// }

// const dragging = (e) => {
//     if (!isDragging) return; // if isDragging is false return from here
//     // Updates the scroll position of the carousel based on the cursor movement
//     carausel.scrollLeft = startScrollLeft - (e.pageX - startX);
// }

// const dragStop = () => {
//     isDragging = false;
//     carausel.classList.remove("dragging");
// }

// const infiniteScroll = () => {
//     // If the carousel is at the beginning, scroll to the end
//     if (carausel.scrollLeft === 0) {
//         carausel.classList.add("no-transition");
//         carausel.scrollLeft = carausel.scrollWidth - (2 * carausel.offsetWidth);
//         carausel.classList.remove("no-transition");
//     }
//     // If the carausel is at the end, scroll to the beginning
//     else if (Math.ceil(carausel.scrollLeft) === carausel.scrollWidth - carausel.offsetWidth) {
//         carausel.classList.add("no-transition");
//         carausel.scrollLeft = carausel.offsetWidth;
//         carausel.classList.remove("no-transition");
//     }

//     // Clear existing timeout & start autoplay if mouse is not hovering over carausel
//     clearTimeout(timeoutId);
//     if (!container.matches(":hover")) autoPlay();
// }

// const autoPlay = () => {
//     if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
//     // Autoplay the carousel after every 2500 ms
//     timeoutId = setTimeout(() => carausel.scrollLeft += firstReviewBoxWidth, 2500);
// }
// autoPlay();

// carausel.addEventListener("mousedown", dragStart);
// carausel.addEventListener("mousemove", dragging);
// document.addEventListener("mouseup", dragStop);
// carausel.addEventListener("scroll", infiniteScroll);
// container.addEventListener("mouseenter", () => clearTimeout(timeoutId));
// container.addEventListener("mouseleave", autoPlay);


// cursor animation.............
let cursor = document.querySelector(".cursor");

window.addEventListener("mousemove", (e) => {
    cursor.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
})

let cursorEvent = document.querySelectorAll(".cursor-event");
// console.log(cursorEvent)
cursorEvent.forEach(element => {
    element.addEventListener("mouseenter", () => {
        cursor.classList.add("cursor-animation");
    })
    element.addEventListener("mouseleave", () => {
        cursor.classList.remove("cursor-animation");
    })
});

//timeline-section animation.....
window.addEventListener("scroll", () => {
    let animateBox = document.querySelectorAll(".timeline-container");
    let timeline = document.querySelector(".timeline");
    let reveal = document.querySelector(".timeline-section");
    let revealTop = reveal.getBoundingClientRect().top;
    let revealPoint = 150;
    let windowHeight = window.innerHeight;

    if (revealTop < windowHeight - revealPoint) {
        animateBox.forEach(element => {
            element.classList.add("active-animation");
        });
        timeline.classList.add("animate-after")

    } else {
        animateBox.forEach(element => {
            element.classList.remove("active-animation");
        });
        timeline.classList.remove("animate-after");
    }
    console.log(animateBox)
});

// function reveal(){
//     let reveals = document.querySelectorAll(".timeline-container");
//     reveals.forEach(element => {
//         let revealTop = reveals
//     });
//     console.log(reveals)
// }


