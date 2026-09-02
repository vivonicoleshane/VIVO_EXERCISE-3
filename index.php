<?php

$members = [

    [
        "name" => "Seprioto, Jessa S.",
        "age" => 21,
        "role" => "TEAM LEADER",
        "image" => "images/jessa.jpg",

        "intro" => "I'm Jessa Seprioto, a second-year BSIT student. I'm interested in programming and web development, and I enjoy learning new skills that help me grow. I believe that with hard work, patience, and determination, I can continue to improve and reach my goals.",

        "skills" => [
            "HTML & CSS",
            "Java Programming",
            "C++ Programming",
            "Problem Solving",
            "Teamwork",
            "Fast Learner",
            "Creativity"
        ],

        "phone" => "09756617045",
        "email" => "sepriotojessasabella@gmail.com"
    ],

    [
        "name" => "Llanos, Jerica Faith M.",
        "age" => 27,
        "role" => "",
        "image" => "images/jerica.jpg",

        "intro" => "My name is Jerica Faith Llanos. I am a BSIT student who is eager to learn and grow both personally. I have experience working in customer service, which has helped me develop strong communication, teamwork, and time management skills. I look forward to gaining more experience and contributing positively to a new team I become part of.",

        "skills" => [
            "Teamwork",
            "Time Management",
            "Communication",
            "Customer Service"
        ],

        "phone" => "09154535654",
        "email" => "jericafaithllanos@gmail.com"
    ],

    [
        "name" => "Alyanna Mae Vivo",
        "age" => 23,
        "role" => "",
        "image" => "images/alyanna.jpg",

        "intro" => "Hi! I'm Alyanna Mae R. Vivo, 3rd year BS Information Technology student. I enjoy learning new things about technology, and sometimes I like writing short poems whenever I feel inspired.",

        "skills" => [
            "Creativity",
            "Willingness to Learn"
        ],

        "phone" => "09481059196",
        "email" => "alyannavivo18@gmail.com"
    ],

    [
        "name" => "Cristian De Leus",
        "age" => 20,
        "role" => "",
        "image" => "images/cristian.jpg",

        "intro" => "Detail-oriented college student with a solid foundation in technical and interpersonal skills, including time management and collaboration. Passionate about learning new tools and contributing effectively to team goals while continuing professional development.",

        "skills" => [
            "Attention to Detail"
        ],

        "phone" => "09708360249",
        "email" => "cristiandeleus@gmail.com"
    ],

    [
        "name" => "Kurt Jazz Negrite",
        "age" => 20,
        "role" => "",
        "image" => "images/kurt.jpg",

        "intro" => "Hello! My name is Kurt Jazz Negrite, a 20-year-old Information Technology student. I enjoy learning different programming languages and improving my coding skills. I am currently exploring HTML, CSS, and Java.",

        "skills" => [
            "Responsive",
            "Time Management"
        ],

        "phone" => "09471419056",
        "email" => "jazznegrite258@gmail.com"
    ],

    [
        "name" => "Nicole Shane Vivo",
        "age" => 23,
        "role" => "",
        "image" => "images/nicole.jpg",

        "intro" => "Hi everyone! I'm Nicole, a BSIT student. I'm a simple person who likes learning new things, especially when it comes to technology. I may not always be the best at everything, but I'm willing to learn and improve along the way. I'm also someone who enjoys spending time with people I'm comfortable with and doing things that make me happy.",

        "skills" => [
            "Creativity",
            "Teamwork"
        ],

        "phone" => "09776747530",
        "email" => "vivonicoleshane0818@gmail.com"
    ],

    [
        "name" => "Fahad G. Pimping",
        "age" => 21,
        "role" => "",
        "image" => "images/fahad.jpg",

        "intro" => "Hello! My name is Fahad G. Pimping. I am a 21-year-old Information Technology student who is interested in technology and computers. I enjoy learning new things, solving problems, and improving my skills. I am motivated to gain more knowledge and experience that can help me in my future career.",

        "skills" => [
            "Problem-solving",
            "Teamwork",
            "Communication",
            "Adaptability",
            "Basic Programming",
            "Willingness to Learn",
            "Computer Skills",
            "Time Management"
        ],

        "phone" => "09276914848",
        "email" => "fahadpimping105@gmail.com"
    ]

];


/* GET METHOD */

$search = $_GET["search"] ?? "";

$filteredMembers = $members;

