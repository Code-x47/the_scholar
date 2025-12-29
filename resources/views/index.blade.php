@extends("Layout.frame")
@section('content')
    
    <!-- Hero Carousel -->
    <div class="hero-carousel" id="heroCarousel">
        <div class="carousel-slide active">
            <img src="Images/img6.jpg" alt="Academic Research">
            <div class="carousel-overlay">
                <div class="carousel-content">
                    <h2 class="font-serif">Publish Your Research with Excellence</h2>
                    <p>Join thousands of scholars worldwide in sharing groundbreaking research</p>
                    <div class="carousel-buttons">
                        <button class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1rem;">Submit Your Paper</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="Images/img2.jpg" alt="Peer Review Process">
            <div class="carousel-overlay">
                <div class="carousel-content">
                    <h2 class="font-serif">Fast & Rigorous Peer Review</h2>
                    <p>Get your research published within 30 days with our efficient review process</p>
                    <div class="carousel-buttons">
                        <button class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1rem;">Learn More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-slide">
            <img src="Images/img1.jpg" alt="Global Impact">
            <div class="carousel-overlay">
                <div class="carousel-content">
                    <h2 class="font-serif">Global Visibility & Impact</h2>
                    <p>100% open access ensures your research reaches scholars worldwide</p>
                    <div class="carousel-buttons">
                        <button class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1rem;">Explore Journals</button>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-arrow prev" onclick="changeSlide(-1)">‹</button>
        <button class="carousel-arrow next" onclick="changeSlide(1)">›</button>

        <div class="carousel-nav">
            <span class="carousel-dot active" onclick="goToSlide(0)"></span>
            <span class="carousel-dot" onclick="goToSlide(1)"></span>
            <span class="carousel-dot" onclick="goToSlide(2)"></span>
        </div>
    </div>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="font-serif">Why Choose The Scholar Time?</h2>
                <p>Experience excellence in academic publishing with our comprehensive services</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, hsl(221, 83%, 53%), hsl(221, 83%, 60%));">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3 class="font-serif">Fast Publication</h3>
                    <p>Get your research published within 30 days with our efficient peer review and publication process.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, hsl(262, 83%, 58%), hsl(262, 83%, 65%));">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif">Expert Peer Review</h3>
                    <p>Rigorous evaluation by leading experts in your field ensures the highest quality standards.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, hsl(38, 92%, 50%), hsl(38, 92%, 57%));">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif">100% Open Access</h3>
                    <p>Your research is freely accessible to scholars worldwide, maximizing impact and citations.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, hsl(170, 70%, 45%), hsl(170, 70%, 52%));">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="font-serif">Global Indexing</h3>
                    <p>All publications are indexed in major academic databases for maximum visibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Disciplines Section -->
    <section id="journals" style="background-color: var(--background);">
        <div class="container">
            <div class="section-header">
                <h2 class="font-serif">Explore Journals by Discipline</h2>
                <p>Discover peer-reviewed journals across diverse academic fields</p>
            </div>

            <div class="disciplines-grid">
                <div class="discipline-card">
                    <h3 class="font-serif">Social Sciences & Humanities</h3>
                    <p style="color: var(--muted-foreground); margin: 1rem 0;">Psychology, Sociology, Education, Literature, History</p>
                    <a href="{{route('journal.socials')}}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Explore Journals →</a>
                </div>

                <div class="discipline-card">
                    <h3 class="font-serif">Business and Finance</h3>
                    <p style="color: var(--muted-foreground); margin: 1rem 0;">Management, Economics, Accounting, Marketing, Finance</p>
                    <a href="{{route('journal.biz')}}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Explore Journals →</a>
                </div>

                <div class="discipline-card">
                    <h3 class="font-serif">Science and Technology</h3>
                    <p style="color: var(--muted-foreground); margin: 1rem 0;">Engineering, Computer Science, Physics, Chemistry, Biology</p>
                    <a href="{{route('journal.sci')}}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Explore Journals →</a>
                </div>

                <div class="discipline-card">
                    <h3 class="font-serif">Multidisciplinary</h3>
                    <p style="color: var(--muted-foreground); margin: 1rem 0;">Cross-disciplinary research and interdisciplinary studies</p>
                    <a href="{{route('journal.multi')}}" style="color: var(--primary); font-weight: 600; text-decoration: none;">Explore Journals →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section style="background-color: var(--muted);">
        <div class="container">
            <div class="section-header">
                <h2 class="font-serif">Recent Publications</h2>
                <p>Discover the latest research from our global community of scholars</p>
            </div>

            <div class="publications-grid">
                <div class="publication-card">
                    <span class="publication-badge">Journal of Advanced Technology</span>
                    <h3 class="font-serif" style="margin-bottom: 1rem;">Machine Learning Applications in Healthcare Diagnostics</h3>
                    <p style="color: var(--muted-foreground); font-size: 0.875rem; margin-bottom: 0.5rem;">
                        <strong>Authors:</strong> Dr. Sarah Johnson, Prof. Michael Chen
                    </p>
                    <p style="color: var(--muted-foreground); font-size: 0.875rem; margin-bottom: 1rem;">
                        <strong>Date:</strong> December 2024
                    </p>
                    <p style="color: var(--muted-foreground); line-height: 1.7; margin-bottom: 1.5rem;">
                        This study explores the integration of deep learning algorithms in medical imaging for early disease detection...
                    </p>
                    <button class="btn" style="width: 100%; background: white; color: var(--primary); border: 1px solid var(--border);">Read More →</button>
                </div>

                <div class="publication-card">
                    <span class="publication-badge">International Journal of Urban Studies</span>
                    <h3 class="font-serif" style="margin-bottom: 1rem;">Sustainable Urban Development: A Comprehensive Framework</h3>
                    <p style="color: var(--muted-foreground); font-size: 0.875rem; margin-bottom: 0.5rem;">
                        <strong>Authors:</strong> Prof. Amanda White, Dr. James Rodriguez
                    </p>
                    <p style="color: var(--muted-foreground); font-size: 0.875rem; margin-bottom: 1rem;">
                        <strong>Date:</strong> November 2024
                    </p>
                    <p style="color: var(--muted-foreground); line-height: 1.7; margin-bottom: 1.5rem;">
                        An innovative approach to sustainable city planning incorporating environmental and social factors...
                    </p>
                    <button class="btn" style="width: 100%; background: white; color: var(--primary); border: 1px solid var(--border);">Read More →</button>
                </div>

                <div class="publication-card">
                    <span class="publication-badge">Journal of Computer Science</span>
                    <h3 class="font-serif" style="margin-bottom: 1rem;">Quantum Computing and Cryptographic Security</h3>
                    <p style="color: var(--muted-foreground); font-size: 0.875rem; margin-bottom: 0.5rem;">
                        <strong>Authors:</strong> Dr. Robert Kim, Dr. Lisa Anderson
                    </p>
                    <p style="color: var(--muted-foreground); font-size: 0.875rem; margin-bottom: 1rem;">
                        <strong>Date:</strong> November 2024
                    </p>
                    <p style="color: var(--muted-foreground); line-height: 1.7; margin-bottom: 1.5rem;">
                        Examining the implications of quantum computing on modern encryption methods and future security protocols...
                    </p>
                    <button class="btn" style="width: 100%; background: white; color: var(--primary); border: 1px solid var(--border);">Read More →</button>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <button class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1rem;">View All Publications</button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="submit" class="cta-section">
        <div class="cta-background"></div>
        <div class="container">
            <div class="cta-content">
                <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                </div>
                
                <h2 class="font-serif" style="font-size: 3rem; margin-bottom: 1.5rem;">Ready to Share Your Research?</h2>
                <p style="font-size: 1.5rem; margin-bottom: 2.5rem; opacity: 0.9;">
                    Join thousands of scholars worldwide. Publish your research with fast turnaround, professional support, and global visibility.
                </p>
                
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <button class="btn" style="background: white; color: var(--primary); padding: 1rem 2.5rem; font-size: 1rem;">
                        Submit Your Paper Now
                    </button>
                    <button class="btn" style="background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.3); padding: 1rem 2.5rem; font-size: 1rem;">
                        Learn More About Process
                    </button>
                </div>

                <div class="cta-stats">
                    <div>
                        <div class="stat-number">30 Days</div>
                        <div style="opacity: 0.8;">Publication Time</div>
                    </div>
                    <div>
                        <div class="stat-number">$75</div>
                        <div style="opacity: 0.8;">Processing Fee</div>
                    </div>
                    <div>
                        <div class="stat-number">100%</div>
                        <div style="opacity: 0.8;">Open Access</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <script>
        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('active');
        }

        // Carousel
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        let autoplayInterval;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            if (n >= slides.length) currentSlide = 0;
            if (n < 0) currentSlide = slides.length - 1;
            
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function changeSlide(direction) {
            currentSlide += direction;
            if (currentSlide >= slides.length) currentSlide = 0;
            if (currentSlide < 0) currentSlide = slides.length - 1;
            showSlide(currentSlide);
            resetAutoplay();
        }

        function goToSlide(n) {
            currentSlide = n;
            showSlide(currentSlide);
            resetAutoplay();
        }

        function autoplay() {
            currentSlide++;
            if (currentSlide >= slides.length) currentSlide = 0;
            showSlide(currentSlide);
        }

        function resetAutoplay() {
            clearInterval(autoplayInterval);
            autoplayInterval = setInterval(autoplay, 5000);
        }

        // Start autoplay
        autoplayInterval = setInterval(autoplay, 5000);

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    // Close mobile menu if open
                    document.getElementById('mobileMenu').classList.remove('active');
                }
            });
        });

        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.feature-card, .discipline-card, .publication-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(el);
        });
    </script>
@endsection