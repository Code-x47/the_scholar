

<div class="container">

    {{-- Journal Info --}}
    <div class="issue-header">
        <h2>{{ $issue->volume->journal->title }}</h2>

        <p class="issue-meta">
            Volume {{ $issue->volume->volume_label }}
            ({{ $issue->volume->publication_year }}) —
            Issue {{ $issue->issue_number }}
        </p>
    </div>

    {{-- Articles --}}
    @forelse ($articles as $article)
        <div class="article-card">

            <h3 class="article-title">
                {{ $article->title }}
            </h3>

            {{-- Optional authors --}}
            @if(!empty($article->authors))
                <p class="article-authors">
                    {{ $article->authors }}
                </p>
            @endif

            <p class="article-abstract">
                {!! Str::limit($article->abstract, 250) !!}
            </p>

            <div class="article-actions">
                <a href="" class="btn">
                    View Article
                </a>

                @if($article->pdf_path)
                    <a href="{{ asset('storage/'.$article->pdf_path) }}"
                       class="btn"
                       target="_blank">
                        Download PDF
                    </a>
                @endif
            </div>
        </div>
    @empty
        <p>No published articles in this issue.</p>
    @endforelse

    {{-- Pagination --}}
    <div class="pagination">
        @for ($i = 1; $i <= $articles->lastPage(); $i++)
            <a href="{{ $articles->url($i) }}"
               class="page-btn {{ $articles->currentPage() == $i ? 'active' : '' }}">
                {{ $i }}
            </a>
        @endfor
    </div>

</div>


