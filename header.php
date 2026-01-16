<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-logo">My<span>Website</span></div>

        <ul class="menu">
            <li>
                <button class="dropdown-btn">Dashboard</button>
            </li>

            <li>
                <button class="dropdown-btn">Courses</button>
                <ul class="dropdown">
                    <li>Linux</li>
                    <li>AWS</li>
                    <li>Shell Script</li>
                    <li>Jenkins</li>
                    <li>Docker</li>
                </ul>
            </li>

            <li>
                <button class="dropdown-btn">Services</button>
                <ul class="dropdown">
                    <li>Web Development</li>
                    <li>DevOps</li>
                    <li>Cloud</li>
                </ul>
            </li>

            <li>
                <button class="dropdown-btn">Contact</button>
            </li>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
