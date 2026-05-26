<?php require_once 'includes/header.php' ?>

<main>
    <section class="hero_section">
        <h1 class="hero_title"><span class="hero_red_text">Full-Stack </span>& <span class="hero_red_text">Front-End </span>Web Developer
            <span class="hero_title_small">
                with UI/UX Design experience.
            </span>
        </h1>
        <h2 class="hero_name">RHODE VAN WYK</h2>
        <div class="hero_extras_container">
            <div class="hero_img_container">
                <img src="includes/images/hero_img.png" alt="Hero Image" class="hero_img">
            </div>
            <div class="hero_info">
                <p class="hero_paragraph">
                    (As of right now, when you're reading this...I have
                    <?php
                        $career_start_date = new DateTime('2025-06-01');
                        $today = new DateTime();
                        $interval = $today->diff($career_start_date);

                        echo "$interval->days";
                    ?>
                    days of work experience.)
                </p>
                <a class="btn" href="contact.php">CONTACT ME</a>
                <a class="btn_sec" href="projects.php">VIEW MY PROJECTS</a>
            </div>
        </div>
    </section>

    <section class="stats_section">
        <div class="stats_left">
            <h1 class="stats_main_nr">90<span class="stats_small_text">%</span></h1>
            <h2 class="stats_title">UI modernisation at ZimmerSoftware KG</h2>
            <p class="stats_paragraph">C25 Software Design Update</p>
        </div>

        <div class="stats_right">
            <h1 class="stats_main_nr">55<span class="stats_small_text">%</span></h1>
            <h2 class="stats_title">Faster load times via CSS audit</h2>
            <p class="stats_paragraph">Browser DevTools optimisation</p>
        </div>

        <div class="stats_left">
            <h1 class="stats_main_nr">100<span class="stats_small_text">%</span></h1>
            <h2 class="stats_title">Customer satisfaction rate</h2>
            <a href="https://www.google.com/search?client=opera-gx&q=zimmersoftware+kg&sourceid=opera&ie=UTF-8&oe=UTF-8#" target="_blank"><p class="stats_paragraph"><i class="fa-solid fa-link"></i> ZimmerSoftware Google Reviews</p></a>
        </div>

        <div class="stats_right">
            <h1 class="stats_main_nr">1</h1>
            <h2 class="stats_title">Professional company worked with</h2>
            <a href="work_experience.php"><p class="stats_paragraph"><i class="fa-solid fa-link"></i> Verified Work History</p></a>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php' ?>