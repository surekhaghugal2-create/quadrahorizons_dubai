document.addEventListener('DOMContentLoaded', () => {

    /* ========================
       1. LUXURY CURSOR LOGIC
       ======================== */
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');

    if (cursorDot && window.innerWidth > 992) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;
            
            // Dot moves instantly
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Outline moves with delay
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        const interactables = document.querySelectorAll('a, button, .menu-btn, input');
        interactables.forEach(el => {
            el.addEventListener('mouseenter', () => document.body.classList.add('hovering'));
            el.addEventListener('mouseleave', () => document.body.classList.remove('hovering'));
        });
    }

    /* ========================
       2. SLIDING MENU LOGIC
       ======================== */
    const menuBtn = document.getElementById('menuTrigger');
    const closeBtn = document.getElementById('closeBtn');
    const sideMenu = document.getElementById('sideMenu');
    const overlay = document.getElementById('menuOverlay');

    function toggleMenu() {
        sideMenu.classList.toggle('active');
        overlay.classList.toggle('active');
    }

    if(menuBtn) menuBtn.addEventListener('click', toggleMenu);
    if(closeBtn) closeBtn.addEventListener('click', toggleMenu);
    if(overlay) overlay.addEventListener('click', toggleMenu);

});

document.addEventListener('DOMContentLoaded', () => {
    // Scroll Reveal Logic
    const reveals = document.querySelectorAll('.reveal');
    const checkScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;
        reveals.forEach(box => {
            if(box.getBoundingClientRect().top < triggerBottom) {
                box.classList.add('active');
            }
        });
    }
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Run immediately to show top content
});

// document.addEventListener('DOMContentLoaded', () => {
//     const reveals = document.querySelectorAll('.reveal');

//     const checkScroll = () => {
//         const triggerBottom = window.innerHeight * 0.85;
//         reveals.forEach(box => {
//             const boxTop = box.getBoundingClientRect().top;
//             if(boxTop < triggerBottom) {
//                 box.classList.add('active'); // This triggers the CSS transitions
//             }
//         });
//     }
    
//     window.addEventListener('scroll', checkScroll);
//     checkScroll(); // Run once on load
// });

document.addEventListener('DOMContentLoaded', () => {
    
    const footerTrigger = document.getElementById('footerTrigger');
    let hasTriggered = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasTriggered) {
                hasTriggered = true;
                
                // Short delay (0.8s) to let user see "CONNECT WITH BRAND"
                // Then lift the curtain
                setTimeout(() => {
                    footerTrigger.classList.add('lift-curtain');
                }, 800); 
            }
        });
    }, { threshold: 0.4 }); // Trigger when 40% of footer is visible

    if(footerTrigger) observer.observe(footerTrigger);

    // Keep existing scroll reveal code...
    const reveals = document.querySelectorAll('.reveal');
    const checkScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;
        reveals.forEach(box => {
            if(box.getBoundingClientRect().top < triggerBottom) box.classList.add('active');
        });
    }
    window.addEventListener('scroll', checkScroll);
});

// FAQ JAVAscript
document.addEventListener('DOMContentLoaded', () => {
    
    // Select all FAQ items
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon');

        question.addEventListener('click', () => {
            
            // Check if this item is already open
            const isOpen = item.classList.contains('active');

            // 1. Close ALL other items first (Accordion behavior)
            faqItems.forEach(otherItem => {
                const otherAnswer = otherItem.querySelector('.faq-answer');
                const otherIcon = otherItem.querySelector('.faq-icon');
                
                otherItem.classList.remove('active');
                otherAnswer.style.maxHeight = null; // Collapse
                otherIcon.textContent = '+'; // Reset icon
            });

            // 2. If it wasn't open before, open it now
            if (!isOpen) {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + "px"; // Expand to exact height
                icon.textContent = 'x'; // Change icon
            } 
            // If it was open, it is now closed (handled by the loop above)
        });
    });

});