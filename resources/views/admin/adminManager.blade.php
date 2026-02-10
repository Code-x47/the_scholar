<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Research Dashboard</title>
<link rel="stylesheet" href="{{asset('css/adminManager.css')}}">

</head>

<body>
  @if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif

<header class="header">
  <div class="header-content">
    <div class="header-left">
      <div class="logo">📚</div>
      <div class="header-title">
        <h1>Research Dashboard</h1>
        <p>Manage submissions & publications</p>
      </div>
    </div>
    <button class="btn-primary">+ New</button>
  </div>
</header>

<div class="container">
  <!-- Stats -->
  <div class="stats-grid">
    <div class="stat-card">
      <div class="stat-value">1,247</div>
      <div class="stat-label">Total Submissions</div>
    </div>
    <div class="stat-card">
      <div class="stat-value">89</div>
      <div class="stat-label">Under Review</div>
    </div>
    <div class="stat-card">
      <div class="stat-value">856</div>
      <div class="stat-label">Published Papers</div>
    </div>
    <div class="stat-card">
      <div class="stat-value">24</div>
      <div class="stat-label">Active Journals</div>
    </div>
  </div>

  <!-- Tabs -->
  <div class="tabs-container">
    <div class="tabs-header">
      <div class="tabs">
        
        <button class="tab active" data-tab="category">Category</button>
        <button class="tab" data-tab="journal">Journals</button>
        <button class="tab" data-tab="volume">Volumes</button>
        <button class="tab" data-tab="issues">Issues</button>
        <button class="tab" data-tab="articles">Articles</button>
        
      </div>
    </div>
     
    <div class="tab-content active" id="category">
        
        <div class="quick-actions">
       
        @foreach($category as $cat)<div class="action-card"><h3>{{$cat['name']}}</h3><p>89 Journals</p> 
          <button
            class="btn-primary btn-add-journal"
            data-category-id="{{ $cat->id }}">
            Add Journal
          </button>

        </div> @endforeach
        
      </div>
     
    </div>


    <div class="tab-content" id="journal">
    <div class="table-container">
        <div class="table-header">
        <h2>Research Journals</h2>
        <input type="text" id="journalSearch" placeholder="Search journals..." />
        </div>

    <div class="table-wrapper">
      <table id="journalTable">
        <thead>
          <tr>
            <th>Journal Title</th>
            <th>Description</th>
            <th>Publisher</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($journal as $journal)
            
          
          <tr>
            <td>{{$journal['title']}}</td>
            <td>{{$journal['description']}}</td>
            <td>{{$journal['publisher']}}</td>
            <td>
            <button
            type="button"
            class="btn-primary btn-add-volume"
            data-journal-id="{{$journal->id}}">
            Add Volume
           </button>
           </td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>


  <div class="tab-content" id="volume">
    <div class="table-container">
        <div class="table-header">
        <h2>Volumes</h2>
        <input type="text" id="journalSearch" placeholder="Search volume..." />
        </div>

    <div class="table-wrapper">
      <table id="journalTable">
        <thead>
          <tr>
            <th>Journal Title</th>
            
            <th>Volume Number</th>
            <th>Volume Label</th>
            <th>Publication Year</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($volume as $vol)
          <tr>
            <td>Journal of AI</td>
            <td>{{$vol['volume_number']}}</td>
            <td>{{$vol['volume_label']}}</td>
            <td>{{$vol['publication_year']}}</td>
            <td>
              <button
              type="button"
              class="btn-primary btn-add-issue"
              data-volume-id="{{ $vol->id }}">
              Add Issue
              </button>

            </td>
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</div>


