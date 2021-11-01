@extends('layouts.layout')
@section('body')
<div class="container">
    <h1 class="h1">Thank you for registering!</h1>
    <hr/>
    <h1>Upload your Project file</h1>
    <h3>INSTRUCTIONS:</h3>
    <p>Please follow these instructions carefully to make sure your files will be accepted into the contest.</p>
    <ul>
        <li>Please ZIP all of your project files (.STL and any others) into a single .ZIP file</li>
        <li>Rename the ZIP file to be your first and last name matching the one you just registered with on the form (Example: If your full name is John Doe, name the file 'johndoe')</li>
    </ul>
    <a href="https://www.dropbox.com/request/86ftuG8A4H8eW7xvSZZP" target="_blank" class="btn btn-primary btn-lg">Upload File to DropBox</a>
</div>
@endsection