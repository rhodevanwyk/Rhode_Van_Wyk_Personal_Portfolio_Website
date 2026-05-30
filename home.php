<?php require_once 'includes/header.php' ?>

<main>
  <section class="hero_section">
    <h1 class="hero_title">
      <span class="hero_red_text">
        Full-Stack
      </span>
      &
      <span class="hero_red_text">
        Front-End
      </span>
      Web Developer
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
      <a href="https://www.google.com/search?client=opera-gx&q=zimmersoftware+kg&sourceid=opera&ie=UTF-8&oe=UTF-8#"
        target="_blank">
        <p class="stats_paragraph"><i class="fa-solid fa-link"></i> ZimmerSoftware Google Reviews</p>
      </a>
    </div>

    <div class="stats_right">
      <h1 class="stats_main_nr">1</h1>
      <h2 class="stats_title">Professional company worked with</h2>
      <a href="work_experience.php">
        <p class="stats_paragraph"><i class="fa-solid fa-link"></i> Verified Work History</p>
      </a>
    </div>
  </section>

  <section class="about_me_section">
    <h1 class="about_title">ABOUT ME...</h1>
    <div class="about_paragraph">
      <p>
        I'm a Junior Full-Stack Web Developer, based in Pretoria, South Africa, busy skilling up on my own, using the
        abundance of resources on the web. I
        create art when I'm not coding and I code when I'm not creating art...joke...I do more than JUST that,
        sometimes.
      </p>
      <br>
      </p>
      More about me...I learn by doing, I'm persistent to the point of MAYBE being annoying, I like having some form of
      independence, not afraid to speak / express myself, and I'm VERY detail aware.
      </p>
      <br>
      </p>
      I finished school in 2024, got a job at a restaurant, worked there for a while, my original plan was to save up
      for a PC to study something in the IT field, but, 5 months after, I received a job offer to work for an Austrian
      Software Company called ZimmerSoftware KG, AND I bought myself a new PC, so I basically achieved both my goals at
      once...either way, working for this company made me realize I really like coding and designing.
      </p>
    </div>
  </section>

  <section class="skills_section">
    <h1 class="skills_title">SKILLS ETC.</h1>
    <div class="skills-wrap">

      <!-- Frontend -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/html5.svg"
          alt="" />HTML5</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/css3.svg"
          alt="" />CSS3</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/javascript.svg"
          alt="" />JavaScript</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/jquery.svg"
          alt="" />jQuery</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/tailwindcss.svg"
          alt="" />Tailwind CSS</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/bootstrap.svg"
          alt="" />Bootstrap</span>

      <!-- Backend & DB -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/php.svg"
          alt="" />PHP</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/laravel.svg"
          alt="" />Laravel</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/mysql.svg"
          alt="" />MySQL</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linux.svg" alt="" />LAMP
        Stack</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/gnubash.svg"
          alt="" />Bash</span>

      <!-- Design & UX -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/figma.svg"
          alt="" />Figma</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/webflow.svg"
          alt="" />Webflow</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/canva.svg"
          alt="" />Canva</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/adobe.svg"
          alt="" />Adobe</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/gimp.svg"
          alt="" />GIMP</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/wix.svg"
          alt="" />Wix</span>

      <!-- Creative & Video -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/davinciresolve.svg"
          alt="" />DaVinci Resolve</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/capcut.svg"
          alt="" />CapCut</span>

      <!-- Dev Tools -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/visualstudiocode.svg"
          alt="" />VS Code</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/git.svg"
          alt="" />Git</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/github.svg"
          alt="" />GitHub</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/gitlab.svg"
          alt="" />GitLab</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/phpmyadmin.svg"
          alt="" />phpMyAdmin</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/xampp.svg"
          alt="" />XAMPP</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/netlify.svg"
          alt="" />Netlify</span>

      <!-- Productivity -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/notion.svg"
          alt="" />Notion</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/miro.svg"
          alt="" />Miro</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/google.svg"
          alt="" />Google Workspace</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/microsoftoffice.svg"
          alt="" />Microsoft Office</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/libreoffice.svg"
          alt="" />LibreOffice</span>

      <!-- OS -->
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linux.svg"
          alt="" />Linux</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/ubuntu.svg"
          alt="" />Ubuntu</span>
      <span class="skill-badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/windows.svg"
          alt="" />Windows</span>

    </div>
  </section>
</main>

<?php require_once 'includes/footer.php' ?>