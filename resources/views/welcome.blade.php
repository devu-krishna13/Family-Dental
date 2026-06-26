<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Dental Clinic in Kanjippuzha | Aligners & Implants</title>
    <meta name="description" content="Family Dental Clinic in Kanjippuzha offering Invisible Aligners and Dental Implants. Book a free consultation today.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="container header-inner">
            <a href="/" class="logo">FamilyDental.</a>
            <nav>
                <a href="/">🏠 Homepage</a>
                <a href="#aligners">🦷 Invisible Aligners</a>
                <a href="#implants">🔩 Dental Implants</a>
                <a href="#about">👨‍⚕️ About</a>
                <a href="#contact">📍 Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-content">
                    <div class="location-badge">
                        📍 Kanjippuzha • Vallikunnam • Alappuzha District
                    </div>
                    <h1>Family Dental Clinic in Kanjippuzha | Aligners & Implants</h1>
                    <p>Experience premium dental care in a comfortable environment. We specialize in giving you the perfect smile with state-of-the-art aligners and permanent dental implants.</p>
                    
                    <div class="hero-actions">
                        <button class="btn btn-primary">
                            📅 Book Free Consultation
                        </button>
                        <button class="btn btn-outline">
                            💬 WhatsApp Us
                        </button>
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
                    <div class="trust-value">4.9 ⭐</div>
                    <div class="trust-label">33 Google reviews</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">8+</div>
                    <div class="trust-label">Years experience</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">✅</div>
                    <div class="trust-label">BDS certified</div>
                </div>
            </div>
            <div class="scroll-indicator">↓</div>
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
                        <div class="service-icon">🦷</div>
                        <h3>Invisible Aligners</h3>
                        <p>Straighten your teeth discreetly with our custom-fit, comfortable invisible aligners. Perfect for adults and teens seeking a perfect smile without braces.</p>
                    </div>
                    
                    <div class="service-card" id="implants">
                        <div class="service-icon">🔩</div>
                        <h3>Dental Implants</h3>
                        <p>Restore your smile with permanent, natural-looking dental implants that function just like your real teeth. A lifetime solution for missing teeth.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">✨</div>
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
                        <li>Certified BDS Professional</li>
                        <li>Specialized in Invisible Aligners</li>
                        <li>Expert in Advanced Implantology</li>
                        <li>Commitment to Patient Comfort</li>
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
                        <div class="service-icon">🔬</div>
                        <h3>Advanced Technology</h3>
                        <p>We use state-of-the-art equipment for precise diagnostics and effective treatments.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon">😌</div>
                        <h3>Pain-Free Experience</h3>
                        <p>Our priority is your comfort, utilizing modern techniques to minimize discomfort.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon">💰</div>
                        <h3>Affordable Pricing</h3>
                        <p>Premium dental care that fits your budget, with flexible payment options available.</p>
                    </div>
                    <div class="feature-item">
                        <div class="service-icon">👨‍👩‍👧‍👦</div>
                        <h3>Family Friendly</h3>
                        <p>A welcoming environment designed to make patients of all ages feel right at home.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section (NEW) -->
        <section class="bg-alt">
            <div class="container">
                <div class="section-header">
                    <h2>What Our Patients Say</h2>
                    <p>Don't just take our word for it—read our 4.9-star Google Reviews.</p>
                </div>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"Got my invisible aligners from here and the results are amazing! The doctor is very patient and explained the entire process clearly. Highly recommend!"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #3b82f6;">A</div>
                            <div class="author-info">
                                <h4>Arjun K.</h4>
                                <span>Aligner Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"I was terrified of getting a dental implant, but the procedure was surprisingly painless. The clinic is incredibly clean and professional."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #ef4444;">M</div>
                            <div class="author-info">
                                <h4>Meera S.</h4>
                                <span>Implant Patient</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p class="testimonial-text">"Best dental clinic in the Alappuzha district! Took my entire family for a checkup and the staff was extremely friendly and welcoming."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar" style="background: #10b981;">R</div>
                            <div class="author-info">
                                <h4>Rahul P.</h4>
                                <span>General Dentistry</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section (NEW) -->
        <section>
            <div class="container">
                <div class="section-header">
                    <h2>Frequently Asked Questions</h2>
                    <p>Everything you need to know about our treatments.</p>
                </div>
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">How long do invisible aligners take to work?</div>
                        <div class="faq-answer">Treatment times vary depending on the complexity of your case, but most patients see final results in 6 to 18 months.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Are dental implants painful?</div>
                        <div class="faq-answer">No, the procedure is performed under local anesthesia. Most patients report less discomfort than a standard tooth extraction.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Do you offer consultation for children?</div>
                        <div class="faq-answer">Yes! We provide comprehensive pediatric dentistry in a fun, child-friendly environment.</div>
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
                    <button class="btn btn-primary">
                        📅 Book Free Consultation
                    </button>
                    <button class="btn btn-outline">
                        💬 WhatsApp Us
                    </button>
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
                        <span>📍</span>
                        <span>Kanjippuzha, Vallikunnam,<br>Alappuzha District, Kerala</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>📞</span>
                        <span>+91 98765 43210</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>🕒</span>
                        <span>Mon - Sat: 9:00 AM - 6:00 PM<br>Sunday: Closed</span>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Family Dental Care. All rights reserved. Designed for Excellence.</p>
            </div>
        </div>
    </footer>

</body>
</html>