<div class="tab-content" id="issues">
    <div class="table-container">
        <div class="table-header">
        <h2>Issues</h2>
        <input type="text" id="journalSearch" placeholder="Search issues..." />
        </div>

    <div class="table-wrapper">
      <table id="journalTable">
        <thead>
          <tr>
            <th>Title</th>  
            <th>Issue Number</th>
            <th>Volume ID</th>
            <th>Publication Date</th>
            <th>Status</th>
            <th>Add Article</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($issue as $issue)
          
          <tr>
            <td>{{$issue['title']}}</td>
            <td>{{$issue['issue_number']}}</td>
            <td>{{$issue['volume_id']}}</td>
            <td>{{$issue['publication_date']}}</td>
            <td>{{$issue['status']}}</td>
            <td>
                <button
                  type="button"
                  class="btn-primary"
                  data-issue-id="">
                  <a style="text-decoration: none; color:beige" href="{{route('article.form',$issue->id)}}">
                  Add Article
                  </a>
                </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

    <div class="tab-content" id="articles">
    <div class="table-container">
        <div class="table-header">
        <h2>Articles</h2>
        <input type="text" id="journalSearch" placeholder="Search Article..." />
        </div>

        <div class="table-wrapper">
        <table id="journalTable">
            <thead>
            <tr>
                <th>Journal Title</th>
                 <th>Article</th>
                <td>Volume Label</td>
                <td>Issue_Id</td>

                <th>Status</th>
                 <th>Author</th>
                <th>Action</th>
            </tr>
            </thead>
        <tbody>
         
           @foreach($journal->volumes as $volume)
            @foreach($volume->issues as $issue)
            @foreach($issue->articles as $article)
            
            <tr>
                <td>{{$journal->title}}</td>
                <td>{{$article->title}}</td>
                <td>{{$volume->volume_label}}</td>
                <td>{{$issue->issue_number}}</td>
                <td>{{$issue->status}}</td>
                <td>
                     @if ($article->authors->isNotEmpty())
                          <p class="article-authors">
                              {{ $article->authors
                                  ->map(fn($a) => $a->first_name.' '.$a->last_name)
                                  ->join(', ') }}
                          </p>
                        @endif

                </td>
                <td><button
                style="background-color: red; color:#d1fae5"
                type="button"
                class="action-btn btn-delete"
                data-id="">
                Delete
              </button>


               <button
                style="background-color: orange; color:#d1fae5"
                type="button"
                class="action-btn btn-edit"
                data-id="">
                Edit
              </button>


              <button
                style="background-color: Green; color:#d1fae5"
                type="button"
                class="action-btn btn-edit"
                data-id="">
                <a style="text-decoration: none; color:beige" href="{{route('add.author',$article->id)}}">
                Add Author
                </a>
              </button>

              <button
                style="background-color: blue; color:#d1fae5"
                type="button"
                class="action-btn btn-edit"
                data-id="">
                <a style="text-decoration: none; color:beige" href="{{route('add.reference',$article->id)}}">
                Add Reference
                </a>
              </button>

              </td>
            </tr>
        </tbody>
    
        @endforeach
        @endforeach
        @endforeach
        </table>
        </div>
  </div>
</div>


  </div>
</div>


<!-- Modals -->
 <!-- Create Category Modal -->
<div class="modal-overlay" id="categoryModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Create Category</h3>
      <button class="modal-close" id="closeModal">&times;</button>
    </div>

    <form class="modal-body" action="{{route('add.category')}}" method="post">
      @csrf
      <div class="form-group">
        <label>Category Name</label>
        <input type="text" name="name" placeholder="e.g. Science & Technology" required>
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea placeholder="Brief description (optional)" name="description"></textarea>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn-secondary" id="cancelModal">Cancel</button>
        <button type="submit" class="btn-primary">Create Category</button>
      </div>
    </form>
  </div>
</div>

<!-- Create Journal Modal -->
<div class="modal-overlay" id="journalModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Create Journal</h3>
      <button class="modal-close" id="closeJournalModal">&times;</button>
    </div>

    <form class="modal-body" action="create_journal" method="post">
      @csrf

      <input type="hidden" name="category_id" id="category_id">

      <div class="form-group">
        <label>Journal Title</label>
        <input type="text" name="title" placeholder="e.g. Journal of Artificial Intelligence">
      </div>

      <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" placeholder="journal-of-artificial-intelligence">
      </div>

      <div class="form-group">
        <label>Description</label>
        <textarea name="description" placeholder="Brief journal description"></textarea>
      </div>

      <div class="form-group">
        <label>ISSN (optional)</label>
        <input type="text" name="issn" placeholder="e-ISSN or p-ISSN">
      </div>

      <div class="form-group">
        <label>Publisher</label>
        <input type="text" name="publisher" placeholder="e.g. OpenAI Press">
      </div>

      <div class="form-group">
        <label>Language</label>
        <select name="lang">
          <option value="en">English</option>
          <option value="fr">French</option>
          <option value="es">Spanish</option>
        </select>
      </div>

      <div class="form-group">
        <label>
          <input type="checkbox" checked>
          Active
        </label>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn-secondary" id="cancelJournalModal">Cancel</button>
        <button type="submit" class="btn-primary">Create Journal</button>
      </div>
    </form>
  </div>
