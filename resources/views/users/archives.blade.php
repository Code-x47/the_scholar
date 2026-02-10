<!-- Journal Articles Page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Scholar Time - Premier Academic Journal Publication</title>
    <meta name="description" content="The Scholar Time publishes high-quality, peer-reviewed open access research across all disciplines. Fast publication within 30 days.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/frame.css')}}">



<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .journal-page {
    /* margin-top: 2rem; */
    min-height: 100vh;
    background: linear-gradient(135deg, #f8f9fc 0%, #eef1f7 100%);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
  }

  /* Hero Banner Section */
  .journal-hero {
    margin-top: 1rem;
    background: linear-gradient(135deg, #2d3561 0%, #1e2442 100%);
    padding: 80px 20px 60px;
    position: relative;
    overflow: hidden;
  }

  .journal-hero::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 600px;
    height: 600px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.15) 0%, rgba(118, 75, 162, 0.15) 100%);
    border-radius: 50%;
    transform: translate(30%, -30%);
  }

  .hero-content {
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  .journal-logo {
    width: 80px;
    height: 80px;
    background: white;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    animation: fadeInUp 0.8s ease-out;
  }

  .journal-logo svg {
    width: 45px;
    height: 45px;
    fill: #667eea;
  }

  .journal-main-title {
    font-size: 3rem;
    color: white;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
    animation: fadeInUp 0.8s ease-out 0.1s backwards;
  }

  .journal-description {
    font-size: 1.15rem;
    color: rgba(255, 255, 255, 0.85);
    max-width: 800px;
    margin-bottom: 30px;
    line-height: 1.6;
    animation: fadeInUp 0.8s ease-out 0.2s backwards;
  }

  .journal-stats {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease-out 0.3s backwards;
  }

  .stat-item {
    display: flex;
    flex-direction: column;
  }

  .stat-value {
    font-size: 1.8rem;
    font-weight: 700;
    color: white;
    margin-bottom: 5px;
  }

  .stat-label {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Main Content Area */
  .content-wrapper {
    max-width: 1400px;
    margin: -40px auto 0;
    padding: 0 20px 60px;
    position: relative;
    z-index: 3;
  }

  .content-grid {
    display: grid;
    grid-template-columns: 1fr 350px;
    gap: 40px;
  }

  /* Articles Section */
  .articles-section {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    animation: fadeInUp 0.8s ease-out 0.4s backwards;
  }

  .section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 35px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f1f5f9;
  }

  .section-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1e293b;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .issue-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 8px 18px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
  }

  .filter-controls {
    display: flex;
    gap: 15px;
    margin-bottom: 30px;
    flex-wrap: wrap;
  }

  .search-box {
    flex: 1;
    min-width: 250px;
    position: relative;
  }

  .search-box input {
    width: 100%;
    padding: 12px 45px 12px 20px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    outline: none;
  }

  .search-box input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
  }

  .search-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    stroke: #94a3b8;
  }

  .sort-dropdown {
    padding: 12px 20px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 0.95rem;
    background: white;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
  }

  .sort-dropdown:focus {
    border-color: #667eea;
  }

  /* Article Card */
  .article-item {
    padding: 30px;
    border-bottom: 1px solid #f1f5f9;
    transition: all 0.3s ease;
    cursor: pointer;
    opacity: 0;
    animation: fadeInUp 0.5s ease-out forwards;
  }

  .article-item:last-child {
    border-bottom: none;
  }

  .article-item:hover {
    background: #f8fafc;
    transform: translateX(5px);
  }

  .article-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 12px;
    line-height: 1.5;
    transition: color 0.3s ease;
  }

  .article-item:hover .article-title {
    color: #667eea;
  }

  .article-authors {
    font-size: 0.95rem;
    color: #64748b;
    margin-bottom: 15px;
    line-height: 1.5;
  }

  .article-meta {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    align-items: center;
  }

  .meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
    color: #64748b;
  }

  .meta-item svg {
    width: 16px;
    height: 16px;
    stroke: currentColor;
  }

  .download-btn {
    margin-left: auto;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: white;
    border: 2px solid #667eea;
    color: #667eea;
    border-radius: 10px;
    font-weight: 600;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .download-btn:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
  }

  .download-btn svg {
    width: 18px;
    height: 18px;
    stroke: currentColor;
  }

  /* Sidebar */
  .sidebar {
    display: flex;
    flex-direction: column;
    gap: 25px;
  }

  .sidebar-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    animation: fadeInUp 0.8s ease-out backwards;
  }

  .sidebar-card:nth-child(1) { animation-delay: 0.5s; }
  .sidebar-card:nth-child(2) { animation-delay: 0.6s; }
  .sidebar-card:nth-child(3) { animation-delay: 0.7s; }

  .sidebar-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .sidebar-title svg {
    width: 22px;
    height: 22px;
    stroke: #667eea;
  }

  .detail-row {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid #f1f5f9;
    font-size: 0.9rem;
  }

  .detail-row:last-child {
    border-bottom: none;
  }

  .detail-label {
    color: #64748b;
    font-weight: 500;
  }

  .detail-value {
    color: #1e293b;
    font-weight: 600;
    text-align: right;
  }

  .category-link {
    display: block;
    padding: 12px 0;
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    border-bottom: 1px solid #f1f5f9;
  }

  .category-link:last-child {
    border-bottom: none;
  }

  .category-link:hover {
    transform: translateX(5px);
    color: #764ba2;
  }

  .related-journal {
    display: block;
    padding: 15px;
    background: #f8fafc;
    border-radius: 10px;
    margin-bottom: 12px;
    text-decoration: none;
    color: #1e293b;
    font-weight: 500;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    border-left: 3px solid #667eea;
  }

  .related-journal:hover {
    background: #eff1f9;
    transform: translateX(5px);
    box-shadow: 0 2px 8px rgba(102, 126, 234, 0.15);
  }

  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 2px solid #f1f5f9;
  }

  .page-btn {
    padding: 10px 16px;
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    color: #64748b;
    transition: all 0.3s ease;
  }

  .page-btn:hover {
    border-color: #667eea;
    color: #667eea;
  }

  .page-btn.active {
    background: #667eea;
    color: white;
    border-color: #667eea;
  }

  /* Animations */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .content-grid {
      grid-template-columns: 1fr;
    }

    .sidebar {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }
  }

  @media (max-width: 768px) {
    .journal-main-title {
      font-size: 2rem;
    }

    .journal-stats {
      gap: 25px;
    }

    .articles-section {
      padding: 25px;
    }

    .article-meta {
      flex-direction: column;
      align-items: flex-start;
    }

    .download-btn {
      margin-left: 0;
      width: 100%;
      justify-content: center;
    }

    .filter-controls {
      flex-direction: column;
    }

    .search-box {
      min-width: 100%;
    }
  }
