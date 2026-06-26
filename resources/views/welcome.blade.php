<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Dental Clinic in Kanjippuzha | Aligners & Implants</title>
    <meta name="description" content="Family Dental Clinic in Kanjippuzha offering Invisible Aligners and Dental Implants. Book a free consultation today.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="container header-inner">
            <a href="/" class="logo">FamilyDental.</a>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <a href="/"><i class="fas fa-home"></i> Homepage</a>
                <a href="#aligners"><i class="fas fa-teeth"></i> Invisible Aligners</a>
                <a href="#implants"><i class="fas fa-tooth"></i> Dental Implants</a>
                <a href="#about"><i class="fas fa-user-md"></i> About</a>
                <a href="#contact"><i class="fas fa-map-marker-alt"></i> Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-content">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Kanjippuzha Pallimukk, Vallikunnam, Kerala
                    </div>
                    <h1>Family Dental Clinic in Kanjippuzha | Aligners & Implants</h1>
                    <p>Experience premium dental care in a comfortable environment. We specialize in giving you the perfect smile with state-of-the-art aligners and permanent dental implants.</p>
                    
                    <div class="hero-actions">
                        <a href="tel:+917012761098" class="btn btn-primary">
                            <i class="fas fa-calendar-alt"></i> Book Free Consultation
                        </a>
                        <a href="https://wa.me/917012761098" target="_blank" class="btn btn-outline">
                            <i class="fab fa-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=800&auto=format&fit=crop" alt="Doctor and Patient Consultation" style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px;">
                </div>
            </div>
        </section>

        <!-- Trust Bar Section -->
        <section class="trust-bar">
            <div class="container trust-inner">
                <div class="trust-item">
                    <div class="trust-value">4.9 <i class="fas fa-star" style="color: #fbbf24; font-size: 1.75rem;"></i></div>
                    <div class="trust-label">33 Google reviews</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">8+</div>
                    <div class="trust-label">Years experience</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value"><i class="fas fa-check-circle" style="color: var(--primary); font-size: 2.25rem;"></i></div>
                    <div class="trust-label">BDS certified</div>
                </div>
            </div>
            <div class="scroll-indicator"><i class="fas fa-chevron-down"></i></div>
        </section>

        <!-- Key Services Section -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-header">
                    <h2>Key Services</h2>
                    <p>Comprehensive dental care tailored for your family.</p>
                </div>

                <div class="services-grid">
                    <div class="service-card" id="aligners">
                        <div class="service-icon"><i class="fas fa-teeth"></i></div>
                        <h3>Invisible Aligners</h3>
                        <p>Straighten your teeth discreetly with our custom-fit, comfortable invisible aligners. Perfect for adults and teens seeking a perfect smile without braces.</p>
                    </div>
                    
                    <div class="service-card" id="implants">
                        <div class="service-icon"><i class="fas fa-tooth"></i></div>
                        <h3>Dental Implants</h3>
                        <p>Restore your smile with permanent, natural-looking dental implants that function just like your real teeth. A lifetime solution for missing teeth.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-smile"></i></div>
                        <h3>General Dentistry</h3>
                        <p>From routine checkups and scaling to root canals and extractions, we ensure your overall oral health is maintained at the highest standard.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section (NEW) -->
        <section id="about" class="bg-alt">
            <div class="container about-inner">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=800&auto=format&fit=crop" alt="Specialist Doctor Portrait" style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px;">
                </div>
                <div class="about-content">
                    <h2>Meet Your Specialist</h2>
                    <p>With over 8 years of dedicated experience in modern dentistry, our lead specialist ensures that every patient receives personalized, pain-free treatments.</p>
                    <ul class="about-list">
                        <li><i class="fas fa-check-circle"></i> Certified BDS Professional</li>
                        <li><i class="fas fa-check-circle"></i> Specialized in Invisible Aligners</li>
                        <li><i class="fas fa-check-circle"></i> Expert in Advanced Implantology</li>
                        <li><i class="fas fa-check-circle"></i> Commitment to Patient Comfort</li>
                    </ul>
                    <button class="btn btn-outline">Read Full Profile</button>
                </div>
            </div>
        </section>

        <!-- Why Choose Us / Features Section (NEW) -->
        <section>
            <div class="container">
                <div class="section-header">
                    <h2>Why Choose Family Dental Care?</h2>
                    <p>We combine advanced technology with compassionate care.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-microscope"></i></div>
                        <h3>Advanced Technology</h3>
                        <p>We use state-of-the-art equipment for precise diagnostics and effective treatments.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-smile-beam"></i></div>
                        <h3>Pain-Free Experience</h3>
                        <p>Our priority is your comfort, utilizing modern techniques to minimize discomfort.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-tags"></i></div>
                        <h3>Affordable Pricing</h3>
                        <p>Premium dental care that fits your budget, with flexible payment options available.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon"><i class="fas fa-users"></i></div>
                        <h3>Family Friendly</h3>
                        <p>A welcoming environment designed to make patients of all ages feel right at home.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-alt testimonials-section-new">
            <div class="section-header">
                <h2>What Our Patients Say</h2>
                <p>Don't just take our word for it—read our 4.9-star Google Reviews.</p>
            </div>
            
            <div class="marquee-wrapper">
                <div class="marquee-track">
                    <!-- Card 1 -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Got my invisible aligners from here and the results are amazing! The doctor is very patient and explained the entire process clearly. Highly recommend!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #3b82f6;">A</div>
                            <div class="author-info">
                                <h4>Arjun K.</h4>
                                <span>Aligner Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I was terrified of getting a dental implant, but the procedure was surprisingly painless. The clinic is incredibly clean and professional."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #ef4444;">M</div>
                            <div class="author-info">
                                <h4>Meera S.</h4>
                                <span>Implant Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Best dental clinic in the Alappuzha district! Took my entire family for a checkup and the staff was extremely friendly and welcoming."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #10b981;">R</div>
                            <div class="author-info">
                                <h4>Rahul P.</h4>
                                <span>General Dentistry</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 (New) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Highly recommended for braces and aligners! Very friendly doctors and affordable treatment cost. Truly family friendly."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #a855f7;">S</div>
                            <div class="author-info">
                                <h4>Saritha M.</h4>
                                <span>Braces Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 (New) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The root canal treatment here was exceptional. Zero pain and the follow up care was very detailed. Excellent doctors."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #f97316;">V</div>
                            <div class="author-info">
                                <h4>Vipin D.</h4>
                                <span>Root Canal Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 (New) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Super clean clinic with state of the art equipment. The invisible aligners were delivered on time and fit perfectly. 5 stars!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #06b6d4;">N</div>
                            <div class="author-info">
                                <h4>Nikhil J.</h4>
                                <span>Aligners Patient</span>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat the same cards to make it infinite scrolling -->
                    
                    <!-- Card 1 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Got my invisible aligners from here and the results are amazing! The doctor is very patient and explained the entire process clearly. Highly recommend!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #3b82f6;">A</div>
                            <div class="author-info">
                                <h4>Arjun K.</h4>
                                <span>Aligner Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I was terrified of getting a dental implant, but the procedure was surprisingly painless. The clinic is incredibly clean and professional."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #ef4444;">M</div>
                            <div class="author-info">
                                <h4>Meera S.</h4>
                                <span>Implant Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Best dental clinic in the Alappuzha district! Took my entire family for a checkup and the staff was extremely friendly and welcoming."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #10b981;">R</div>
                            <div class="author-info">
                                <h4>Rahul P.</h4>
                                <span>General Dentistry</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Highly recommended for braces and aligners! Very friendly doctors and affordable treatment cost. Truly family friendly."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #a855f7;">S</div>
                            <div class="author-info">
                                <h4>Saritha M.</h4>
                                <span>Braces Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The root canal treatment here was exceptional. Zero pain and the follow up care was very detailed. Excellent doctors."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #f97316;">V</div>
                            <div class="author-info">
                                <h4>Vipin D.</h4>
                                <span>Root Canal Patient</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 (Duplicate) -->
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Super clean clinic with state of the art equipment. The invisible aligners were delivered on time and fit perfectly. 5 stars!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #06b6d4;">N</div>
                            <div class="author-info">
                                <h4>Nikhil J.</h4>
                                <span>Aligners Patient</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section-new">
            <div class="container faq-container">
                <!-- Left Side: Header info -->
                <div class="faq-left">
                    <span class="faq-label-small">FAQ</span>
                    <h2 class="faq-title-serif">Common <span class="serif-italic">questions</span></h2>
                    <p class="faq-subtitle">Still not sure? Reach out to the Family Dental team — we typically respond within a few hours.</p>
                    <a href="tel:+917012761098" class="btn-faq-contact">Contact us</a>
                </div>

                <!-- Right Side: Accordion items -->
                <div class="faq-right">
                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">How long do invisible aligners take to work?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">Treatment times vary depending on the complexity of your case, but most patients see final results in 6 to 18 months.</div>
                        </div>
                    </div>
                    
                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">Are dental implants painful?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">No, the procedure is performed under local anesthesia. Most patients report less discomfort than a standard tooth extraction.</div>
                        </div>
                    </div>

                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">Do you offer consultation for children?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">Yes! We provide comprehensive pediatric dentistry in a fun, child-friendly environment.</div>
                        </div>
                    </div>

                    <div class="faq-accordion-item">
                        <button class="faq-accordion-header">
                            <span class="faq-question-text">What is the cost of treatment?</span>
                            <span class="faq-icon-toggle">+</span>
                        </button>
                        <div class="faq-accordion-body">
                            <div class="faq-answer-text">Costs vary depending on your dental needs. We provide full pricing details during your free consultation, with flexible installment options.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA (NEW) -->
        <section class="cta-section">
            <div class="container cta-inner">
                <h2>Ready to achieve your perfect smile?</h2>
                <p>Book your free consultation today. Let our experts examine your dental health and provide a customized treatment plan.</p>
                <div class="hero-actions" style="justify-content: center;">
                    <a href="tel:+917012761098" class="btn btn-primary">
                        <i class="fas fa-calendar-alt"></i> Book Free Consultation
                    </a>
                    <a href="https://wa.me/917012761098" target="_blank" class="btn btn-outline">
                        <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Premium Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-brand">
                    <a href="/" class="footer-logo">FamilyDental.</a>
                    <p>Experience premium dental care in a comfortable environment. Your smile is our top priority.</p>
                </div>
                
                <!-- Quick Links Column -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/">Homepage</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#aligners">Invisible Aligners</a></li>
                        <li><a href="#implants">Dental Implants</a></li>
                        <li><a href="#services">General Dentistry</a></li>
                        <li><a href="#services">Teeth Whitening</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-col">
                    <h4>Contact & Hours</h4>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span>Kanjippuzha Pallimukk,<br>Changankulangara - Kambisseri Rd,<br>Vallikunnam, Kerala 690501</span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <span><a href="tel:+917012761098" style="color: inherit; text-decoration: none;">+91 70127 61098</a></span>
                    </div>
                    <div class="footer-contact-item">
                        <span><i class="far fa-clock"></i></span>
                        <span>Mon - Sat: 9:00 AM - 6:30 PM<br>Sunday: Closed</span>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Family Dental Care. All rights reserved. Designed for Excellence.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const nav = document.querySelector('nav');
            
            if (menuToggle && nav) {
                menuToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    nav.classList.toggle('active');
                    const icon = menuToggle.querySelector('i');
                    if (nav.classList.contains('active')) {
                        icon.className = 'fas fa-times';
                    } else {
                        icon.className = 'fas fa-bars';
                    }
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (nav.classList.contains('active') && !nav.contains(e.target) && !menuToggle.contains(e.target)) {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').className = 'fas fa-bars';
                    }
                });

                // Close menu when a link is clicked
                nav.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').className = 'fas fa-bars';
                    });
                });
            }

            // FAQ Accordion Toggle
            const faqItems = document.querySelectorAll('.faq-accordion-item');
            faqItems.forEach(item => {
                const header = item.querySelector('.faq-accordion-header');
                const toggle = item.querySelector('.faq-icon-toggle');
                
                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                        const otherToggle = otherItem.querySelector('.faq-icon-toggle');
                        if (otherToggle) otherToggle.textContent = '+';
                    });
                    
                    if (!isActive) {
                        item.classList.add('active');
                        if (toggle) toggle.textContent = '−';
                    } else {
                        item.classList.remove('active');
                        if (toggle) toggle.textContent = '+';
                    }
                });
            });
        });
    </script>
</body>
</html>