if ($search !== "") {

    $filteredMembers = array_filter($members, function ($member) use ($search) {

        return stripos($member["name"], $search) !== false;

    });

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Group 3 BSIT Team Profile"
    >

    <title>Group 3 | BSIT Team Profile</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


    <!-- HERO / HEADER -->

    <header class="hero">

        <div class="hero-content">


            <!-- GROUP 3 LOGO -->

            <div class="logo-container">

                <img
                    src="images/logo.jpg"
                    alt="Group 3 Logo"
                    class="team-logo"
                >

            </div>


            <!-- TEAM INTRODUCTION -->

            <div class="header-text">

                <p class="small-title">
                    BSIT TEAM PROFILE
                </p>

                <h1>
                    GROUP 3
                </h1>

                <h3>
                    LEARNING TOGETHER, GROWING TOGETHER.
                </h3>

                <div class="header-line"></div>

                <p class="team-description">

                    We are Group 3, a team of BSIT students with
                    different skills, interests, and experiences.
                    We work together by sharing ideas, supporting
                    one another, and learning from each other
                    throughout our projects and activities.
                    As a team, we aim to improve our skills,
                    contribute our strengths, and complete our
                    work with cooperation and commitment.

                </p>

            </div>

        </div>

    </header>



    <!-- MAIN CONTENT -->

    <main>


        <!-- TEAM HEADING -->

        <div class="team-heading">

            <span>
                MEET THE TEAM
            </span>

            <div></div>

        </div>



        <!-- SEARCH USING GET -->

        <div class="search-container">

            <form method="GET" action="index.php">

                <input
                    type="text"
                    name="search"
                    id="memberSearch"
                    placeholder="🔍 Search team member..."
                    aria-label="Search team member"
                    value="<?php echo htmlspecialchars($search); ?>"
                >

                <button type="submit">
                    Search
                </button>

            </form>

        </div>



        <!-- TEAM MEMBERS -->

        <section class="team-container">


            <?php if (empty($filteredMembers)): ?>

                <p class="no-results">
                    No team member found.
                </p>

            <?php endif; ?>



            <?php foreach ($filteredMembers as $member): ?>


                <article class="member-card">


                    <!-- MEMBER PHOTO -->

                    <div class="member-photo">

                        <img
                            src="<?php echo htmlspecialchars($member["image"]); ?>"
                            alt="Photo of <?php echo htmlspecialchars($member["name"]); ?>"
                        >

                    </div>



                    <!-- MEMBER INFORMATION -->

                    <div class="member-information">


                        <h2>

                            <?php echo htmlspecialchars($member["name"]); ?>

                        </h2>



                        <!-- TEAM LEADER -->

                        <?php if (!empty($member["role"])): ?>

                            <span class="team-leader">

                                ♛ <?php echo htmlspecialchars($member["role"]); ?>

                            </span>

                        <?php endif; ?>



                        <!-- INTRODUCTION -->

                        <p class="introduction">

                            <?php echo htmlspecialchars($member["intro"]); ?>

                        </p>



                        <!-- SKILLS -->

                        <div class="skills">


                            <?php foreach ($member["skills"] as $skill): ?>

                                <span>

                                    <?php echo htmlspecialchars($skill); ?>

                                </span>

                            <?php endforeach; ?>


                        </div>



                        <!-- CONTACT INFORMATION -->

                        <div class="contact-information">


                            <span>

                                👤 Age:
                                <?php echo htmlspecialchars($member["age"]); ?>

                            </span>


                            <span>

                                ☎
                                <?php echo htmlspecialchars($member["phone"]); ?>

                            </span>


                            <a
                                href="mailto:<?php echo htmlspecialchars($member["email"]); ?>"
                            >

                                ✉
                                <?php echo htmlspecialchars($member["email"]); ?>

                            </a>


                        </div>


                    </div>


                </article>


            <?php endforeach; ?>


        </section>


    </main>



    <!-- FOOTER -->

    <footer>


        <div class="footer-content">


            <p class="footer-label">
                OUR GOAL
            </p>


            <h2>
                Learn • Create • Collaborate • Grow
            </h2>


            <p>

                As a team, we aim to learn from one another,
                improve our skills, and give our best in every
                project we work on.

            </p>


            <div class="footer-line"></div>


            <div class="footer-text">

                &lt;/&gt; GROUP 3 • BSIT

            </div>


        </div>


    </footer>



    <!-- JAVASCRIPT -->

    <script src="script.js"></script>


</body>

</html>
