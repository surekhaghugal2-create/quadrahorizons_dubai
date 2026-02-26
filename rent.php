<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/rent.css">

<div class="global-video-bg">
    <video id="main-bg-video" autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline" preload="auto">
        <source src="video/background (1).mp4" type="video/mp4">
    </video>
    <div class="global-overlay"></div>
</div>

<section class="rent-hero">
    <video id="hero-video" autoplay="autoplay" muted="muted" loop="loop" playsinline="playsinline" class="hero-video">
        <source src="video/Dubai_Real_Estate_Video_Generated.mp4" type="video/mp4">
    </video>
    <div class="hero-gradient"></div>
    
    <div class="hero-content anim-fade-up scroll-anim">
        <h1 class="heading-strict heading-line">Properties <span class="accent-text">for Rent</span></h1>
        <p class="para-strict" style="margin-top: 30px; letter-spacing: 4px; text-transform: uppercase; color: var(--gold);">Experience Dubai's Finest Living</p>
    </div>
</section>

<section style="padding: 100px 5%; text-align: center;">
    <div class="anim-fade-up scroll-anim" style="max-width: 900px; margin: 0 auto;">
        <h2 class="heading-strict" style="margin-bottom: 30px;">A New Standard of Living</h2>
        <p class="para-strict">
            Delivering world-class real estate experiences across Dubai with a focus on
            architecture, innovation and long-term value. From penthouses to luxury villas, 
            discover properties that define modern luxury.
        </p>
    </div>
</section>