</div>



<!-- Create Volume Modal -->
<div class="modal-overlay" id="volumeModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Create Volume</h3>
      <button class="modal-close" id="closeVolumeModal">&times;</button>
    </div>

    <form class="modal-body" action="{{route('add.volume')}}" method="post">
      @csrf
    <!-- Hidden Journal ID -->
      <input type="hidden" id="volumeJournalId" name="journal_id">

      <div class="form-group">
        <label>Volume Number</label>
        <input type="number" name="volume" min="1" placeholder="e.g. 5">
      </div>

       <div class="form-group">
        <label>Volume Label</label>
        <input type="text" name="volume_label"  placeholder="e.g. 5.5 special">
      </div>

      <div class="form-group">
        <label>Publication Year</label>
        <input name="year" type="number" min="1900" max="2100" placeholder="e.g. 2025">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn-secondary" id="cancelVolumeModal">
          Cancel
        </button>
        <button type="submit" class="btn-primary">
          Create Volume
        </button>
      </div>
    </form>
  </div>
</div>



<!-- Add Issues Modal -->

<!-- Create Issue Modal -->
<div class="modal-overlay" id="issueModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Create Issue</h3>
      <button class="modal-close" id="closeIssueModal">&times;</button>
    </div>

    <form class="modal-body" action="{{route('add.issue')}}" method="post">
     @csrf  
    <!-- Hidden Volume ID -->
      <input type="hidden" id="issueVolumeId" name="volume_id">

      <div class="form-group">
        <label>Issue Number</label>
        <input
          type="number"
          min="1"
          placeholder="e.g. 1"
          name="number"
          required>
      </div>

      <div class="form-group">
        <label>Issue Title (optional)</label>
        <input
          name="title"
          type="text"
          placeholder="Special Issue on AI Ethics">
      </div>

      <div class="form-group">
        <label>Publication Date</label>
        <input type="date" name="date">
      </div>

      <div class="form-group">
        <label>Status</label>
        <select name="status">
          <option value="draft">Draft</option>
          <option value="published">Published</option>
        </select>
      </div>

      <div class="modal-footer">
        <button
          type="button"
          class="btn-secondary"
          id="cancelIssueModal">
          Cancel
        </button>
        <button
          type="submit"
          class="btn-primary"
          >
          
          Create Issue
        </button>
      </div>
    </form>
  </div>
</div>


<!-- Create Article Modal -->
<div class="modal-overlay" id="articleModal">
  <div class="modal">
    <div class="modal-header">
      <h3>Create Article</h3>
      <button class="modal-close" id="closeArticleModal">&times;</button>
    </div>

    <form class="modal-body">
      <!-- Hidden Issue ID -->
      <input type="hidden" id="articleIssueId" name="issue_id">

      <div class="form-group">
        <label>Article Title</label>
        <input
          type="text"
          placeholder="Enter article title"
          required>
      </div>

      <div class="form-group">
        <label>Abstract</label>
        <textarea
          placeholder="Short abstract of the article"
          required></textarea>
      </div>

      <div class="form-group">
        <label>Content (optional)</label>
        <textarea
          placeholder="Full article content or markdown"
          rows="4"></textarea>
      </div>

      <div class="form-group">
        <label>PDF File (optional)</label>
        <input type="file" accept="application/pdf">
      </div>

      <div class="form-group">
        <label>DOI (optional)</label>
        <input
          type="text"
          placeholder="10.xxxx/xxxx">
      </div>

      <div class="form-group">
        <label>Publication Date</label>
        <input type="date">
      </div>

      <div class="form-group">
        <label>Status</label>
        <select>
          <option value="submitted">Submitted</option>
          <option value="accepted">Accepted</option>
          <option value="published">Published</option>
        </select>
      </div>

      <div class="modal-footer">
        <button
          type="button"
          class="btn-secondary"
          id="cancelArticleModal">
          Cancel
        </button>
        <button
          type="submit"
          class="btn-primary">
          Create Article
        </button>
      </div>
    </form>
  </div>
</div>


<!--Create volume Script-->

<script>
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".tab");
  const tabContents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // remove active state
      tabs.forEach(t => t.classList.remove("active"));
      tabContents.forEach(c => c.classList.remove("active"));

      // activate selected
      tab.classList.add("active");
      const target = document.getElementById(tab.dataset.tab);
      if (target) {
        target.classList.add("active");
      }
    });
  });
});
</script>

