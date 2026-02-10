<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Research Dashboard</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}




.table-container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  padding: 1rem;
}

.table-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.table-header h2 {
  font-size: 1.2rem;
  color: #333;
}

#journalSearch {
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  width: 240px;
  max-width: 100%;
}

.table-wrapper {
  overflow-x: auto;
  border-radius: 8px;
  border: 1px solid #ddd;
}

table {
  width: 100%;
  border-collapse: collapse;
  min-width: 600px;
}

thead {
  background-color: #f3f3f3;
}

th, td {
  padding: 12px 16px;
  text-align: left;
  border-bottom: 1px solid #eee;
  white-space: nowrap;
}

tr:hover {
  background-color: #f9f9f9;
}

@media (max-width: 600px) {
  th, td {
    padding: 10px;
  }
  #journalSearch {
    width: 100%;
    margin-top: 0.5rem;
  }
}




/*End of table*/




body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  background: linear-gradient(135deg, #e0f2fe 0%, #f3e8ff 50%, #fce7f3 100%);
  min-height: 100vh;
  line-height: 1.5;
}

/* Header */
.header {
  background: white;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  position: sticky;
  top: 0;
  z-index: 100;
}

.header-content {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0.75rem 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 0.75rem;
}

.header-left {
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

.logo {
  background: linear-gradient(135deg, #2563eb, #9333ea);
  padding: 0.6rem;
  border-radius: 0.75rem;
  flex-shrink: 0;
  font-size: 1.25rem;
  color: white;
}

.header-title h1 {
  font-size: clamp(1rem, 2.5vw, 1.3rem);
  color: #1f2937;
  font-weight: 700;
}

.header-title p {
  font-size: 0.8rem;
  color: #6b7280;
}

.btn-primary {
  padding: 0.5rem 0.9rem;
  background: linear-gradient(135deg, #2563eb, #9333ea);
  color: white;
  border: none;
  border-radius: 0.5rem;
  cursor: pointer;
  font-weight: 500;
  font-size: 0.875rem;
  transition: all 0.2s ease-in-out;
}
.btn-primary:hover { opacity: 0.9; }

/* Container */
.container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 1rem;
}

/* Stats Section */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.stat-card {
  background: white;
  border-radius: 1rem;
  padding: 1.25rem;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  text-align: center;
}
.stat-value {
  font-size: 1.5rem;
  font-weight: 700;
  color: #1f2937;
}
.stat-label {
  color: #6b7280;
  font-size: 0.9rem;
}

/* Tabs */
.tabs-container {
  background: white;
  border-radius: 1rem;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  margin-bottom: 1.5rem;
  overflow: hidden;
}

.tabs-header {
  border-bottom: 1px solid #e5e7eb;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
}

.tabs {
  display: flex;
  gap: 0.5rem;
  padding: 0.5rem 1rem;
}

.tab {
  padding: 0.75rem 1rem;
  background: none;
  border: none;
  border-bottom: 2px solid transparent;
  color: #6b7280;
  font-weight: 500;
  cursor: pointer;
  white-space: nowrap;
  font-size: 0.9rem;
  scroll-snap-align: start;
  transition: all 0.2s ease-in-out;
}

.tab.active {
  color: #9333ea;
  border-bottom-color: #9333ea;
}

.tab-content {
  padding: 1rem;
  opacity: 0;
  display: none;
  transform: translateY(10px);
  transition: opacity 0.4s ease, transform 0.4s ease;
}

.tab-content.active {
  display: block;
  opacity: 1;
  transform: translateY(0);
}

/* Cards */
.quick-actions, .submission-cards, .journal-grid, .reviewer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 1rem;
}

.action-card, .submission-card, .journal-card, .reviewer-card {
  background: white;
  border-radius: 0.75rem;
  padding: 1rem;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.action-card {
  border: 2px dashed #d1d5db;
  cursor: pointer;
  transition: transform 0.2s ease-in-out;
}
.action-card:hover { transform: scale(1.02); }

/* Submission cards */
.submission-card.priority-high { border-left: 4px solid #ef4444; }
.submission-card.priority-medium { border-left: 4px solid #f59e0b; }
.submission-card.priority-low { border-left: 4px solid #10b981; }

.submission-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.status-badge {
  padding: 0.375rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 500;
}
.status-under_review { background: #fef3c7; color: #92400e; }
.status-pending { background: #f3f4f6; color: #374151; }
.status-accepted { background: #d1fae5; color: #065f46; }

.action-btn {
  padding: 0.45rem;
  background: #f3f4f6;
  border: none;
  border-radius: 0.375rem;
  cursor: pointer;
  font-size: 0.75rem;
}

/* Responsive adjustments */
@media (max-width: 640px) {
  .header-content { flex-direction: column; align-items: flex-start; }
  .btn-primary { width: 100%; }
  .tab-content { padding: 0.75rem; }
}
</style>
</head>

<body>
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
        
        <button class="tab active" data-tab="overview">Overview</button>
        <button class="tab" data-tab="submissions">Submissions</button>
        <button class="tab" data-tab="journals">Journals</button>
        <button class="tab" data-tab="reviewers">Reviewers</button>
        
      </div>
    </div>

    <div class="tab-content active" id="overview">
      <div class="quick-actions">
        <div class="action-card"><h3>Review Queue</h3><p>89 awaiting</p></div>
        <div class="action-card"><h3>Active Reviewers</h3><p>156 active</p></div>
        <div class="action-card"><h3>Journals</h3><p>24 managed</p></div>
      </div>
    </div>

    <div class="tab-content" id="submissions">
      <div class="submission-cards">
        <div class="submission-card priority-high">
          <h3>AI Research Paper</h3>
          <p>By Dr. Ada Lovelace</p>
          <div class="submission-footer">
            <span class="status-badge status-under_review">Under Review</span>
            <button class="action-btn">View</button>
          </div>
        </div>
        <div class="submission-card priority-low">
          <h3>Quantum Computing Study</h3>
          <p>By Prof. Einstein</p>
          <div class="submission-footer">
            <span class="status-badge status-accepted">Accepted</span>
            <button class="action-btn">View</button>
          </div>
        </div>
      </div>
    </div>

  <div class="tab-content" id="journals">
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
            <th>Latest Volume</th>
            <th>Publisher</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Journal of AI</td>
            <td>2025 Q3</td>
            <td>OpenAI Press</td>
          </tr>
          <tr>
            <td>Medical Research Today</td>
            <td>2025 Q1</td>
            <td>HealthScope Media</td>
          </tr>
          <tr>
            <td>Global Tech Review</td>
            <td>2025 Q2</td>
            <td>InnovateHub</td>
          </tr>
          <tr>
            <td>Data Science Digest</td>
            <td>2024 Q4</td>
            <td>ML Network</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


    <div class="tab-content" id="reviewers">
      <div class="reviewer-grid">
        <div class="reviewer-card">
          <h3>Dr. Turing</h3>
          <p>Computer Science</p>
        </div>
        <div class="reviewer-card">
          <h3>Dr. Curie</h3>
          <p>Physics</p>
        </div>
      </div>
    </div>



  </div>
</div>

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




</body>
</html>