<section class="projects-section" style="padding: 100px 5%;">
    <div class="properties-header anim-fade-up scroll-anim" style="text-align: center; margin-bottom: 60px;">
        <h2 class="heading-strict heading-line">Exclusive <span class="accent-text">Listings</span></h2>
        <p class="para-strict" style="margin-top: 20px;">Discover our curated selection of Dubai's finest properties.</p>
    </div>

    <div class="grid-container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 40px; max-width: 1400px; margin: 0 auto;">
        
        <div class="project-card reveal">
            <span class="exclusive-tag" style="position: absolute; top: 20px; left: 20px; background: var(--gold); color: #000; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 12px; z-index: 10;">Exclusive</span>
            <div class="card-img-wrap" style="height: 280px; overflow: hidden;">
                <img src="image/mbp-bc-hero-banner.webp" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-content" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 30px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 10px;">Mercedes-Benz Places Binghatti City</h3>
                <span class="location" style="color: var(--gold); font-size: 13px; text-transform: uppercase; letter-spacing: 1px;"><i class="fas fa-map-marker-alt"></i> Nad al sheba</span>
                <div class="price-row" style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                    <div>
                        <span class="price-label" style="font-size: 10px; color: #888;">FROM</span>
                        <div class="price-value" style="color: #fff; font-size: 18px;">AED 1M</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-card reveal" style="transition-delay: 0.1s">
            <span class="exclusive-tag" style="position: absolute; top: 20px; left: 20px; background: var(--gold); color: #000; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 12px; z-index: 10;">Exclusive</span>
            <div class="card-img-wrap" style="height: 280px; overflow: hidden;">
                <img src="image/binghatti-etheria-hero-banner.avif" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-content" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 30px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 10px;">Binghatti Etherea</h3>
                <span class="location" style="color: var(--gold); font-size: 13px; text-transform: uppercase; letter-spacing: 1px;"><i class="fas fa-map-marker-alt"></i> Jumeirah Village Circle</span>
                <div class="price-row" style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                    <div>
                        <span class="price-label" style="font-size: 10px; color: #888;">FROM</span>
                        <div class="price-value" style="color: #fff; font-size: 18px;">AED 5M</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-card reveal" style="transition-delay: 0.2s">
            <span class="exclusive-tag" style="position: absolute; top: 20px; left: 20px; background: #fff; color: #000; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 12px; z-index: 10;">New Launch</span>
            <div class="card-img-wrap" style="height: 280px; overflow: hidden;">
                <img src="image/binghatti-skyterraces-hero-banner.avif" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-content" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 30px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 10px;">Binghatti Skyterraces</h3>
                <span class="location" style="color: var(--gold); font-size: 13px; text-transform: uppercase; letter-spacing: 1px;"><i class="fas fa-map-marker-alt"></i> Motor City</span>
                <div class="price-row" style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                    <div>
                        <span class="price-label" style="font-size: 10px; color: #888;">FROM</span>
                        <div class="price-value" style="color: #fff; font-size: 18px;">AED 19M</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-card reveal">
            <span class="exclusive-tag" style="position: absolute; top: 20px; left: 20px; background: var(--gold); color: #000; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 12px; z-index: 10;">Exclusive</span>
            <div class="card-img-wrap" style="height: 280px; overflow: hidden;">
                <img src="image/binghatti-luxuria-hero-banner.avif" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-content" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 30px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 10px;">Binghatti Luxuria</h3>
                <span class="location" style="color: var(--gold); font-size: 13px; text-transform: uppercase; letter-spacing: 1px;"><i class="fas fa-map-marker-alt"></i> Jumeirah Village Triangle</span>
                <div class="price-row" style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                    <div>
                        <span class="price-label" style="font-size: 10px; color: #888;">FROM</span>
                        <div class="price-value" style="color: #fff; font-size: 18px;">AED 2.5M</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-card reveal" style="transition-delay: 0.1s">
            <span class="exclusive-tag" style="position: absolute; top: 20px; left: 20px; background: var(--gold); color: #000; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 12px; z-index: 10;">Selling Fast</span>
            <div class="card-img-wrap" style="height: 280px; overflow: hidden;">
                <img src="image/binghatti-cullinan-hero-banner.avif" alt="Project" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-content" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 30px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 10px;">Binghatti Cullinan</h3>
                <span class="location" style="color: var(--gold); font-size: 13px; text-transform: uppercase; letter-spacing: 1px;"><i class="fas fa-map-marker-alt"></i> Al Jaddaf</span>
                <div class="price-row" style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                    <div>
                        <span class="price-label" style="font-size: 10px; color: #888;">FROM</span>
                        <div class="price-value" style="color: #fff; font-size: 18px;">AED 45M</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-card reveal" style="transition-delay: 0.2s">
            <span class="exclusive-tag" style="position: absolute; top: 20px; left: 20px; background: var(--gold); color: #000; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 12px; z-index: 10;">Exclusive</span>
            <div class="card-img-wrap" style="height: 280px; overflow: hidden;">
                <img src="image/binghatti-hillcrest-hero-banner.avif" alt="Project" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="card-content" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 30px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-heading); font-size: 24px; color: #fff; margin-bottom: 10px;">Binghatti Hillcrest</h3>
                <span class="location" style="color: var(--gold); font-size: 13px; text-transform: uppercase; letter-spacing: 1px;"><i class="fas fa-map-marker-alt"></i> Arjan</span>
                <div class="price-row" style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                    <div>
                        <span class="price-label" style="font-size: 10px; color: #888;">FROM</span>
                        <div class="price-value" style="color: #fff; font-size: 18px;">AED 3.2M</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="has-bg" style="padding: 100px 5%;">
    <div class="info-wrapper" style="max-width: 1300px; margin: 0 auto; display: flex; align-items: center; gap: 60px;">
        <div class="info-image anim-slide-left scroll-anim" style="flex: 1; height: 500px; overflow: hidden; border-radius: 4px;">
            <img src="https://images.unsplash.com/photo-1546412414-e1885259563a?auto=format&fit=crop&w=1000&q=80" alt="Dubai City" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="info-content anim-slide-right scroll-anim delay-200" style="flex: 1;">
            <h2 class="heading-strict heading-line">Why Rent <span class="accent-text">With Us?</span></h2>
            <p class="para-strict" style="margin-top: 30px;">
                For people new to the city, as well as long-term expats, Dubai ranks as one of the strongest places to rent in the Middle East.
            </p>
            <ul class="info-list" style="list-style: none; padding: 0; margin-top: 30px; display: grid; gap: 15px;">
                <li style="font-size: 18px; color: var(--text-grey); position: relative; padding-left: 30px;"><span style="position: absolute; left: 0; color: var(--gold);">✓</span> Access to ultra-luxury, unlisted properties.</li>
                <li style="font-size: 18px; color: var(--text-grey); position: relative; padding-left: 30px;"><span style="position: absolute; left: 0; color: var(--gold);">✓</span> Expert handling of all Ejari and legal documentation.</li>
                <li style="font-size: 18px; color: var(--text-grey); position: relative; padding-left: 30px;"><span style="position: absolute; left: 0; color: var(--gold);">✓</span> Dedicated lifestyle support post-move-in.</li>
                <li style="font-size: 18px; color: var(--text-grey); position: relative; padding-left: 30px;"><span style="position: absolute; left: 0; color: var(--gold);">✓</span> Guided processes for international clients.</li>
            </ul>
        </div>
    </div>
</section>

