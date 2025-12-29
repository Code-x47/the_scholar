<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Research Admin Dashboard</title>
  <link href="https://unpkg.com/lucide-static@0.452.0/font/lucide.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

-->
@extends('Layout.adminFrame')
@section('content')

<style> 


/* Base layout */
/* body {
  font-family: system-ui, sans-serif;
  background: linear-gradient(to bottom right, #eef3ff, #f9f5ff, #ffe8f3);
  margin: 0;
  color: #333;
} */
.container {
  max-width: 1100px;
  margin: 1rem auto;
  padding: 0 1rem;
}
h1, h2, h3 { margin: 0; }

/* Header */
/* .header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: white;
  border-bottom: 1px solid #ddd;
  padding: 1rem 2rem;
}
.header-left {
  display: flex;
  align-items: center;
  gap: 1rem;
}
.header-icon {
  background: linear-gradient(135deg, #2563eb, #7c3aed);
  padding: 0.5rem;
  border-radius: 0.5rem;
  color: white;
}
.header-right {
  display: flex;
  gap: 0.5rem;
}
.btn-icon {
  border: none;
  background: transparent;
  cursor: pointer;
  padding: 0.5rem;
  border-radius: 0.5rem;
}
.btn-icon:hover { background: #f3f4f6; }
.btn-primary {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: linear-gradient(90deg, #2563eb, #7c3aed);
  color: white;
  border: none;
  padding: 0.6rem 1rem;
  border-radius: 0.5rem;
  cursor: pointer;
}
.btn-primary:hover { box-shadow: 0 2px 8px rgba(0,0,0,0.2); }
.btn-primary.small { padding: 0.4rem 0.8rem; font-size: 0.9rem; } */

