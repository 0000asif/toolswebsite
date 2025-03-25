
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const slideInterval = 5000; // 5 seconds

// Function to show the current slide
function showSlide(index) {
   slides.forEach((slide, i) => {
      if (i === index) {
         slide.style.opacity = "1";
         slide.style.visibility = "visible";
      } else {
         slide.style.opacity = "0";
         slide.style.visibility = "hidden";
      }
      dots[i]?.classList.toggle('active', i === index);
   });
}

// Change slide function
function changeSlide(step) {
   currentIndex = (currentIndex + step + slides.length) % slides.length;
   showSlide(currentIndex);
}

// Go to specific slide
function goToSlide(index) {
   currentIndex = index;
   showSlide(currentIndex);
}

// Auto slide function
function autoSlide() {
   changeSlide(1);
}

// Initialize slider
showSlide(currentIndex);
let autoSlideInterval = setInterval(autoSlide, slideInterval);

// Pause auto-slide on hover
const slider = document.getElementById('slider');
slider.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
slider.addEventListener('mouseout', () => {
   autoSlideInterval = setInterval(autoSlide, slideInterval);
});



//Course Details Video
$('.course-iframe-video .course-play-button').on('click', function (ev) {
   $(".course-iframe-video iframe")[0].src += "&autoplay=1";
   ev.preventDefault();
   $(".course-iframe-video .video-iframe").css('display', 'block');
   $(".course-iframe-video .course-play-button").css('display', 'none');
   $(".course-iframe-video img").css('display', 'none');
});

//hero slider responsive script
if (window.matchMedia('(max-width: 1140px)').matches) {
   $(".hero-fluid").removeClass("container-fluid").addClass("container");
}
//Menu Temp Solution
$('.ncc-main-menu .navbar-nav > li').each(function () {
   if ($(this).find('.dropdown-menu').hasClass('multi-level')) {
      $(this).addClass('dropdown');
   }
});
$('.ncc-main-menu .navbar-nav .dropdown').click(function () {
   $(this).find('.dropdown-menu').toggleClass('d-block');
});

// ==================== count ================== 
// time show code end here ------------------------------------

// document.addEventListener('DOMContentLoaded', function () {
//    // Function to check if an element is in the viewport
//    function isInViewport(element) {
//       const rect = element.getBoundingClientRect();
//       return (
//          rect.top >= 0 &&
//          rect.left >= 0 &&
//          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//       );
//    }

//    // Function to animate counting up
//    function countUp(element) {
//       const target = +element.getAttribute('data-target');
//       const duration = 2000;
//       const start = 0;
//       let startTime = null;

//       function animation(currentTime) {
//          if (startTime === null) startTime = currentTime;
//          const progress = currentTime - startTime;
//          const count = Math.min(Math.floor((progress / duration) * target), target);
//          element.textContent = count;
//          if (progress < duration) {
//             requestAnimationFrame(animation);
//          } else {
//             element.textContent = target;
//          }
//       }
//       requestAnimationFrame(animation);
//    }

//    // Get all count elements
//    const counts = document.querySelectorAll('.count');
//    let counted = false;

//    // Function to check and animate counts
//    function checkAndAnimateCounts() {
//       if (!counted && isInViewport(document.querySelector('.stats'))) {
//          counts.forEach(countUp);
//          counted = true;
//       }
//    }

//    // Event listeners
//    window.addEventListener('scroll', checkAndAnimateCounts);
//    window.addEventListener('resize', checkAndAnimateCounts);

//    // Initial check
//    checkAndAnimateCounts();
// });


// ============ Gallery ==========

// ---------- gellery ---------- 
document.querySelectorAll('.gallery-item').forEach(item => {
   item.addEventListener('click', event => {
      // Get the clicked image source
      const imgSrc = item.getAttribute('src');

      // Update the modal image source
      const modalImage = document.getElementById('modalImage');
      modalImage.setAttribute('src', imgSrc);

      // Show the modal
      const photoModal = new bootstrap.Modal(document.getElementById('photoModal'));
      photoModal.show();
   });
});

// --------- video -gellery ----- 
// JavaScript for opening modal with embedded video
var modal = new bootstrap.Modal(document.getElementById('videoModal'), {
   keyboard: true
});

document.querySelectorAll('.gallery-thumbnail').forEach(item => {
   item.addEventListener('click', event => {
      var videoId = item.getAttribute('data-video-id');
      var modalBody = document.getElementById('videoModalBody');
      modalBody.innerHTML = '<iframe width="100%" height="315" src="' + videoId + '" frameborder="0" allowfullscreen class="modal-video"></iframe>';
      modal.show();
   });
});