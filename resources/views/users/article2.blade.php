<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reconfiguring Political Islam - AJIS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        /* Top Navigation */
        .top-nav {
            background: rgba(255, 255, 255, 0.98);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }

        .logo-text h1 {
            font-size: 1.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .logo-text p {
            font-size: 0.85rem;
            color: #666;
        }

        .main-nav {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .main-nav a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            font-size: 0.95rem;
        }

        .main-nav a:hover {
            color: #667eea;
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #4a5c8f 0%, #5d4e7f 100%);
            padding: 80px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
        }

        .journal-icon {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .hero-title {
            font-size: 3rem;
            color: white;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero-description {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.85);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Main Content */
        .content-wrapper {
            max-width: 1400px;
            margin: -50px auto 50px;
            padding: 0 30px;
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 40px;
            position: relative;
            z-index: 10;
        }

        .main-content {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .breadcrumb {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 30px;
        }

        .breadcrumb a {
            color: #667eea;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .article-title {
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.3;
        }

        .article-subtitle {
            font-size: 1.3rem;
            color: #667eea;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .author-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ebf0 100%);
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 700;
        }

        .author-name {
            font-weight: 700;
            font-size: 1.15rem;
            color: #1a1a1a;
        }

        .author-affiliation {
            color: #666;
            font-size: 0.95rem;
        }

        .section-title {
            font-size: 1.8rem;
            margin: 40px 0 20px 0;
            color: #1a1a1a;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title::before {
            content: '';
            width: 5px;
            height: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 3px;
        }

        .keywords-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 20px 0;
        }

        .keyword-tag {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            color: #667eea;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 2px solid rgba(102, 126, 234, 0.2);
        }

        .abstract-text {
            text-align: justify;
            line-height: 1.9;
            margin-bottom: 20px;
            font-size: 1.05rem;
            color: #444;
        }

        .stats-bar {
            display: flex;
            gap: 30px;
            margin: 30px 0;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ebf0 100%);
            border-radius: 15px;
            font-weight: 600;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #555;
        }

        .references-list {
            padding-left: 20px;
        }

        .references-list li {
            margin-bottom: 20px;
            line-height: 1.8;
            color: #444;
        }

        .references-list a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .references-list a:hover {
            text-decoration: underline;
        }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .sidebar-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            margin-bottom: 25px;
        }

        .sidebar-card h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #1a1a1a;
            font-weight: 700;
        }

        .download-btn {
            display: block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
        }

        .download-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .metadata-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }

        .metadata-item:last-child {
            border-bottom: none;
        }

        .metadata-label {
            font-weight: 700;
            color: #667eea;
            margin-bottom: 8px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .metadata-value {
            color: #444;
            line-height: 1.6;
        }

        .metadata-value a {
            color: #667eea;
            text-decoration: none;
            word-break: break-all;
        }

        .citation-box {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 8px;
            font-size: 0.95rem;
            line-height: 1.8;
            margin: 20px 0;
        }

        .action-btn {
            background: #1a1a1a;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            border-radius: 10px;
            font-size: 0.95rem;
            transition: background 0.3s;
        }

        .action-btn:hover {
            background: #333;
        }

        .indexing-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .index-badge {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ebf0 100%);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            color: #555;
            font-size: 0.9rem;
        }

        /* Similar Articles */
        .similar-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            margin-top: 40px;
        }

        .similar-list {
            list-style: none;
            padding: 0;
        }

        .similar-item {
            padding: 20px;
            margin-bottom: 15px;
            background: #f8f9fa;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .similar-item:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .similar-item a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .similar-item a:hover {
            color: #764ba2;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
            color: white;
            padding: 60px 30px 30px;
            margin-top: 80px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #fff;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            line-height: 1.8;
        }

        .footer-section a:hover {
            color: #fff;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }

        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }

            .main-nav {
                display: none;
            }

            .hero-title {
                font-size: 2rem;
            }

            .main-content {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Navigation -->
    <nav class="top-nav">
        <div class="logo-section">
            <div class="logo-icon">📚</div>
            <div class="logo-text">
                <h1>The Scholar Time</h1>
                <p>Premier Academic Publishing</p>
            </div>
        </div>
        <div class="main-nav">
            <a href="#home">Home</a>
            <a href="#journals">Journals</a>
            <a href="#service">Service Charge</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#submit" class="submit-btn">Submit Journal</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="journal-icon">📖</div>
            <h2 class="hero-title">American Journal of Islam and Society</h2>
            <p class="hero-description">An international multidisciplinary open access journal dedicated to promoting the latest discoveries in Islamic studies and society research.</p>
            
            <div class="hero-stats">
                <div class="stat-card">
                    <div class="stat-value">2383-6355</div>
                    <div class="stat-label">ISSN</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">4.1</div>
                    <div class="stat-label">Impact Factor</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">Bi-Monthly</div>
                    <div class="stat-label">Frequency</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">15-45 Days</div>
                    <div class="stat-label">Publication</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="content-wrapper">
        <main class="main-content">
            <div class="breadcrumb">
                <a href="#home">Home</a> / <a href="#archives">Archives</a> / <a href="#volume">Vol. 42 No. 3-4 (2025)</a> / <span>Articles</span>
            </div>

            <h1 class="article-title">Reconfiguring Political Islam</h1>
            <p class="article-subtitle">A Discursive Tradition Approach</p>

            <div class="author-card">
                <div class="author-avatar">AJ</div>
                <div>
                    <div class="author-name">Abbas Jong</div>
                    <div class="author-affiliation">Freie Universität Berlin</div>
                </div>
            </div>

            <section>
                <h2 class="section-title">Keywords</h2>
                <div class="keywords-container">
                    <span class="keyword-tag">Political Islam</span>
                    <span class="keyword-tag">Islamism</span>
                    <span class="keyword-tag">Discursive Tradition</span>
                    <span class="keyword-tag">Islamic Tradition</span>
                    <span class="keyword-tag">Talal Asad</span>
                </div>
            </section>

            <section>
                <h2 class="section-title">Abstract</h2>
                <p class="abstract-text">
                    This article reconceptualizes Political Islam through the analytic lens of discursive tradition, restructured within the framework of social configurations. Departing from essentialist, universalist, nominalist, and reductionist readings, the study foregrounds the epistemological contingencies and internal pluralities that characterize Political Islam as a historically situated and discursively constructed phenomenon.
                </p>
                <p class="abstract-text">
                    Rather than treating political Islam as a fixed ideological project or a transhistorical expression of Islamic governance, the article theorizes it as a dynamic and contested tradition in which diverse actors articulate Islamic categories within distinct configurations shaped by contextual transformations, historical ruptures, institutional dislocations, regimes of reasoning, and so on.
                </p>
                <p class="abstract-text">
                    Drawing on Talal Asad's notion of discursive tradition, the analysis reconstructs Political Islam as a set of social configurations, which enables a multilayered reading of Political Islam across three analytical levels: conditions of possibility, categorical and discursive formation, and social objectification. This theoretical reconstruction clarifies how Islamist discourses emerge not from doctrinal continuity alone, but through strategic negotiations over core issues such as temporality, authority, power, and legitimacy.
                </p>

                <div class="stats-bar">
                    <div class="stat-item">
                        <span>👁</span>
                        <span>2210 Views</span>
                    </div>
                    <div class="stat-item">
                        <span>📥</span>
                        <span>554 Downloads</span>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="section-title">References</h2>
                <ol class="references-list">
                    <li>Ahmad, I. (2009). Genealogy of the Islamic state: Reflections on Maududi's political thought and Islamism. <em>Journal of the Royal Anthropological Institute</em>, 15(1), 145–162. <a href="#">https://doi.org/10.1111/j.1467-9655.2009.01547.x</a></li>
                    <li>Ahmed, S. (2016). <em>What Is Islam? The Importance of Being Islamic</em>. Princeton: Princeton University Press.</li>
                    <li>Anjum, O. (2007). Islam as a Discursive Tradition: Talal Asad and His Interlocutors. <em>Comparative Studies of South Asia, Africa and the Middle East</em>, 27(3), 656–672.</li>
                    <li>Arjomand, S. A. (1995). The Search for Fundamentals and Islamic Fundamentalism. In L. V. Tijssen, J. Berting, & F. Lechner (Eds.), <em>The Search for Fundamentals</em> (pp. 27–39). Dordrecht: Springer Netherlands.</li>
                    <li>Asad, T. (2003). <em>Formations of the Secular: Christianity, Islam, Modernity</em>. Stanford: Stanford University Press.</li>
                    <li>Asad, T. (2009). The Idea of an Anthropology of Islam. <em>Qui Parle</em>, 17(2), 1–30.</li>
                </ol>
            </section>
        </main>

        <aside class="sidebar">
            <div class="sidebar-card">
                <a href="#pdf" class="download-btn">📄 Download PDF</a>
                
                <div class="metadata-item">
                    <div class="metadata-label">Published</div>
                    <div class="metadata-value">November 10, 2025</div>
                </div>

                <div class="metadata-item">
                    <div class="metadata-label">DOI</div>
                    <div class="metadata-value">
                        <a href="#">https://doi.org/10.35632/ajis.v42i3-4.3609</a>
                    </div>
                </div>

                <div class="metadata-item">
                    <div class="metadata-label">Volume</div>
                    <div class="metadata-value">Vol. 42 No. 3-4 (2025)</div>
                </div>

                <div class="metadata-item">
                    <div class="metadata-label">Section</div>
                    <div class="metadata-value">Articles</div>
                </div>
            </div>

            <div class="sidebar-card">
                <h3>📋 How to Cite</h3>
                <div class="citation-box">
                    Jong, A. (2025). Reconfiguring Political Islam: A Discursive Tradition Approach. <em>American Journal of Islam and Society</em>, <em>42</em>(3-4), 6-41.
                </div>
                <button class="action-btn">More Formats ▼</button>
            </div>

            <div class="sidebar-card">
                <h3>🏆 Indexing & Abstracting</h3>
                <div class="indexing-grid">
                    <div class="index-badge">Google Scholar</div>
                    <div class="index-badge">Scopus</div>
                    <div class="index-badge">DOAJ</div>
                    <div class="index-badge">ProQuest</div>
                    <div class="index-badge">ATLA</div>
                    <div class="index-badge">EBSCO</div>
                </div>
            </div>
        </aside>
    </div>

    <!-- Similar Articles -->
    <div class="content-wrapper">
        <div class="similar-section">
            <h2 class="section-title">Related Articles</h2>
            <ul class="similar-list">
                <li class="similar-item">
                    <a href="#">Religion as Critique: Islamic Critical Thinking from Mecca to the Marketplace</a>
                    <div style="font-size: 0.9rem; color: #666; margin-top: 5px;">American Journal of Islam and Society: Vol. 35 No. 3 (2018)</div>
                </li>
                <li class="similar-item">
                    <a href="#">Salafism in Nigeria: Islam, Preaching, and Politics</a>
                    <div style="font-size: 0.9rem; color: #666; margin-top: 5px;">American Journal of Islam and Society: Vol. 35 No. 3 (2018)</div>
                </li>
                <li class="similar-item">
                    <a href="#">ISIS and the Challenge of Interpreting Islam</a>
                    <div style="font-size: 0.9rem; color: #666; margin-top: 5px;">American Journal of Islam and Society: Vol. 34 No. 1 (2017)</div>
                </li>
                <li class="similar-item">
                    <a href="#">Encyclopaedic Works on Islamic Political Thought and Movements</a>
                    <div style="font-size: 0.9rem; color: #666; margin-top: 5px;">American Journal of Islam and Society: Vol. 32 No. 4 (2015)</div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About the Journal</h3>
                <p>Established in 1984, the American Journal of Islam and Society (AJIS) is a biannual double-blind peer-reviewed interdisciplinary journal, published by the International Institute of Islamic Thought (IIIT).</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#">Editorial Team</a>
                <a href="#">Submission Guidelines</a>
                <a href="#">Peer Review Process</a>
                <a href="#">Open Access Policy</a>
            </div>
            <div class="footer-section">
                <h3>Contact Information</h3>
                <p>Email: ajis@iiit.org</p>
                <p>Phone: 703-230-2847</p>
                <p>Address: 500 Grove St. #200<br>Herndon, VA 20170, USA</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <a href="#">Twitter @IIITtrends</a>
                <a href="#">Facebook</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 American Journal of Islam and Society. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Citation formats toggle
        document.querySelector('.action-btn').addEventListener('click', function() {
            alert('Additional citation formats:\n\n• APA\n• MLA\n• Chicago\n• Harvard\n• Vancouver\n• BibTeX\n\nSelect your preferred format to copy.');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>