/* Stats */
.stats-grid {
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
 
  margin-top: 5rem;
  
}
.stat-card {
  background: white;
  border-radius: 1rem;
  padding: 1.5rem;
  box-shadow: 0 1px 4px rgba(0,0,0,0.05);
  transition: 0.3s;
}
.stat-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.stat-top {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1rem;
}
.icon-bg {
  padding: 0.6rem;
  border-radius: 0.6rem;
  color: white;
}
.stat-card.blue .icon-bg { background: linear-gradient(135deg, #3b82f6, #2563eb); }
.stat-card.yellow .icon-bg { background: linear-gradient(135deg, #facc15, #eab308); }
.stat-card.green .icon-bg { background: linear-gradient(135deg, #22c55e, #16a34a); }
.stat-card.purple .icon-bg { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }
.change { color: #16a34a; font-weight: 600; }

/* Tabs */
.tabs {
  background: white;
  border-radius: 1rem;
  margin-top: -7rem;
  overflow: hidden;
  box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.tab-buttons {
  display: flex;
  border-bottom: 1px solid #ddd;
}
.tab-btn {
  flex: 1;
  padding: 1rem;
  border: none;
  background: transparent;
  cursor: pointer;
  font-weight: 500;
  color: #666;
}
.tab-btn.active {
  border-bottom: 2px solid #7c3aed;
  color: #7c3aed;
}
.tab-panel { display: none; padding: 1.5rem; }
.tab-panel.active { display: block; }

/* Overview */
.quick-actions {
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  margin-bottom: 2rem;
}
.action-card {
  border: 2px dashed #ddd;
  border-radius: 0.8rem;
  padding: 1rem;
  transition: 0.3s;
}
.action-card:hover { background: #f3f0ff; border-color: #7c3aed; }
.action-card i { font-size: 1.5rem; color: #7c3aed; margin-bottom: 0.5rem; display: block; }

/* Recent submissions */
.submission-card {
  display: flex;
  align-items: center;
  background: #f9fafb;
  border-radius: 0.5rem;
  margin-bottom: 0.5rem;
  padding: 0.8rem;
  transition: 0.2s;
}
.submission-card:hover { background: #f3f4f6; }
.priority {
  width: 4px;
  height: 100%;
  border-radius: 2px;
  margin-right: 1rem;
}
.priority.high { background: #ef4444; }
.priority.medium { background: #eab308; }
.priority.low { background: #22c55e; }
.status {
  padding: 0.3rem 0.6rem;
  border-radius: 999px;
  font-size: 0.75rem;
  text-transform: capitalize;
}
.status.green { background: #dcfce7; color: #15803d; }
.status.red { background: #fee2e2; color: #b91c1c; }
.status.yellow { background: #fef9c3; color: #854d0e; }
.status.gray { background: #f3f4f6; color: #4b5563; }

/* Submissions Table */
.filters {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1rem;
  flex-wrap: wrap;
  gap: 1rem;
}
.search-box {
  position: relative;
}
.search-box i {
  position: absolute;
  left: 0.7rem;
  top: 50%;
  transform: translateY(-50%);
  color: #aaa;
}
.search-box input {
  padding: 0.5rem 0.8rem 0.5rem 2rem;
  border: 1px solid #ccc;
  border-radius: 0.4rem;
}
.table-wrapper { overflow-x: auto; }
.submissions-table {
  width: 100%;
  border-collapse: collapse;
}
.submissions-table th, .submissions-table td {
  padding: 0.8rem;
  text-align: left;
  border-bottom: 1px solid #eee;
}
.submissions-table tr:hover { background: #f9fafb; }

/* Journal grid */
.journal-grid {
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
}
.journal-card {
  background: linear-gradient(to bottom right, white, #f9fafb);
  border: 1px solid #eee;
  border-radius: 1rem;
  padding: 1rem;
}

/* Reviewers */
.reviewer-grid {
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
}
.reviewer-card {
  background: white;
  border: 1px solid #eee;
  border-radius: 1rem;
  padding: 1rem;
}




</style>




</head>
<body>
  <div class="dashboard">
    <main class="container">
      <!-- Stats -->
      <section class="stats-grid" id="stats">
        <div class="stat-card blue">
          <div class="stat-top">
            <div class="icon-bg"><i class="lucide-file-text"></i></div>
            <span class="change">+12.5%</span>
          </div>
          <h3>1,247</h3>
          <p>Total Submissions</p>
        </div>
        <div class="stat-card yellow">
          <div class="stat-top">
            <div class="icon-bg"><i class="lucide-clock"></i></div>
            <span class="change">+5.2%</span>
          </div>
          <h3>89</h3>
          <p>Under Review</p>
        </div>
        <div class="stat-card green">
          <div class="stat-top">
            <div class="icon-bg"><i class="lucide-check-circle"></i></div>
            <span class="change">+8.1%</span>
          </div>
          <h3>856</h3>
          <p>Published Papers</p>
        </div>
        <div class="stat-card purple">
          <div class="stat-top">
            <div class="icon-bg"><i class="lucide-book-open"></i></div>
            <span class="change">+2</span>
          </div>
          <h3>24</h3>
          <p>Active Journals</p>
        </div>
      </section>

      <!-- Tabs -->
      <section class="tabs">
        <div class="tab-buttons">
          <button class="tab-btn active" data-tab="overview">Overview</button>
          <button class="tab-btn" data-tab="submissions">Submissions</button>
          <button class="tab-btn" data-tab="journals">Journals</button>
          <button class="tab-btn" data-tab="reviewers">Reviewers</button>
        </div>

        <div class="tab-content">
          <!-- Overview Tab -->
          <div id="overview" class="tab-panel active">
            <div class="quick-actions">
              <div class="action-card">
                <i class="lucide-file-text"></i>
                <h3>Review Queue</h3>
                <p>89 papers awaiting review</p>
              </div>
              <div class="action-card">
                <i class="lucide-users"></i>
                <h3>Manage Reviewers</h3>
                <p>156 active reviewers</p>
              </div>
              <div class="action-card">
                <i class="lucide-trending-up"></i>
                <h3>Analytics</h3>
                <p>View performance metrics</p>
              </div>
            </div>

            <h2 class="section-title">Recent Submissions</h2>
            <div class="recent-submissions">
              <div class="submission-card">
                <div class="priority high"></div>
                <div class="submission-info">
                  <h3>Machine Learning in Healthcare</h3>
                  <p>Dr. John Smith • Medical AI Journal • 2025-10-28</p>
                </div>
                <span class="status yellow">under review</span>
              </div>

              <div class="submission-card">
                <div class="priority medium"></div>
                <div class="submission-info">
                  <h3>Climate Change Adaptation Strategies</h3>
                  <p>Prof. Sarah Johnson • Environmental Studies • 2025-10-29</p>
                </div>
                <span class="status gray">pending</span>
              </div>

              <div class="submission-card">
                <div class="priority high"></div>
                <div class="submission-info">
                  <h3>Quantum Computing Applications</h3>
                  <p>Dr. Michael Chen • Physics Today • 2025-10-30</p>
                </div>
                <span class="status green">accepted</span>
              </div>
            </div>
          </div>

          <!-- Submissions Tab -->
          <div id="submissions" class="tab-panel">
            <div class="filters">
              <div class="search-box">
                <i class="lucide-search"></i>
                <input type="text" id="searchInput" placeholder="Search submissions...">
              </div>
              <select id="statusFilter">
                <option value="all">All Status</option>
                <option value="pending">Pending</option>
                <option value="under_review">Under Review</option>
                <option value="accepted">Accepted</option>
                <option value="rejected">Rejected</option>
              </select>
            </div>

            <div class="table-wrapper">
              <table class="submissions-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Journal</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <!-- JS will render table rows -->
                </tbody>
              </table>
            </div>
          </div>

          <!-- Journals Tab -->
          <div id="journals" class="tab-panel">
            <div class="journal-grid" id="journalGrid"></div>
          </div>

          <!-- Reviewers Tab -->
          <div id="reviewers" class="tab-panel">
            <div class="reviewer-header">
              <h2>Reviewer Management</h2>
              <button class="btn-primary small">Invite Reviewer</button>
            </div>
            <div class="reviewer-grid" id="reviewerGrid"></div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <script>

   // Tab switching
document.querySelectorAll('.tab-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(btn.dataset.tab).classList.add('active');
  });
});

// Submissions data
// const submissions = [
//   { id: 'RSC-2025-001', title: 'Machine Learning in Healthcare', author: 'Dr. John Smith', journal: 'Medical AI Journal', status: 'under_review', date: '2025-10-28', priority: 'high' },
//   { id: 'RSC-2025-002', title: 'Climate Change Adaptation Strategies', author: 'Prof. Sarah Johnson', journal: 'Environmental Studies', status: 'pending', date: '2025-10-29', priority: 'medium' },
//   { id: 'RSC-2025-003', title: 'Quantum Computing Applications', author: 'Dr. Michael Chen', journal: 'Physics Today', status: 'accepted', date: '2025-10-30', priority: 'high' },
//   { id: 'RSC-2025-004', title: 'Social Media Impact on Youth', author: 'Dr. Emily Brown', journal: 'Psychology Review', status: 'revision', date: '2025-10-27', priority: 'low' },
//   { id: 'RSC-2025-005', title: 'Renewable Energy Solutions', author: 'Prof. David Lee', journal: 'Energy & Environment', status: 'rejected', date: '2025-10-26', priority: 'medium' },
// ];

// // Render table
// function renderTable(filter = 'all', search = '') {
//   const tbody = document.getElementById('tableBody');
//   tbody.innerHTML = '';

//   submissions
//     .filter(sub => (filter === 'all' || sub.status === filter))
//     .filter(sub => sub.title.toLowerCase().includes(search.toLowerCase()))
//     .forEach(sub => {
//       const row = document.createElement('tr');
//       row.innerHTML = `
//         <td>${sub.id}</td>
//         <td>${sub.title}</td>
//         <td>${sub.author}</td>
//         <td>${sub.journal}</td>
//         <td><span class="status ${getStatusColor(sub.status)}">${sub.status.replace('_',' ')}</span></td>
//         <td>${sub.date}</td>
//         <td>
//           <button class="btn-icon"><i class="lucide-eye"></i></button>
//           <button class="btn-icon"><i class="lucide-edit"></i></button>
//           <button class="btn-icon"><i class="lucide-mail"></i></button>
//         </td>`;
//       tbody.appendChild(row);
//     });
// }

// function getStatusColor(status) {
//   switch (status) {
//     case 'under_review': return 'yellow';
//     case 'accepted': return 'green';
//     case 'rejected': return 'red';
//     case 'revision': return 'blue';
//     case 'pending': return 'gray';
//     default: return 'gray';
//   }
// }

// document.getElementById('statusFilter').addEventListener('change', e => {
//   renderTable(e.target.value, document.getElementById('searchInput').value);
// });
document.getElementById('searchInput').addEventListener('input', e => {
  renderTable(document.getElementById('statusFilter').value, e.target.value);
});

renderTable();

// Journals
const journals = [
  { name: 'Medical AI Journal', submissions: 145, published: 89, impact: 4.5, editors: 12 },
  { name: 'Environmental Studies', submissions: 98, published: 67, impact: 3.8, editors: 8 },
  { name: 'Physics Today', submissions: 203, published: 156, impact: 5.2, editors: 15 },
  { name: 'Psychology Review', submissions: 87, published: 54, impact: 3.2, editors: 7 },
];

const journalGrid = document.getElementById('journalGrid');
journals.forEach(j => {
  const div = document.createElement('div');
  div.className = 'journal-card';
  div.innerHTML = `
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <div>
        <h3>${j.name}</h3>
        <p>Impact Factor: ${j.impact}</p>
      </div>
      <i class="lucide-edit"></i>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);text-align:center;margin-top:1rem;">
      <div><h3 style="color:#3b82f6">${j.submissions}</h3><p>Submissions</p></div>
      <div><h3 style="color:#22c55e">${j.published}</h3><p>Published</p></div>
      <div><h3 style="color:#7c3aed">${j.editors}</h3><p>Editors</p></div>
    </div>`;
  journalGrid.appendChild(div);
});

// Reviewers
const reviewerGrid = document.getElementById('reviewerGrid');
for (let i = 1; i <= 6; i++) {
  const div = document.createElement('div');
  div.className = 'reviewer-card';
  div.innerHTML = `
    <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1rem;">
      <div style="width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,#2563eb,#7c3aed);color:white;display:flex;align-items:center;justify-content:center;font-weight:bold;">DR</div>
      <div>
        <h3>Dr. Reviewer ${i}</h3>
        <p style="font-size:0.8rem;color:#666;">Medical Research</p>
      </div>
    </div>
    <div style="font-size:0.9rem;">
      <div class="flex-row"><span>Reviews:</span> <strong>${15 + i * 3}</strong></div>
      <div class="flex-row"><span>Avg. Time:</span> <strong>${5 + i} days</strong></div>
      <div class="flex-row"><span>Rating:</span> <strong>★ 4.${5 + i}</strong></div>
    </div>`;
  reviewerGrid.appendChild(div);
}
</script>

@endsection




<!-- </body>
</html> -->
