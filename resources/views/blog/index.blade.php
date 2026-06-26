<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dental Health Blog | Family Dental Clinic Kanjippuzha</title>
    <meta name="description" content="Explore professional dental health articles, guides, and tips from our lead specialist at Family Dental Clinic Kanjippuzha.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <a href="/#aligners"><i class="fas fa-teeth"></i> Invisible Aligners</a>
                <a href="/#implants"><i class="fas fa-tooth"></i> Dental Implants</a>
                <a href="/#about"><i class="fas fa-user-md"></i> About</a>
                <a href="/blog" class="active"><i class="fas fa-newspaper"></i> Blog</a>
                <a href="/#contact"><i class="fas fa-map-marker-alt"></i> Contact</a>
            </nav>
        </div>
    </header>

    <main style="padding-top: 8rem;">
        <!-- Blog Intro Section -->
        <section style="padding: 4rem 0 2rem;">
            <div class="container">
                <div class="section-header" style="margin-bottom: 3rem;">
                    <h2>Dental Health & Insights</h2>
                    <p>Expert advice, guides, and tips from our specialist team to keep your smile healthy and radiant.</p>
                </div>

                <!-- Category Filters -->
                <div class="blog-filters">
                    @foreach($categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category === 'All' ? null : $category]) }}" 
                           class="filter-pill {{ ($selectedCategory == $category || (!$selectedCategory && $category == 'All')) ? 'active' : '' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Articles Grid Section -->
        <section style="padding: 2rem 0 7rem;">
            <div class="container">
                @if(count($articles) > 0)
                    <div class="blog-grid">
                        @foreach($articles as $article)
                            <article class="blog-card-item">
                                <div class="blog-card-image">
                                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}">
                                    <span class="blog-card-category">{{ $article['category'] }}</span>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-meta">
                                        <span><i class="far fa-calendar"></i> {{ $article['date'] }}</span>
                                        <span><i class="far fa-clock"></i> {{ $article['read_time'] }}</span>
                                    </div>
                                    <h3><a href="{{ route('blog.show', $article['slug']) }}">{{ $article['title'] }}</a></h3>
                                    <p>{{ $article['excerpt'] }}</p>
                                    <a href="{{ route('blog.show', $article['slug']) }}" class="blog-card-link">
                                        Read Article <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center; padding: 4rem 0;">
                        <i class="fas fa-search" style="font-size: 3rem; color: var(--text-muted); margin-bottom: 1.5rem;"></i>
                        <h3>No articles found in this category</h3>
                        <p style="color: var(--text-muted); margin-top: 0.5rem;">Check back soon for new guides and articles.</p>
                        <a href="{{ route('blog.index') }}" class="btn btn-primary" style="margin-top: 1.5rem;">View All Articles</a>
                    </div>
                @endif
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
                        <li><a href="/#about">About Us</a></li>
                        <li><a href="/#services">Our Services</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="/#aligners">Invisible Aligners</a></li>
                        <li><a href="/#implants">Dental Implants</a></li>
                        <li><a href="/#services">General Dentistry</a></li>
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

                document.addEventListener('click', function(e) {
                    if (nav.classList.contains('active') && !nav.contains(e.target) && !menuToggle.contains(e.target)) {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').className = 'fas fa-bars';
                    }
                });
            }
        });
    </script>
</body>
</html>
