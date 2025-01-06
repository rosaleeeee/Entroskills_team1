<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Responsive</title>

    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .nav1 {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color:  #1f588d;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
            transition: transform 0.3s ease;
        }

        .nav1 img.logo {
            width: 120px;
            margin-bottom: 20px;
        }

        .nav1 ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .nav1 li {
            width: 100%;
            margin-bottom: 20px;
        }

        .nav1 a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .nav1 a:hover {
            background-color: #444;
        }

        .nav1 i {
            margin-right: 10px;
            font-size: 18px;
        }

        .nav1 .nav-item {
            font-size: 16px;
        }

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            .nav1 {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                padding: 10px 0;
                position: fixed;
                bottom: 0;
                top: auto;
                background-color: #333;
            }

            .nav1 img.logo {
                display: none;
            }

            .nav1 ul {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                width: 100%;
            }

            .nav1 li {
                margin-bottom: 0;
            }

            .nav1 a {
                flex-direction: column;
                padding: 5px;
                font-size: 14px;
                text-align: center;
            }

            .nav1 i {
                font-size: 20px;
                margin-bottom: 5px;
            }
        }

        @media (max-width: 480px) {
            .nav1 a {
                font-size: 12px;
            }

            .nav1 i {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <nav class="nav1">
        <img class="logo" src="{{ asset('Images/Logoo.png') }}" alt="logo">
        <ul>
            <li class="Button">
                <a class="a_nav" href="http://127.0.0.1:8000/profile">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a>
            </li>
            <li class="Button">
                <a class="a_nav" href="http://127.0.0.1:8000/dashboard">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a>
            </li>
            <li class="Button">
                <a class="a_nav" href="#">
                    <i class="fas fa-users"></i>
                    <span class="nav-item">Team</span>
                </a>
            </li>
            <li class="Button">
                <a class="a_nav" href="http://127.0.0.1:8000/more">
                    <i class="fas fa-ellipsis-h"></i>
                    <span class="nav-item">More</span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>
