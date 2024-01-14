// renovation grids expand logic when width < md
document.addEventListener('DOMContentLoaded', function () {
    let renovationContainers = document.querySelectorAll('.renovation-container');
    let currentOpen = renovationContainers[0];

    renovationContainers.forEach(function (container, index) {
        if (index === 0 && window.innerWidth < 768) {
            toggleContent(container);
        }

        container.addEventListener('click', function () {
            if (window.innerWidth < 768) {
                if (currentOpen && currentOpen !== this) {
                    hideContent(currentOpen);
                }

                toggleContent(this);
                currentOpen = this;
            }
        });
    });


    function toggleContent(container) {
        var servicesGrids = container.querySelector('.services-grids');
        var serviceContent = container.querySelector('.service-content');
        var enquireButton = container.querySelector('.enquire-button');

        if (servicesGrids && servicesGrids.classList.contains('hidden')) {
            servicesGrids.classList.remove('hidden');
            servicesGrids.classList.add('slide-in-right');
        }

        if (serviceContent && serviceContent.classList.contains('hidden')) {
            serviceContent.classList.remove('hidden');
            serviceContent.classList.add('slide-in-top');
        }

        if (enquireButton && enquireButton.classList.contains('hidden')) {
            enquireButton.classList.remove('hidden');
            enquireButton.classList.add('slide-in-top');
        }
    }


    function hideContent(container) {
        var servicesGrids = container.querySelector('.services-grids');
        var serviceContent = container.querySelector('.service-content');
        var enquireButton = container.querySelector('.enquire-button');

        servicesGrids.classList.add('hidden');
        serviceContent.classList.add('hidden');
        enquireButton.classList.add('hidden');

    }
});

// about us animation 
document.addEventListener('DOMContentLoaded', function () {
    // Get the about-us section
    const aboutUsSection = document.getElementById('about-us');

    // Configure the Intersection Observer options
    const options = {
        root: null, // Use the browser viewport as the container
        threshold: 0.5, // Trigger when 50% of the element is visible
    };

    // Create a new Intersection Observer
    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Trigger the animation when the element enters the viewport
                triggerAnimation();
            }
        });
    }, options);

    // Observe the about-us section
    observer.observe(aboutUsSection);

    function triggerAnimation() {
        // Reset all animated elements
        const animatedElements = document.querySelectorAll('.animated-line');
        animatedElements.forEach(elem => {
            elem.style.animation = 'none';
            elem.offsetHeight; // Force browser repaint
            elem.style.animation = '';
        });

        // Remove the old .arc element (if it exists)
        const existingArc = document.querySelector('.arc');
        if (existingArc) {
            existingArc.parentNode.removeChild(existingArc);
        }

        // Create and append a new .arc element
        const arcContainer = document.querySelector('.arc-container'); // Ensure there's a container element
        if (arcContainer) {
            const newArc = createArc();
            arcContainer.appendChild(newArc);
        }
    }

    function createArc() {
        const arcSvg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        arcSvg.setAttribute("class", "arc");
        arcSvg.setAttribute("height", "206");
        arcSvg.setAttribute("width", "206");

        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.setAttribute("d", "M 1,101 A 100,100 0 0,0 201,101");
        path.setAttribute("stroke", "#E0E0E1");
        path.setAttribute("stroke-width", "2");
        path.setAttribute("fill", "none");
        path.style.strokeDasharray = "314";
        path.style.strokeDashoffset = "314";
        path.style.animation = "drawArc 0.25s linear forwards 0.75s";

        arcSvg.appendChild(path);

        return arcSvg;
    }
});

// slider js
const slider = document.querySelector('.items');
let isDown = false;
let startX, startY;
let scrollLeft;

function getEventPageX(event) {
    return event.type.includes('touch') ? event.touches[0].pageX : event.pageX;
}

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('touchstart', (e) => {
    isDown = true;
    startX = getEventPageX(e) - slider.offsetLeft;
    startY = e.touches[0].pageY;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', stopDragging);
slider.addEventListener('mouseup', stopDragging);
slider.addEventListener('touchend', stopDragging);

function stopDragging() {
    isDown = false;
    slider.classList.remove('active');
}

slider.addEventListener('mousemove', drag);
slider.addEventListener('touchmove', drag);

function drag(e) {
    if (!isDown) return;

    const x = getEventPageX(e) - slider.offsetLeft;
    const walk = x - startX;

    if (e.type.includes('touch')) {
        const touchY = e.touches[0].pageY;
        const verticalMovement = Math.abs(touchY - startY);
        if (verticalMovement > Math.abs(walk)) {
            return;
        }
    }

    e.preventDefault();
    slider.scrollLeft = scrollLeft - walk;
}

// remove the last one when width < lg
document.addEventListener('DOMContentLoaded', function () {
    const item6 = document.querySelector('.item-6');
    const lgBreakpoint = 1024;

    function checkWidthAndRemove() {
        if (window.innerWidth < lgBreakpoint) {
            if (item6) {
                item6.remove();
            }
        }
    }

    checkWidthAndRemove();
    window.addEventListener('resize', checkWidthAndRemove);
});

// reviews slider
document.addEventListener('DOMContentLoaded', function () {
    let slickInitialized = false;

    function initSlick() {
        $('.reviews').slick({
            infinite: true,
            variableWidth: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        slickInitialized = true;
    }

    function destroySlick() {
        if (slickInitialized) {
            $('.reviews').slick('unslick');
            slickInitialized = false;
        }
    }

    const mediaQuery = window.matchMedia('(max-width: 1535px)');

    function handleTabletChange(e) {
        if (e.matches) {
            initSlick();
        } else {
            destroySlick();
        }
    }

    mediaQuery.addListener(handleTabletChange);
    handleTabletChange(mediaQuery);
});

// why us slider
document.addEventListener('DOMContentLoaded', function () {
    var slickInitialized = false;

    function initSlick() {
        $('.why-us-slider').slick({
            dots: true,
            infinite: true,
            variableWidth: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        slickInitialized = true;
    }

    function destroySlick() {
        if (slickInitialized) {
            $('.why-us-slider').slick('unslick');
            slickInitialized = false;
        }
    }

    function checkAndInitSlick() {
        var windowWidth = window.innerWidth;
        var lgBreakpoint = 1024;
        if (windowWidth < lgBreakpoint) {
            initSlick();
        } else {
            destroySlick();
        }
    }

    checkAndInitSlick();

    window.addEventListener('resize', checkAndInitSlick);
});

$(window).on('scroll', () => {

    if ($(this).scrollTop() >= 400) {
        $('header').addClass('scrolled');
    } else {
        $('header').removeClass('scrolled');
    }
});