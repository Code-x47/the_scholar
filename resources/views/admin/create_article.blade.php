<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Your News</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/tinymce@7.0.0/tinymce.min.js"></script>

  <style>
    /* --- Base Reset --- */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Segoe UI", Roboto, sans-serif;
      background: linear-gradient(135deg, #faf5ff, #fff1f2, #eff6ff);
      min-height: 100vh;
      padding: 2rem;
      color: #333;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      background: white;
      border-radius: 1.5rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 2rem 2.5rem;
    }

    h1 {
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    p.subtitle {
      text-align: center;
      color: #555;
      margin-bottom: 1.5rem;
    }

    .icon-box {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 60px;
      height: 60px;
      border-radius: 1rem;
      background: linear-gradient(to right, #7e22ce, #db2777);
      margin: 0 auto 1rem;
      box-shadow: 0 4px 12px rgba(123, 31, 162, 0.4);
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    label {
      display: flex;
      align-items: center;
      font-weight: 600;
      margin-bottom: 0.5rem;
      font-size: 0.9rem;
    }

    label i {
      width: 18px;
      height: 18px;
      margin-right: 0.5rem;
      color: #7e22ce;
    }

    input[type="text"],
    input[type="date"],
    input[type="url"],
    textarea,
    select
     {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 2px solid #e5e7eb;
      border-radius: 0.75rem;
      background: #f9fafb;
      font-size: 1rem;
      transition: 0.2s;
    }

    input:focus,
    textarea:focus {
      background: white;
      border-color: #7e22ce;
      outline: none;
    }

    textarea {
      resize: none;
      min-height: 200px;
    
    }

    .upload-box {
      border: 2px dashed #c084fc;
      border-radius: 1rem;
      background: linear-gradient(to bottom right, #faf5ff, #fdf2f8);
      padding: 2rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .upload-box:hover {
      border-color: #7e22ce;
      background: #faf5ff;
    }

    .upload-box i {
      color: #7e22ce;
      width: 40px;
      height: 40px;
      margin-bottom: 0.5rem;
    }

    .toolbar {
      display: flex;
      gap: 0.5rem;
      padding: 0.5rem;
      background: #f9fafb;
      border: 2px solid #e5e7eb;
      border-bottom: none;
      border-radius: 0.75rem 0.75rem 0 0;
    }

    .toolbar button {
      background: none;
      border: none;
      padding: 0.4rem;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: background 0.2s;
    }

    .toolbar button:hover {
      background: white;
    }

    .toolbar i {
      width: 16px;
      height: 16px;
      color: #444;
    }

    .success-message {
      display: none;
      padding: 1rem;
      background: #dcfce7;
      border-left: 4px solid #16a34a;
      border-radius: 0.75rem;
      color: #166534;
      font-weight: 500;
      margin-bottom: 1rem;
      text-align: center;
    }

    .submit-btn {
      width: 100%;
      background: linear-gradient(to right, #7e22ce, #db2777);
      color: white;
      font-weight: 600;
      padding: 1rem;
      border: none;
      border-radius: 0.75rem;
      font-size: 1rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      transition: 0.3s ease;
      box-shadow: 0 4px 12px rgba(123, 31, 162, 0.4);
    }

    .submit-btn:hover {
      background: linear-gradient(to right, #6b21a8, #be185d);
      box-shadow: 0 6px 16px rgba(123, 31, 162, 0.5);
    }

    .note {
      text-align: center;
      color: #6b7280;
      font-size: 0.9rem;
      margin-top: 1.5rem;
    }

     /*IMG DESIGN */
.styled-file-input {
  display: block;
  width: 100%;
  padding: 1rem;
  border: 2px dashed #d1d5db;
  border-radius: 12px;
  background: #f9fafb;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 1rem;
  color: #374151;
}

.styled-file-input:hover {
  border-color: #6366f1;
  background: #eef2ff;
  color: #111827;
}


/*END */

  </style>
</head>

<body>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul style="margin: 0;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





    <div class="container">
    <div class="icon-box">
      <img src="assets/images/logo/logo.png" width="157" height="79">
    </div>
    <h1>Submit Your Article {{$issue->id}}</h1>
    <p class="subtitle">Share your article with the world</p>

    <div id="success-message" class="success-message">✨ Article submitted successfully!</div>

    <!-- ✅ Form starts here -->
    <form id="newsForm" action="{{route('add.article')}}" method="POST" enctype="multipart/form-data">
      @csrf
       <input type="hidden" name="issueId" value="{{$issue->id}}">     
      <div class="form-group">
        <label><i data-lucide="type"></i>Title</label>
        <input type="text" name="title" id="title" placeholder="Enter a captivating title...">
      </div>

      <div class="form-group">
        <label><i data-lucide="calendar"></i>Published At</label>
        <input type="date" id="date" name="date">
      </div>

          <div class="form-group">
            <label for="file-upload"><i data-lucide="file-text"></i> Upload PDF </label>
            <input type="file" name="file" id="file-upload" accept="application/pdf" class="styled-file-input">
        </div>

      <!-- <div class="form-group">
          <label><i data-lucide="file-text"></i> Upload PDF</label>
          <input type="file" name="file" accept="application/pdf" required>
      </div> -->


      <div class="form-group">
        <label><i data-lucide="align-left"></i>Abstract</label>
        <textarea id="editor" name="abstract" placeholder="Write your abstract here..."></textarea>
        <p style="font-size:0.8rem; color:#6b7280; margin-top:0.25rem;">💡 Tip: Make your abstract clear and well formatted for quick approval</p>
      </div>

      <div class="form-group">
        <label><i data-lucide="align-left"></i>Content</label>
        <textarea id="editor" name="content" placeholder="Write your article content here..."></textarea>
        <p style="font-size:0.8rem; color:#6b7280; margin-top:0.25rem;">💡 Tip: Make your article content clear and well formatted for quick approval</p>
      </div>

        <div class="form-group">
        <label><i data-lucide="video"></i>Status</label>
        <select name="status">
          <option value="submitted">Submitted</option>
           <option value="accepted">Accepted</option>
          <option value="published">Published</option>
        </select>
      </div>

      <button type="submit" id="submitBtn" class="submit-btn">
        <i data-lucide="send"></i> Submit Article
      </button>
    </form>
    <!-- ✅ Form ends here -->

    <p class="note">All submissions will be reviewed before publication</p>
  </div>



  
<script>
  tinymce.init({
    selector: '#editor',
    height: 300,
    menubar: false,
    plugins: 'lists link image code table',
    toolbar:
      'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link table | code',
    branding: false,
    elementpath: false,
    statusbar: false,
    license_key: 'gpl',
    forced_root_block: '', // remove automatic <p> wrapping
    entity_encoding: 'raw' // prevent visible HTML tags
  });
</script>



</body>
</html>