</style>


<header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <!-- <div class="logo-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <div class="logo-text">
                        <h1 class="font-serif">The Scholar Time</h1>
                        <p>Premier Academic Publishing</p>
                    </div> -->
                </div>

                <nav>
                    <a href="{{route('index')}}">Home</a>
                    <a href="#journals">Archive</a>
                    <a href="#submit">Current</a>
                    <a href="#about">Editors</a>
                    <a href="#contact">Contact</a>
                    <!-- <button class="btn btn-primary"><a style="color: #fff; text-decoration:none;" href="{{route('journal.form')}}">Submit Journal</a></button> -->
                </nav>

                <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>

            <div class="mobile-menu" id="mobileMenu">
                <a href="{{route('index')}}">Home</a>
                <a href="#journals">Journals</a>
                <a href="#submit">Submit Paper</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <button class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Submit Journal</button>
            </div>
        </div>
    </header>

</head>




<div class="journal-page">
  <!-- Hero Banner -->
  <div class="journal-hero">
    <div class="hero-content">
      <!-- <div class="journal-logo">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 19.5A2.5 2.5 0 016.5 17H20M4 19.5A2.5 2.5 0 016.5 22H20M20 17V7a2 2 0 00-2-2h-6l-2-2H6a2 2 0 00-2 2v12.5" stroke="currentColor" stroke-width="2"/>
        </svg>
      </div> -->
      <h1 class="journal-main-title">{{$journal['title']}}</h1>
      <p class="journal-description">
      {{$journal['description']}}
      </p>
      <div class="journal-stats">
        <div class="stat-item">
          <span class="stat-value">2383 - 6355</span>
          <span class="stat-label">ISSN</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">4.1</span>
          <span class="stat-label">Impact Factor</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">Bi-Monthly</span>
          <span class="stat-label">Frequency</span>
        </div>
        <div class="stat-item">
          <span class="stat-value">15-45 Days</span>
          <span class="stat-label">Publication Duration</span>
        </div>

        <div class="stat-item">
          <span class="stat-value"><a style="text-decoration: none; color:#eef1f7;" href="#">Policies</a></span>
          <span class="stat-label">Publishing Policies</span>
        </div>

        <div class="stat-item">
          <span class="stat-value"><a style="text-decoration: none; color:#eef1f7;" href="#">Process</a></span>
          <span class="stat-label">Publication Process</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content-wrapper">
    <div class="content-grid">
      <!-- Articles Section -->
      <div class="articles-section">
        <div class="section-header">
          <h2 class="section-title">
            Past Issue
            <span class="issue-badge">
              <h3>Archive</h3>
            
            </span>
          </h2>
        </div>

        <!-- Filter Controls -->
        

        <!-- Articles List -->
  <div id="articlesList">
          <div class="article-item" style="animation-delay: 0s;">
              <h1>{{ $journal->title }} — Archive</h1>

      <!-- @forelse ($journal->volumes as $volume)
          <section class="volume-block">
            <h2>
              Volume {{ $volume->volume_label }}
              ({{ $volume->publication_year }})
            </h2>

            <ul>
              @forelse ($volume->issues as $issue)
                <li>
                  <a href="{{ route('issues.articles', $issue) }}">
                    Issue {{ $issue->issue_number }}
                    — {{ $issue->publication_date?->format('Y-m-d') }}
                  </a>
                </li>
              @empty
                <li>No issues published.</li>
              @endforelse
            </ul>
          </section>
              @empty
                <p>No archived volumes.</p>
              @endforelse
    -->

      @forelse ($journal->volumes as $volume)
  <section class="volume-block">
    <h2>
      Volume {{ $volume->volume_label }}
      ({{ $volume->publication_year }})
    </h2>

    <a href="{{ route('issues.articles', $volume) }}">
      View Volume
    </a>
  </section>
