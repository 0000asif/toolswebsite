document.addEventListener("DOMContentLoaded", () => {
   "use strict";

   /**
    * Easy selector helper function
    */
   const select = (el, all = false) => {
      el = el.trim();
      if (all) {
         return [...document.querySelectorAll(el)];
      } else {
         return document.querySelector(el);
      }
   };

   /**
    * Easy event listener function
    */
   const on = (type, el, listener, all = false) => {
      const elements = select(el, all);
      if (elements) {
         if (all) {
            elements.forEach(e => e.addEventListener(type, listener));
         } else {
            elements.addEventListener(type, listener);
         }
      }
   };

   /**
    * Easy on scroll event listener
    */
   const onscroll = (el, listener) => {
      if (el) {
         el.addEventListener('scroll', listener);
      }
   };

   /**
    * Toggle .header-scrolled class to #header when page is scrolled
    */
   let selectHeader = select('#header');
   if (selectHeader) {
      const headerScrolled = () => {
         if (window.scrollY > 100) {
            selectHeader.classList.add('header-scrolled');
         } else {
            selectHeader.classList.remove('header-scrolled');
         }
      };
      window.addEventListener('load', headerScrolled);
      onscroll(document, headerScrolled);
   }

   /**
    * Back to top button
    */
   let backtotop = select('.back-to-top');
   if (backtotop) {
      const toggleBacktotop = () => {
         if (window.scrollY > 100) {
            backtotop.classList.add('active');
         } else {
            backtotop.classList.remove('active');
         }
      };
      window.addEventListener('load', toggleBacktotop);
      onscroll(document, toggleBacktotop);
   }

   /**
    * Mobile nav toggle
    */
   on('click', '#wrapper', function (e) {
      const navbar = select('#navbar');
      const icon = select('.icon');
      const navbarUl = select('.navbar ul');

      if (navbar && icon && navbarUl) {
         navbar.classList.toggle('navbar-mobile');
         icon.classList.toggle('close');
         navbarUl.classList.toggle('active');
      }
   });

   on('click', '#overlay', function () {
      const navbar = select('#navbar');
      const icon = select('.icon');
      const navbarUl = select('.navbar ul');

      if (navbar && icon && navbarUl) {
         navbar.classList.toggle('navbar-mobile');
         icon.classList.toggle('close');
         navbarUl.classList.remove('active');
      }
   });

   /**
    * Mobile nav dropdowns activate
    */
   on('click', '.navbar .dropdown > a', function (e) {
      const navbar = select('#navbar');
      if (navbar && navbar.classList.contains('navbar-mobile')) {
         e.preventDefault();
         this.nextElementSibling.classList.toggle('dropdown-active');
      }
   }, true);

   /**
    * Scroll with offset on links with a class name .scrollto
    */
   on('click', '.scrollto', function (e) {
      const target = select(this.hash);
      const navbar = select('#navbar');
      if (target) {
         e.preventDefault();

         if (navbar && navbar.classList.contains('navbar-mobile')) {
            navbar.classList.remove('navbar-mobile');
         }

         target.scrollIntoView({ behavior: "smooth" });
      }
   }, true);

   /**
    * Scroll with offset on page load with hash links in the URL
    */
   window.addEventListener('load', () => {
      if (window.location.hash) {
         const target = select(window.location.hash);
         if (target) {
            target.scrollIntoView({ behavior: "smooth" });
         }
      }
   });

   /**
    * Animation on scroll
    */
   function aos_init() {
      if (typeof AOS !== "undefined") {
         AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
         });
      }
   }
   window.addEventListener('load', () => {
      aos_init();
   });

   // JavaScript for floating button interactions
   const showChatButton = select("#show_chat");
   const closeButton = select("#xros");
   const floatingElements = select(".floating_element", true);

   if (showChatButton && closeButton && floatingElements.length > 0) {
      // Function to show floating elements
      const showFloatingElements = () => {
         floatingElements.forEach(element => {
            element.classList.add("show_elements");
            element.classList.remove("d-none");
         });
         showChatButton.classList.add("d-none");
         closeButton.classList.remove("d-none");
      };

      // Function to hide floating elements
      const hideFloatingElements = () => {
         floatingElements.forEach(element => {
            element.classList.remove("show_elements");
            element.classList.add("d-none");
         });
         closeButton.classList.add("d-none");
         showChatButton.classList.remove("d-none");
      };

      // Event listener for the chat button
      showChatButton.addEventListener("click", showFloatingElements);

      // Event listener for the close button
      closeButton.addEventListener("click", hideFloatingElements);
   }
});
