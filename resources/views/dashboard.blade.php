<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<body class="college-bg"> <!-- Use 'college-bg' or 'highschool-bg' for styling -->
    <div class="student-profile">
        <div class="student-info">
            <!-- Static Student Photo -->
            <div class="student-photo">
                <img src="{{ asset('images/default-profile.png') }}" alt="Profile Picture">
            </div>

            <!-- Static Student Details -->
            <div class="student-details">
                <p><strong>Gender:</strong> Male</p>
                <p><strong>Age:</strong> 20 Years Old</p>
                <p><strong>Outlook:</strong> student@outlook.com</p>
                <p><strong>Course/Strand:</strong> BS Computer Science</p>
                <p><strong>Section:</strong> 4-A</p>
                <p><strong>Student Number:</strong> 2021-12345</p>
            </div>


        </div>
        <div class="tabs">
            <a href="">Evaluation</a>
            <a href="">Consultation</a>
        </div>
    </div>
</body>

<STYle>
    body.college-bg {
    background-color: #f0f8ff;
    font-family: Arial, sans-serif;
}

body.highschool-bg {
    background-color: #ffe4e1;
    font-family: Arial, sans-serif;
}

.header {
    background-color: #4BC0C0;
    color: white;
    padding: 15px;
    text-align: center;
}

.student-profile {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.student-photo img {
    max-width: 150px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.student-details p {
    margin: 5px 0;
    font-size: 14px;
}

.logout {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    margin-top: 15px;
    border-radius: 5px;
}

.tabs a {
    display: inline-block;
    margin-right: 15px;
    color: #4BC0C0;
    text-decoration: none;
    font-weight: bold;
}

.tabs a:hover {
    text-decoration: underline;
}

</STYle>
</x-app-layout>