@empty
  <p>No archived volumes.</p>
@endforelse




    </div>

          
    </div>

        <!-- Pagination -->
        <!-- <div class="pagination">
          <button class="page-btn">‹ Previous</button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <button class="page-btn">Next ›</button>
        </div> -->

        <!-- Pagination -->
          


      </div>

      <!-- Sidebar -->
      <aside class="sidebar">
        <!-- Journal Details -->
        <div class="sidebar-card">
          <h3 class="sidebar-title">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4M12 8h.01"/>
            </svg>
            Journal Details
          </h3>
          <div class="detail-row">
            <span class="detail-label">ISSN:</span>
            <span class="detail-value">2383 - 6355</span>
          </div>
          <div class="detail-row">
            <span class="detail-label">Volume:</span>
            @foreach($journal->volumes as $volume)
            <span class="detail-value">{{$volume->volume_number}}, {{$volume->publication_year}}</span>
            @endforeach
          </div>
          <div class="detail-row">
            <span class="detail-label">Frequency:</span>
            <span class="detail-value">Bi-Monthly</span>
          </div>
          <div class="detail-row">
            <span class="detail-label">Impact Factor:</span>
            <span class="detail-value">4.1</span>
          </div>
          <div class="detail-row">
            <span class="detail-label">Duration:</span>
            <span class="detail-value">15-45 days</span>
          </div>
          <div class="detail-row">
            <span class="detail-label">Nature:</span>
            <span class="detail-value">Print & Online</span>
          </div>
          <div class="detail-row">
        


        <script>
        document.getElementById('sortDropdown').addEventListener('change', () => {
            document.getElementById('filterForm').submit();
        });

        document.getElementById('searchInput').addEventListener('keyup', (e) => {
            if (e.key === 'Enter') {
                document.getElementById('filterForm').submit();
            }
        });
      </script>
</body>

</html>