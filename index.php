<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rhodé Van Wyk</title>
  <link rel="icon" type="image/png" href="./includes/images/my_logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap">
  <link rel="stylesheet" href="./includes/style.css">
</head>

<body>

  <nav class="nav_bar">
    <div class="nav_middle">
      <a href="#home">
        Home
      </a>

      <a href="#skills">
        Skills
      </a>

      <a href="#projects">
        Projects
      </a>

      <a href="#contact">
        Contact
      </a>

      <a href="./includes/pdf/Rhode_Van_Wyk_CV.pdf" target="_blank">
        CV
      </a>
    </div>

    <div class="nav_right">
      <a href="https://github.com/rhodevanwyk" target="_blank">
        <i class="fa-brands fa-github nav_icon"></i>
      </a>

      <a href="https://www.linkedin.com/in/rhode-van-wyk-87b671370" target="_blank">
        <i class="fa-brands fa-linkedin nav_icon"></i>
      </a>

      <a href="https://www.behance.net/rhodevanwyk" target="_blank">
        <i class="fa-brands fa-behance nav_icon"></i>
      </a>

      <a href="https://www.instagram.com/rhhoooddddeeeee/?__pwa=1#" target="_blank">
        <i class="fa-brands fa-instagram nav_icon"></i>
      </a>
    </div>
  </nav>

  <main>
    <section class="hero_section" id="home">
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
          <img src="./includes/images/hero_img.png" alt="Hero Image" class="hero_img">
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
          <a class="btn" href="#contact">CONTACT ME</a>
          <a class="btn_sec" href="#projects">VIEW MY PROJECTS</a>
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

    <section class="skills_section" id="skills">
      <h1 class="skills_title">SKILLS ETC.</h1>
      <div class="skills_wrap">

        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/html5.svg"
            alt="" />HTML5</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/css3.svg"
            alt="" />CSS3</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/javascript.svg"
            alt="" />JavaScript</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/jquery.svg"
            alt="" />jQuery</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/tailwindcss.svg"
            alt="" />Tailwind CSS</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/bootstrap.svg"
            alt="" />Bootstrap</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/php.svg"
            alt="" />PHP</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/laravel.svg"
            alt="" />Laravel</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/mysql.svg"
            alt="" />MySQL</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linux.svg" alt="" />LAMP
          Stack</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/gnubash.svg"
            alt="" />Bash</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/figma.svg"
            alt="" />Figma</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/webflow.svg"
            alt="" />Webflow</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/canva.svg"
            alt="" />Canva</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/adobe.svg"
            alt="" />Adobe</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/gimp.svg"
            alt="" />GIMP</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/wix.svg"
            alt="" />Wix</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/davinciresolve.svg"
            alt="" />DaVinci Resolve</span>
        <span class="skill_badge">CapCut</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/visualstudiocode.svg"
            alt="" />VS Code</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/git.svg"
            alt="" />Git</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/github.svg"
            alt="" />GitHub</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/gitlab.svg"
            alt="" />GitLab</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/phpmyadmin.svg"
            alt="" />phpMyAdmin</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/xampp.svg"
            alt="" />XAMPP</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/netlify.svg"
            alt="" />Netlify</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/notion.svg"
            alt="" />Notion</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/miro.svg"
            alt="" />Miro</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/google.svg"
            alt="" />Google Workspace</span>
        <span class="skill_badge">Microsoft Office</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/libreoffice.svg"
            alt="" />LibreOffice</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/linux.svg"
            alt="" />Linux</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/ubuntu.svg"
            alt="" />Ubuntu</span>
        <span class="skill_badge"><img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/windows.svg"
            alt="" />Windows</span>

      </div>
    </section>

    <section class="projects_section" id="projects">

    </section>
  </main>

  <footer class="footer_section" id="contact">
    <div class="footer_content">
      <div class="footer_contact_info">
        <p class="footer_text">+27 76 851 9561</p>
        <p class="footer_text">vanwykrhode30@gmail.com</p>
      </div>
      <p class="footer_text copyright">&copy; <?php echo date('Y'); ?> Rhodé Van Wyk. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>