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
    <link rel="stylesheet" href="{{asset('css/general.css')}}">



</head>
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
                    <a href="{{route('journals.archive',$journal->id)}}">Archive</a>
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
            Current Issue
            <span class="issue-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
              @foreach ($journal->volumes as $volume )
               @foreach($volume->issues as $issue)
                  Vol. {{$volume->volume_label}} No. {{$issue->issue_number}} {{$volume->publication_year}}
                  @endforeach
              @endforeach
            
            </span>
          </h2>
        </div>

        <!-- Filter Controls -->
        <div class="filter-controls">
          <!-- <div class="search-box">
            <input type="text" placeholder="Search articles..." id="searchInput">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="11" cy="11" r="8"/>
              <path d="m21 21-4.35-4.35"/>
            </svg>
          </div>
          <select class="sort-dropdown" id="sortDropdown">
            <option>Sort by: Latest</option>
            <option>Sort by: Title A-Z</option>
            <option>Sort by: Title Z-A</option>
            <option>Sort by: Most Downloaded</option>
          </select>-->
         
         <form method="GET"
                          action="{{ route('journals.articles', $journal->id) }}"
                          id="filterForm">
                <div class="search-box">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search articles..."
                        id="searchInput"
                        value="{{ request('search') }}"
                    >

                    <svg class="search-icon" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                </div>

                <select class="sort-dropdown" name="sort" id="sortDropdown" style="margin-top: 5px;">
                    <option value="latest" {{ (request('sort', 'latest') === 'latest') ? 'selected' : '' }}>
                        Sort by: Latest
                    </option>

                    <option value="title_asc" {{ $sort === 'title_asc' ? 'selected' : '' }}>
                        Sort by: Title A-Z
                    </option>

                    <option value="title_desc" {{ $sort === 'title_desc' ? 'selected' : '' }}>
                        Sort by: Title Z-A
                    </option>

                    <!-- <option value="downloads" {{ $sort === 'downloads' ? 'selected' : '' }}>
                        Sort by: Most Downloaded
                    </option> -->
                </select>
        </form>




        </div>

        <!-- Articles List -->
        <div id="articlesList">
          <div class="article-item" style="animation-delay: 0s;">
            <!-- @foreach($journal->volumes as $volume)
            @foreach($volume->issues as $issue)
            @foreach($issue->articles as $article)
            <h3 class="article-title">{{$article->title}}</h3>
            @endforeach
            @endforeach
            @endforeach -->



               @foreach ($articles as $article)
                <h3 class="article-title"><a style="text-decoration: none; color:#000;" href="{{route('view.article',$article->id)}}">{{ $article->title }}</a></h3>

                <p>
                  Vol. {{ $article->issue->volume->volume_label }},
                  No. {{ $article->issue->issue_number }}
                </p>
              @endforeach





            <!-- <p class="article-authors"> -->
               @if ($article->authors->isNotEmpty())
                          <p class="article-authors">
                              {{ $article->authors
                                  ->map(fn($a) => $a->first_name.' '.$a->last_name)
                                  ->join(', ') }}
                          </p>
               @endif

            <!-- </p> -->
            <div class="article-meta">
              <span class="meta-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            
                @foreach ($articles as $article )
                 Pages: {{$article->pages}}  
                @endforeach
              </span>
              <span class="meta-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                  <line x1="16" y1="2" x2="16" y2="6"/>
                  <line x1="8" y1="2" x2="8" y2="6"/>
                  <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
                @foreach ($articles as $article )
                 Published: {{$article->published_at}}  
                @endforeach
                
              </span>
              <button class="download-btn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/>
                </svg>
              <a style="text-decoration: none; color:#64748b" href="{{ route('articles.download', $article->id) }}">
                Download
              </button>
              </a>
            </div>
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
          <div class="pagination">
              {{-- Previous --}}
              @if ($articles->onFirstPage())
                  <button class="page-btn" disabled>‹ Previous</button>
              @else
                  <a href="{{ $articles->previousPageUrl() }}" class="page-btn">
                      ‹ Previous
                  </a>
              @endif

              {{-- Page Numbers --}}
              @for ($page = 1; $page <= $articles->lastPage(); $page++)
                  <a href="{{ $articles->url($page) }}"
                    class="page-btn {{ $articles->currentPage() == $page ? 'active' : '' }}">
                      {{ $page }}
                  </a>
              @endfor

              {{-- Next --}}
              @if ($articles->hasMorePages())
                  <a href="{{ $articles->nextPageUrl() }}" class="page-btn">
                      Next ›
                  </a>
              @else
                  <button class="page-btn" disabled>Next ›</button>
              @endif
          </div>


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