<!--Create Category Script-->

<script>
document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("journalSearch");
  const tableRows = document.querySelectorAll("#journalTable tbody tr");

  searchInput.addEventListener("keyup", () => {
    const query = searchInput.value.toLowerCase();

    tableRows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(query) ? "" : "none";
    });
  });
});
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
  const openBtn = document.querySelector(".btn-primary");
  const modal = document.getElementById("categoryModal");
  const closeBtn = document.getElementById("closeModal");
  const cancelBtn = document.getElementById("cancelModal");

  openBtn.addEventListener("click", () => {
    modal.classList.add("active");
  });

  closeBtn.addEventListener("click", () => {
    modal.classList.remove("active");
  });

  cancelBtn.addEventListener("click", () => {
    modal.classList.remove("active");
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("active");
    }
  });
});
</script>

<!--Add Journal Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const journalModal = document.getElementById("journalModal");
  const categoryInput = document.getElementById('category_id');
  const openJournalBtns = document.querySelectorAll(".btn-add-journal");
  const closeJournalBtn = document.getElementById("closeJournalModal");
  const cancelJournalBtn = document.getElementById("cancelJournalModal");

  openJournalBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      categoryInput.value = btn.dataset.categoryId;
      journalModal.classList.add("active");
    });
  });

  closeJournalBtn.addEventListener("click", () => {
    journalModal.classList.remove("active");
  });

  cancelJournalBtn.addEventListener("click", () => {
    journalModal.classList.remove("active");
  });

  journalModal.addEventListener("click", (e) => {
    if (e.target === journalModal) {
      journalModal.classList.remove("active");
    }
  });
});
</script>


<!--Volume script-->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const volumeModal = document.getElementById("volumeModal");
   //const categoryInput = document.getElementById('journal_id');
  const openVolumeBtns = document.querySelectorAll(".btn-add-volume");
  const closeVolumeBtn = document.getElementById("closeVolumeModal");
  const cancelVolumeBtn = document.getElementById("cancelVolumeModal");
  const journalIdInput = document.getElementById("volumeJournalId");

  openVolumeBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const journalId = btn.dataset.journalId;
      journalIdInput.value = journalId;
      volumeModal.classList.add("active");
    });
  });

  closeVolumeBtn.addEventListener("click", () => {
    volumeModal.classList.remove("active");
  });

  cancelVolumeBtn.addEventListener("click", () => {
    volumeModal.classList.remove("active");
  });

  volumeModal.addEventListener("click", (e) => {
    if (e.target === volumeModal) {
      volumeModal.classList.remove("active");
    }
  });
});
</script>


<!-- Add Issue Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const issueModal = document.getElementById("issueModal");
  const openIssueBtns = document.querySelectorAll(".btn-add-issue");
  const closeIssueBtn = document.getElementById("closeIssueModal");
  const cancelIssueBtn = document.getElementById("cancelIssueModal");
  const volumeIdInput = document.getElementById("issueVolumeId");

  openIssueBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const volumeId = btn.dataset.volumeId;
      volumeIdInput.value = volumeId;
      issueModal.classList.add("active");
    });
  });

  closeIssueBtn.addEventListener("click", () => {
    issueModal.classList.remove("active");
  });

  cancelIssueBtn.addEventListener("click", () => {
    issueModal.classList.remove("active");
  });

  issueModal.addEventListener("click", (e) => {
    if (e.target === issueModal) {
      issueModal.classList.remove("active");
    }
  });
});
</script>

<!-- Create Article Script -->

<script>
document.addEventListener("DOMContentLoaded", () => {
  const articleModal = document.getElementById("articleModal");
  const openArticleBtns = document.querySelectorAll(".btn-add-article");
  const closeArticleBtn = document.getElementById("closeArticleModal");
  const cancelArticleBtn = document.getElementById("cancelArticleModal");
  const issueIdInput = document.getElementById("articleIssueId");

  openArticleBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const issueId = btn.dataset.issueId;
      issueIdInput.value = issueId;
      articleModal.classList.add("active");
    });
  });

  closeArticleBtn.addEventListener("click", () => {
    articleModal.classList.remove("active");
  });

  cancelArticleBtn.addEventListener("click", () => {
    articleModal.classList.remove("active");
  });

  articleModal.addEventListener("click", (e) => {
    if (e.target === articleModal) {
      articleModal.classList.remove("active");
    }
  });
});
</script>




</body>
</html>
