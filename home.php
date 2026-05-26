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
                    As of right now, that you're reading this...I have
                    <?php
                        $career_start_date = new DateTime('2025-06-01');
                        $today = new DateTime();
                        $interval = $today->diff($career_start_date);

                        echo "$interval->days";
                    ?>
                    days of experience.
                </p>
                <a class="btn">CONTACT ME</a>
                <a class="btn_sec">VIEW MY PROJECTS</a>
            </div>
        </div>
    </section>

    <section class="stats_section">
        <div>
            <h1>90<span>%</span></h1>
            <h2>UI modernisation at ZimmerSoftware KG</h2>
            <p>C25 Software Design Update</p>
        </div>

        <div>
            <h1>55<span>%</span></h1>
            <h2>Faster load times via CSS audit</h2>
            <p>Browser DevTools optimisation</p>
        </div>

        <div>
            <h1>100<span>%</span></h1>
            <h2>Customer satisfaction rate</h2>
            <a href="https://www.google.com/search?client=opera-gx&q=zimmersoftware+kg&sourceid=opera&ie=UTF-8&oe=UTF-8#" target="_blank"><p>ZimmerSoftware Google Reviews</p></a>
        </div>

        <div>
            <h1>2</h1>
            <h2>Professional companies worked with</h2>
            <p>Verified work history</p>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php' ?>