<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>

        nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 4;
        }

        h3 {
            float: left;
            color: white;
            text-align: center
            padding: 30px 20px;
            margin-left: 10px;
            margin-top: 30px
        }

        a {
            padding-top: 50px;
            float: right;
            display: block;
            font-size: 20px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin-top: 17px
        }

        a:hover {
            background-color: grey;
            color: white
        }

        button {
            float: right;
            padding: 10px 10px;
            font-size: 20px;
            color: white;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 10px;
            margin-right: 2%;
            margin-top: 17px
        }

        button:hover {
            background-color: grey;
            color: white
        }

        button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        img {
            float: left;
            height: 80px;
            width: 85px;
        }

        section {
            display: flex;
            /*   margin-top:4rem; */
            justify-content: left;
            align-items: center;
            flex-direction: column;
            height: fit-content
            /*   margin-top:7vh; */
        }

        header {
            margin-top: 80px;
            height: fit-content;
            width: 100%
            padding: 1rem 0rem 0rem 2rem
        }

        header img {
            position: relative;
            width: 100%;
            height: 85vh;
            filter: blur(2px);
            -webkit-filter: blur(2px);
        }

        header h1 {
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.4);
            color: white;
            font-weight: bold;
            font-size: 45px;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }

        header h3 {
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.4);
            border: 3px solid #f1f1f1;
            color: white;
            font-weight: bold;
            font-size: 30px;
            position: absolute;
            top: 29%;
            left: 49.3%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }

        header .b1 .b2 {
            top: 55%;
            left: 6%;
            transform: translate(-50%, -50%);
            z-index: 3;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        footer {
            margin: 700px 0 0 0;
            height: fit-content;
            width: 100%
            padding: 1rem 0rem 0rem 0rem;
            background-color: #017EB8;
            color: white;
        }

        footer p {
            text-align: center;
            padding-top: 250px;
            padding-bottom: 20px

        }

        footer h4 {
            padding: 20px 20px 0 20px;
        }

        footer .section1 {
            float: left;
        }

    </style>
</head>
<body>
    <section id='navbar'>
        <nav>
            <img src="./images1.jpeg" alt="">
            <h3>Heritage Institute of Technology</h3>
            <button>Login</button>
            <a href="/js/">Contact</a>
            <a href="/css/">About</a>
            <a href="/html/">Home</a>
        </nav>
    </section>
    
    <header>
        <img src="./1488795826e4.webp" alt="">
        <h3>Masters of Computer Applications</h3>
        <h1>Choice of Elective Subjects</h1>
        <button class='b1'>Login as Student</button>
        <button class='b2'>Login as Admin</button>
    </header>

    <footer>
        <section class='section1'>
            <h4>Other Heritage Group Intitutions</h4>
            <ul>
                <li>The Heritage School</li>
                <li>The Heritage Academy</li>
                <li>The Heritage College</li>
                <li>Heritage Business School</li>
                <li>Heritage Law College</li>
            </ul>
        </section>

        <section class='section2'>
            <h4>Other Departments</h4>
            <ul>
                <li>B.Tech</li>
                <li>M.Tech</li>
            </ul>
        </section>
        
        <p>Copyright © 2024, Heritage Institute of Technology, All right reserved.</p>
    </footer>
    
</body>
</html>

<?php

?>