<section class="luxury-faq-section">
    
    <video class="faq-bg-media" autoplay loop muted playsinline>
        <source src="video/background (1).mp4 " type="video/mp4">
    </video> 
    
    <div class="faq-bg-overlay"></div>

    <div class="faq-container">
        
        <div class="faq-header anim-fade-up scroll-anim">
            <h2 class="faq-title">Frequently Asked <span class="accent-text"> Questions </span></h2>
            <div class="faq-divider"></div>
        </div>

        <div class="faq-accordion">
            
            <div class="faq-item anim-fade-up delay-100 scroll-anim">
                <div class="faq-question">
                    <h3>What is the minimum investment required for a Golden Visa?</h3>
                    <div class="faq-icon">
                        <span class="icon-line horizontal"></span>
                        <span class="icon-line vertical"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>To qualify for the UAE Golden Visa through real estate, the minimum property investment required is AED 2,000,000. This grants you a 10-year renewable residency for you and your immediate family, along with exceptional long-term benefits.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item anim-fade-up delay-200 scroll-anim">
                <div class="faq-question">
                    <h3>Can foreign nationals own property in Dubai?</h3>
                    <div class="faq-icon">
                        <span class="icon-line horizontal"></span>
                        <span class="icon-line vertical"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Absolutely. Foreign nationals can purchase, own, and sell properties on a freehold basis in designated investment zones across Dubai. These prime locations include Downtown Dubai, Palm Jumeirah, and Dubai Marina.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item anim-fade-up delay-300 scroll-anim">
                <div class="faq-question">
                    <h3>Are there any property taxes in Dubai?</h3>
                    <div class="faq-icon">
                        <span class="icon-line horizontal"></span>
                        <span class="icon-line vertical"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Dubai is a renowned tax haven. There are zero property taxes, zero capital gains taxes, and zero income taxes on rental yields. The only fee applied is a one-time 4% DLD (Dubai Land Department) registration fee upon purchase.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item anim-fade-up delay-400 scroll-anim">
                <div class="faq-question">
                    <h3>Do you offer post-handover property management?</h3>
                    <div class="faq-icon">
                        <span class="icon-line horizontal"></span>
                        <span class="icon-line vertical"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Yes, we provide end-to-end, white-glove property management services. From tenant sourcing and screening to maintenance and legal compliance, we ensure your asset generates maximum returns completely hassle-free.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="testimonials-section has-bg" style="padding: 100px 5%; text-align: center;">
    <div class="anim-fade-up scroll-anim">
        <h2 class="heading-strict heading-line">Client <span class="accent-text">Experiences</span></h2>
    </div>

    <div class="test-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; max-width: 1400px; margin: 60px auto 0;">
        <div class="test-card anim-fade-up scroll-anim delay-100" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 50px 40px; border: 1px solid rgba(255,255,255,0.05);">
            <div class="test-icon" style="font-family: var(--font-heading); font-size: 50px; color: var(--gold); line-height: 0.5; margin-bottom: 20px;">“</div>
            <h5 style="font-family: var(--font-heading); font-size: 22px; margin-bottom: 5px;">Michael Ross</h5>
            <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; letter-spacing: 2px;">UK Investor</span>
            <p class="para-strict" style="margin-top: 20px;">Found my dream penthouse in record time. The team is impeccable and their network is truly unmatched.</p>
        </div>
        
        <div class="test-card anim-fade-up scroll-anim delay-200" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 50px 40px; border: 1px solid rgba(255,255,255,0.05);">
            <div class="test-icon" style="font-family: var(--font-heading); font-size: 50px; color: var(--gold); line-height: 0.5; margin-bottom: 20px;">“</div>
            <h5 style="font-family: var(--font-heading); font-size: 22px; margin-bottom: 5px;">Sarah Jenkins</h5>
            <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; letter-spacing: 2px;">Tech Entrepreneur</span>
            <p class="para-strict" style="margin-top: 20px;">Professional, transparent, and swift. They handled my entire leasing portfolio perfectly.</p>
        </div>
        
        <div class="test-card anim-fade-up scroll-anim delay-300" style="background: rgba(10,17,32,0.8); backdrop-filter: blur(10px); padding: 50px 40px; border: 1px solid rgba(255,255,255,0.05);">
            <div class="test-icon" style="font-family: var(--font-heading); font-size: 50px; color: var(--gold); line-height: 0.5; margin-bottom: 20px;">“</div>
            <h5 style="font-family: var(--font-heading); font-size: 22px; margin-bottom: 5px;">David Lee</h5>
            <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; letter-spacing: 2px;">CEO</span>
            <p class="para-strict" style="margin-top: 20px;">A truly white-glove service from start to finish. Highly recommended for luxury rentals.</p>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = '0';
                    otherItem.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });
            
            item.classList.toggle('active');
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');
            
            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(45deg)';
            } else {
                answer.style.maxHeight = '0';
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });

    // 2. Scroll Animation Observer
    setTimeout(() => {
        document.querySelectorAll('.hero-content').forEach(el => el.classList.add('visible'));
    }, 150);

    const scrollElements = document.querySelectorAll('.scroll-anim:not(.hero-content), .reveal');
    const revealOnScroll = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" }); 

    scrollElements.forEach(el => revealOnScroll.observe(el));

    // 3. Bulletproof Background Video Autoplay (Both Global & Hero)
    var globalVideo = document.getElementById("main-bg-video");
    if (globalVideo) {
        globalVideo.muted = true; 
        globalVideo.play().catch(function(error) {
            console.log("Browser prevented autoplay on global video.");
        });
    }

    var heroVideo = document.getElementById("hero-video");
    if (heroVideo) {
        heroVideo.muted = true; 
        heroVideo.play().catch(function(error) {
            console.log("Browser prevented autoplay on hero video.");
        });
    }
});

//FAQ Section

document.addEventListener("DOMContentLoaded", function() {
    // Select all FAQ items
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Close all other accordions when one is opened (Luxury behavior)
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.faq-answer').style.maxHeight = null;
            });

            // If the clicked item wasn't already active, open it
            if (!isActive) {
                item.classList.add('active');
                // Dynamically calculate the exact height of the hidden text to slide it down
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });
});


</script>

<?php include 'footer.php'; ?>