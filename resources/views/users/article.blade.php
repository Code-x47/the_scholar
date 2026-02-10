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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-banner {
            background: linear-gradient(135deg, #1e5a7d 0%, #2d7ba5 100%);
            padding: 40px 20px;
            text-align: center;
        }

        .header-banner h1 {
            color: white;
            font-size: 3.5rem;
            font-weight: 300;
            letter-spacing: 8px;
            margin-bottom: 10px;
        }

        .header-banner p {
            color: white;
            font-size: 1.1rem;
            letter-spacing: 2px;
        }

        nav {
            background: #003d5c;
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
        }

        nav li {
            margin: 0;
        }

        nav a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px 25px;
            font-weight: 500;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #005580;
        }

        .breadcrumb {
            background: #f5f5f5;
            padding: 12px 20px;
            font-size: 0.9rem;
            border-bottom: 1px solid #ddd;
        }

        .breadcrumb a {
            color: #0066cc;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
        }

        .main-content {
            padding-right: 20px;
        }

        .article-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
            font-weight: 400;
        }

        .article-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .author-info {
            margin-bottom: 30px;
        }

        .author-name {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .author-affiliation {
            color: #666;
        }

        .section-title {
            font-size: 1.5rem;
            margin: 30px 0 15px 0;
            color: #333;
            font-weight: 500;
        }

        .keywords {
            color: #555;
            line-height: 1.8;
        }

        .abstract-text {
            text-align: justify;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .stats {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            font-size: 0.95rem;
            color: #666;
        }

        .references {
            margin-top: 30px;
        }

        .references ol {
            padding-left: 20px;
        }

        .references li {
            margin-bottom: 15px;
            line-height: 1.7;
        }

        .references a {
            color: #0066cc;
            text-decoration: none;
        }

        .references a:hover {
            text-decoration: underline;
        }

        .sidebar {
            background: #f9f9f9;
            padding: 20px;
            height: fit-content;
            position: sticky;
            top: 70px;
        }

        .sidebar-section {
            margin-bottom: 30px;
        }

        .sidebar-section h3 {
            font-size: 1.1rem;
            margin-bottom: 15px;
            color: #333;
        }

        .pdf-btn {
            display: inline-block;
            background: white;
            border: 2px solid #0066cc;
            color: #0066cc;
            padding: 8px 20px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            margin-bottom: 15px;
        }

        .pdf-btn:hover {
            background: #0066cc;
            color: white;
        }

        .metadata {
            font-size: 0.9rem;
            line-height: 1.8;
        }

        .metadata strong {
            display: block;
            margin-top: 10px;
        }

        .metadata a {
            color: #0066cc;
            text-decoration: none;
            word-break: break-all;
        }

        .citation-box {
            background: white;
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px 0;
            font-size: 0.9rem;
        }

        .more-formats-btn {
            background: #000;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
        }

        .indexing-logos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 15px;
        }

        .indexing-logos img {
            width: 100%;
            height: auto;
        }

        .similar-articles {
            margin-top: 40px;
        }

        .similar-articles ul {
            padding-left: 20px;
        }

        .similar-articles li {
            margin-bottom: 15px;
            line-height: 1.7;
        }

        .similar-articles a {
            color: #0066cc;
            text-decoration: none;
        }

        .similar-articles a:hover {
            text-decoration: underline;
        }

        .pagination {
            margin: 20px 0;
        }

        .pagination a {
            color: #0066cc;
            text-decoration: none;
            margin-right: 8px;
        }

        footer {
            background: #003d5c;
            color: white;
            padding: 40px 20px;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .footer-section p, .footer-section a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }

        .footer-section a:hover {
            color: white;
        }

        @media (max-width: 968px) {
            .container {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
            }

            nav ul {
                flex-wrap: wrap;
            }

            .header-banner h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-banner">
            <h1>{{$journal->title}}</h1>
            <p>{{$journal->publisher}}</p>
        </div>
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#current">CURRENT</a></li>
                <li><a href="#archives">ARCHIVES</a></li>
                <li><a href="#translated">TRANSLATED ISSUES</a></li>
                <li><a href="#announcements">ANNOUNCEMENTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <div class="breadcrumb">
        <a href="#home">Home</a> / <a href="#archives">Archives</a> / <a href="#volume">Vol. {{$volume->volume_label}} No. {{$issue->issue_number}} {{$volume->publication_year}}: {{$journal->title}}</a> / <span>Articles</span>
    </div>

    <div class="container">
        <main class="main-content">
            <h1 class="article-title">{{$article->title}}</h1>
            <p class="article-subtitle">A Discursive Tradition Approach</p>

            <div class="author-info">
                <!-- <div class="author-name">Abbas Jong</div>
                <div class="author-affiliation">Freie Universität Berlin</div> -->
                @if ($article->authors->isNotEmpty())
                          <p class="article-authors">
                               <b>{{ $article->authors
                                  ->map(fn($a) => $a->first_name.' '.$a->last_name)
                                  ->join(', ') }}</b>
                          </p>
               @endif
            </div>

            <section>
                <h2 class="section-title">Keywords</h2>
                <p class="keywords">Tech, AI, Deep Learning</p>
            </section>

            <section>
                <h2 class="section-title">Abstract</h2>
                <p class="abstract-text">
                    {!! $article->abstract !!}
                </p>
                <!-- <p class="abstract-text">
                    Drawing on Talal Asad's notion of discursive tradition, the analysis reconstructs Political Islam as a set of social configurations, which enables a multilayered reading of Political Islam across three analytical levels: conditions of possibility, categorical and discursive formation, and social objectification. This theoretical reconstruction clarifies how Islamist discourses emerge not from doctrinal continuity alone, but through strategic negotiations over core issues such as temporality, authority, power, and legitimacy.
                </p>
                <p class="abstract-text">
                    Through comparative and context-sensitive examination of various Islamist traditions—from reformist to revolutionary, nationalist to transnational, moderate to militant—the article shows how Political Islam operates through a grammar of differentiation and reconfiguration within the broader Islamic tradition. The resulting framework not only situates Political Islam within shifting social terrains, but also offers an epistemological intervention into its interpretation as a plural, indeterminate, and generative discursive tradition.
                </p> -->

                <div class="stats">
                    <span>Abstract 👁 2210</span>
                    <span>| PDF Downloads ⬇ 554</span>
                </div>
            </section>

        <section class="references">
            @if($article->references->isNotEmpty())
            <h3>References</h3>
                <ol>
                    @foreach($article->references as $reference)
                    <li>
                        {!! nl2br(e($reference->citation)) !!}
                        @if($reference->doi)
                        — <a href="https://doi.org/{{ $reference->doi }}" target="_blank">
                            {{ $reference->doi }}
                        </a>
                        @endif
                    </li>
                    @endforeach
                </ol>
                @endif

            </section>

     @if($similarArticles->isNotEmpty())
        <section class="similar-articles">
            <h3>Similar Articles</h3>

            <ul>
            @foreach ($similarArticles as $similar)
                <li>
                <a href="{{ route('articles.show', $similar) }}">
                    {{ $similar->title }}
                </a>
                <br>
                <small>
                    Vol. {{ $similar->issue->volume->volume_label }},
                    No. {{ $similar->issue->issue_number }}
                    ({{ $similar->published_at?->format('Y') }})
                </small>
                </li>
            @endforeach
            </ul>
        </section>
        @endif

        </main>

        <aside class="sidebar">
            <div class="sidebar-section">
                <a href="{{route('articles.download', $article->id)}}" class="pdf-btn">PDF</a>
                
                <div class="metadata">
                    <strong>Published</strong>
                    {{$article->published_at}}
                    
                    <strong>DOI</strong>
                    <a href="#">https://doi.org/10.35632/ajis.v42i3-4.3609</a>
                </div>
            </div>

            <div class="sidebar-section">
                <h3>How to Cite</h3>
                <div class="citation-box">
                    {!! $article->apaCitation() !!}

                </div>
                <button class="more-formats-btn">More Citation Formats ▼</button>
            </div>

            <div class="sidebar-section">
                <strong>Issue</strong>
                <p><a href="#">Vol. {{$volume->volume_label}} No. {{$issue->issue_number}} ({{$volume->publication_year}}): {{$journal->slug}}</a></p>
            </div>

            <div class="sidebar-section">
                <strong>Section</strong>
                <p>Articles</p>
            </div>

            <div class="sidebar-section">
                <h3>Abstracting & Indexing</h3>
                <div class="indexing-logos">
                    <div style="padding: 10px; background: white; text-align: center;">Google Scholar</div>
                    <div style="padding: 10px; background: white; text-align: center;">Scopus</div>
                    <div style="padding: 10px; background: white; text-align: center;">DOAJ</div>
                    <div style="padding: 10px; background: white; text-align: center;">ProQuest</div>
                    <div style="padding: 10px; background: white; text-align: center;">ATLA</div>
                    <div style="padding: 10px; background: white; text-align: center;">EBSCO</div>
                </div>
            </div>
        </aside>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>ABOUT THE JOURNAL</h3>
                <p>Established in 1984, the American Journal of Artificial Intellegence (JOAI) is a biannual (April and October), double-blind peer-reviewed and interdisciplinary journal, published by the International Institute of Artificial Intelligence (IIAI), and distributed worldwide.</p>
            </div>
            <div class="footer-section">
                <h3>IMPORTANT LINKS</h3>
                <a href="#">Editorial Team</a>
                <a href="#">Submissions</a>
                <a href="#">Contact</a>
            </div>
            <div class="footer-section">
                <h3>CONTACT</h3>
                <p>Email: joai@iiit.org</p>
                <p>Phone: 703-230-2847</p>
                <p>Mailing Address: JOAI<br>500 Grove St. #200<br>Herndon, VA 20170</p>
            </div>
            <div class="footer-section">
                <h3>TWITTER FEED</h3>
                <a href="#">Tweets by @IIITtrends</a>
            </div>
        </div>
    </footer>

    <script>
        // Simple citation format toggle
        const formatBtn = document.querySelector('.more-formats-btn');
        if (formatBtn) {
            formatBtn.addEventListener('click', function() {
                alert('Additional citation formats:\n\n- APA\n- MLA\n- Chicago\n- Harvard\n- Vancouver\n\nSelect your preferred format.');
            });
        }

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>