@extends('Layout.frame')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="submit-journal-container">
    <h2 class="page-title">Submit Your Journal</h2>
    <p class="page-subtitle">Share your latest research findings with the global academic community.</p>

    <form enctype="multipart/form-data"  method="post" action="{{route('submit.form')}}">
        @csrf

        <div class="form-group">
            <label for="author">Author Name</label>
            <input type="text" name="author" id="author" placeholder="Enter author name" required>
        </div>

        <div class="form-group">
            <label for="title">Journal Title</label>
            <input type="text" name="title" id="title" placeholder="Enter journal title" required>
        </div>

        <div class="form-group">
            <label for="dept">Department</label>
            <input type="text" name="dept" id="dept" placeholder="Enter email your department" required>
        </div>

        <div class="form-group">
            <label for="volume">Volume</label>
            <input type="text" name="volume" id="volume" placeholder="Enter the volume of journal (Optional..)" required>
        </div>

         <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter email address" required>
        </div>

         <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number">
        </div>

        <div class="form-group">
            <label for="summary">Summary</label>
            <textarea name="summary" id="summary" rows="5" placeholder="Briefly summarize your paper" required></textarea>
        </div>

        <div class="form-group">
            <label for="file">Upload File (PDF)</label>
            <input type="file" name="file" id="file" accept=".pdf" required>
        </div>

        <div class="form-group">
            <label for="date">Submission Date</label>
            <input type="date" name="date" id="date" required>
        </div>

        <button type="submit" class="submit-btn">Submit Journal</button>

        <div id="messageBox" class="message-box" style="display: none;"></div>
    </form>
</div>




@endsection
