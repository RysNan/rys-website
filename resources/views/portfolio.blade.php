<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Professional Portfolio</title>
    <link href="{{ asset('css/portofolio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="glass-header">
        <div class="container">
            <h1 class="logo">RYS<span>Portfolio</span></h1>
            <nav>
                <a href="#about"><i class="fas fa-user"></i> About</a>
                <a href="#experience"><i class="fas fa-briefcase"></i> Experience</a>
                <a href="#projects"><i class="fas fa-code"></i> Projects</a>
                <a href="#contact"><i class="fas fa-envelope"></i> Contact</a>
            </nav>
        </div>
    </header>
    <main class="main-content"> <!-- Tambahkan ini -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="profile-img">
                    <img src="{{ asset('images/profil.jpg') }}" alt="Profile Picture" class="profile-pic">
                </div>
                <div class="bio">
                    <h3>Hi, I'm <span class="highlight">Rys</span></h3>
                    <p class="subtitle">Web Developer & Designer</p>
                    <p>I specialize in creating beautiful, functional websites and applications. With 3+ years of experience in front-end development, I bring ideas to life with clean code and creative design.</p>
                    <div class="skills">
                        <span class="skill-tag">HTML/CSS</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">UI/UX</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
     </main>
    <section id="experience" class="section dark-bg">
        <div class="container">
            <h2 class="section-title">Professional Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2021 - Present</div>
                    <div class="timeline-content">
                        <h3>Senior Web Developer</h3>
                        <p class="company">Tech Solutions Inc.</p>
                        <p>Led a team of developers to create responsive web applications. Implemented new features that increased user engagement by 40%.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2019 - 2021</div>
                    <div class="timeline-content">
                        <h3>Web Developer</h3>
                        <p class="company">Digital Creations</p>
                        <p>Developed and maintained client websites using modern frameworks and best practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/400x250" alt="Project 1">
                    </div>
                    <div class="project-info">
                        <h3>E-commerce Platform</h3>
                        <p>Full-featured online store with payment integration and inventory management.</p>
                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                        </div>
                        <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://via.placeholder.com/400x250" alt="Project 2">
                    </div>
                    <div class="project-info">
                        <h3>Portfolio Template</h3>
                        <p>Modern responsive portfolio template for creative professionals.</p>
                        <div class="project-tech">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                        </div>
                        <a href="#" class="project-link">View Project <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="section dark-bg">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-envelope"></i> your.email@example.com</p>
                    <p><i class="fas fa-phone"></i> +123 456 7890</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <form class="contact-form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn-primary">Send Message <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2023 RYS Portfolio. All rights reserved.</p>
            <a href="#top" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
        </div>
    </footer>
</body>
</html>