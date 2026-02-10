@extends('Layout.frame')

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .journals-container {
    margin-top: 2rem;
    min-height: 100vh;
    background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
    padding: 60px 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
  }

  .journals-header {
    text-align: center;
    margin-bottom: 60px;
    animation: fadeInDown 0.8s ease-out;
  }

  .journals-title {
    font-size: 3rem;
    font-weight: 700;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 15px;
    letter-spacing: -1px;
  }

  .journals-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    font-weight: 400;
  }

  .categories-wrapper {
    max-width: 1400px;
    margin: 0 auto;
  }

  .category-section {
    margin-bottom: 70px;
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .category-section:nth-child(1) { animation-delay: 0.1s; }
  .category-section:nth-child(2) { animation-delay: 0.2s; }
  .category-section:nth-child(3) { animation-delay: 0.3s; }
  .category-section:nth-child(4) { animation-delay: 0.4s; }

  .category-header {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    padding: 0 10px;
  }

  .category-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    transition: transform 0.3s ease;
  }

  .category-icon:hover {
    transform: rotate(5deg) scale(1.05);
  }

  .category-icon svg {
    width: 26px;
    height: 26px;
    stroke: white;
    fill: none;
    stroke-width: 2;
  }

  .category-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1e293b;
    position: relative;
  }

  .category-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    border-radius: 2px;
  }

  .journals-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    padding: 0 10px;
  }

  .journal-card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }

  .journal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }

  .journal-card:hover::before {
    transform: scaleX(1);
  }

  .journal-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
  }

  .journal-name {
    font-size: 1.15rem;
    font-weight: 600;
    color: #1e293b;
    line-height: 1.6;
    margin-bottom: 15px;
    transition: color 0.3s ease;
  }

  .journal-card:hover .journal-name {
    color: #667eea;
  }

  .journal-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e2e8f0;
  }

  .meta-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
    color: #64748b;
    padding: 6px 12px;
    background: #f1f5f9;
    border-radius: 20px;
    transition: all 0.3s ease;
  }

  .meta-badge:hover {
    background: #e2e8f0;
    color: #475569;
  }

  .meta-badge svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2;
  }

  .view-link {
    margin-left: auto;
    color: #667eea;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.3s ease;
  }

  .view-link:hover {
    gap: 10px;
  }

  .view-link svg {
    width: 16px;
    height: 16px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2.5;
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

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

  @media (max-width: 768px) {
    .journals-title {
      font-size: 2rem;
    }

    .journals-grid {
      grid-template-columns: 1fr;
    }

    .category-title {
      font-size: 1.4rem;
    }
  }
</style>


<!-- Main Content Section -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .journals-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
    padding: 60px 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
  }

  .journals-header {
    text-align: center;
    margin-bottom: 60px;
    animation: fadeInDown 0.8s ease-out;
  }

  .journals-title {
    font-size: 3rem;
    font-weight: 700;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 15px;
    letter-spacing: -1px;
  }

  .journals-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    font-weight: 400;
  }

  .categories-wrapper {
    max-width: 1400px;
    margin: 0 auto;
  }

  .category-section {
    margin-bottom: 70px;
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
  }

  .category-section:nth-child(1) { animation-delay: 0.1s; }
  .category-section:nth-child(2) { animation-delay: 0.2s; }
  .category-section:nth-child(3) { animation-delay: 0.3s; }
  .category-section:nth-child(4) { animation-delay: 0.4s; }

  .category-header {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    padding: 0 10px;
  }

  .category-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    transition: transform 0.3s ease;
  }

  .category-icon:hover {
    transform: rotate(5deg) scale(1.05);
  }

  .category-icon svg {
    width: 26px;
    height: 26px;
    stroke: white;
    fill: none;
    stroke-width: 2;
  }

  .category-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1e293b;
    position: relative;
  }

  .category-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    border-radius: 2px;
  }

  .journals-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    padding: 0 10px;
  }

  .journal-card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }

  .journal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
  }

  .journal-card:hover::before {
    transform: scaleX(1);
  }

  .journal-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
  }

  .journal-name {
    font-size: 1.15rem;
    font-weight: 600;
    color: #1e293b;
    line-height: 1.6;
    margin-bottom: 15px;
    transition: color 0.3s ease;
  }

  .journal-card:hover .journal-name {
    color: #667eea;
  }

  .journal-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e2e8f0;
  }

  .meta-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
    color: #64748b;
    padding: 6px 12px;
    background: #f1f5f9;
    border-radius: 20px;
    transition: all 0.3s ease;
  }

  .meta-badge:hover {
    background: #e2e8f0;
    color: #475569;
  }

  .meta-badge svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2;
  }

  .view-link {
    margin-left: auto;
    color: #667eea;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: gap 0.3s ease;
  }

  .view-link:hover {
    gap: 10px;
  }

  .view-link svg {
    width: 16px;
    height: 16px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2.5;
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

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

  @media (max-width: 768px) {
    .journals-title {
      font-size: 2rem;
    }

    .journals-grid {
      grid-template-columns: 1fr;
    }

    .category-title {
      font-size: 1.4rem;
    }
  }
</style>

<div class="journals-container">
  <div class="journals-header">
    <h1 class="journals-title">Our Journals Collection</h1>
    <p class="journals-subtitle">Premier academic publishing platform dedicated to advancing research and knowledge</p>
  </div>

<div class="categories-wrapper">

@foreach ($category as $category)
  <div class="category-section">
    
    <!-- CATEGORY HEADER -->
    <div class="category-header">
      <div class="category-icon">
        <svg viewBox="0 0 24 24">
          <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
      </div>
      <h2 class="category-title">{{ $category->name }}</h2>
    </div>

    <!-- JOURNALS GRID -->
    <div class="journals-grid">

      @forelse ($category->journals as $journal)
        <div class="journal-card">
          <h3 class="journal-name">{{ $journal->title }}</h3>

          <div class="journal-meta">
            <span class="meta-badge">
              <svg viewBox="0 0 24 24">
                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
              </svg>
              {{ $journal->access_type ?? 'Open Access' }}
            </span>

            <a href="{{ route('journals.articles', $journal->id) }}" class="view-link">
              View Journal
              <svg viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      @empty
        <p style="padding:10px;color:#64748b;">
          No journals available under this category.
        </p>
      @endforelse

    </div>
  </div>
@endforeach

</div>
