<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Khumkanta Regmi - Civil Engineer specializing in structural analysis, seismic design, and infrastructure solutions.">
    <title>Khumkanta Regmi - Civil Engineer</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">KR</div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact" class="nav-contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-name">Hey, I'm Khumkanta,<br>a Civil Engineer from Nepal</h1>
                    <p class="hero-description">
                        Specializing in structural analysis, seismic design, and infrastructure solutions. 
                        Passionate about innovative engineering and sustainable construction practices.
                    </p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn-primary">Let's Talk →</a>
                        <div class="social-links">
                            <a href="tel:+9779866345032" class="social-icon" title="Phone">📞</a>
                            <a href="mailto:kk.reg002@gmail.com" class="social-icon" title="Email">✉️</a>
                            <a href="https://www.linkedin.com/in/kkregmi" target="_blank" class="social-icon" title="LinkedIn">💼</a>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/khumkanta.jpg') }}" alt="Khumkanta Regmi">
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="section">
        <div class="container">
            <h2 class="section-title">Experience</h2>
            <div class="experience-grid">
                <div class="experience-card">
                    <div class="exp-header">
                        <h3>Civil Engineer</h3>
                        <span class="exp-date">Oct 2024 – May 2025</span>
                    </div>
                    <p class="exp-company">Impulse Consultants Pvt. Ltd</p>
                    <ul class="exp-list">
                        <li>Drafted structural plans for 10+ bridge projects using AutoCAD</li>
                        <li>Prepared BOQ and cost estimates for project proposals</li>
                        <li>Global bridge analysis using MIDAS Civil and Idea Statica</li>
                    </ul>
                </div>
                <div class="experience-card">
                    <div class="exp-header">
                        <h3>Freelancer</h3>
                        <span class="exp-date">2023-Present</span>
                    </div>
                    <p class="exp-company">Remote Engineering Services</p>
                    <ul class="exp-list">
                        <li>Mapping, engineering drawings, and technical reports</li>
                        <li>Collaborated with global teams on tight deadlines</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section section-alt">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="projects-grid">
                <div class="project-card clickable-card" data-modal="project1">
                    <h3>Seismic Analysis & Design of RCC Office Building</h3>
                    <p class="project-subtitle">Structural design with seismic resistance</p>
                    <ul class="project-tags">
                        <li>ETABS</li>
                        <li>IS 1893:2016</li>
                        <li>NBC 105:2020</li>
                    </ul>
                    <span class="view-details">Click to view details →</span>
                </div>
                <div class="project-card clickable-card" data-modal="project2">
                    <h3>Bridge Design & Analysis</h3>
                    <p class="project-subtitle">Multiple bridge projects with IRC standards</p>
                    <ul class="project-tags">
                        <li>MIDAS Civil</li>
                        <li>Idea Statica</li>
                        <li>AutoCAD</li>
                    </ul>
                    <span class="view-details">Click to view details →</span>
                </div>
                <div class="project-card clickable-card" data-modal="project3">
                    <h3>Hydraulic Ramp Pump</h3>
                    <p class="project-subtitle">Water supply system without electricity</p>
                    <ul class="project-tags">
                        <li>Research</li>
                        <li>Prototype</li>
                    </ul>
                    <span class="view-details">Click to view details →</span>
                </div>
                <div class="project-card clickable-card" data-modal="project4">
                    <h3>Property Valuation & Research</h3>
                    <p class="project-subtitle">Valuation and pavement research projects</p>
                    <ul class="project-tags">
                        <li>Valuation</li>
                        <li>Research</li>
                    </ul>
                    <span class="view-details">Click to view details →</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title">Skills</h2>
            <div class="skills-compact">
                <div class="skill-group clickable-card" data-modal="skill1">
                    <h3>Technical Skills</h3>
                    <p>ETABS, AutoCAD, MIDAS Civil, Idea Statica, Revit, SW Roads, SW DTM</p>
                    <span class="view-details">Click for details →</span>
                </div>
                <div class="skill-group clickable-card" data-modal="skill2">
                    <h3>Design Codes</h3>
                    <p>NBC 105:2020, IS 1893:2016, IS 456:2000, IRC Standards</p>
                    <span class="view-details">Click for details →</span>
                </div>
                <div class="skill-group clickable-card" data-modal="skill3">
                    <h3>Languages & Soft Skills</h3>
                    <p>Nepali (Native), English (Good), Hindi (Proficient)</p>
                    <span class="view-details">Click for details →</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-grid">
                <a href="tel:+9779866345032" class="contact-card">
                    <div class="contact-icon">📞</div>
                    <h3>Phone</h3>
                    <p>+977-9866345032</p>
                </a>
                <a href="mailto:kk.reg002@gmail.com" class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h3>Email</h3>
                    <p>kk.reg002@gmail.com</p>
                </a>
                <a href="https://www.linkedin.com/in/kkregmi" target="_blank" class="contact-card">
                    <div class="contact-icon">💼</div>
                    <h3>LinkedIn</h3>
                    <p>Connect with me</p>
                </a>
                <div class="contact-card">
                    <div class="contact-icon">📍</div>
                    <h3>Location</h3>
                    <p>Kathmandu, Nepal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Khumkanta Regmi. All rights reserved.</p>
        </div>
    </footer>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Modal data
        const modalData = {
            project1: {
                title: 'Seismic Analysis & Design of RCC Office Building',
                date: 'Dec 2023 - Sep 2024',
                details: [
                    'Used dynamic analysis to assess building reaction to seismic forces',
                    'Gained thorough understanding of building codes and earthquake design principles',
                    'Designed structural elements (beams, columns, slabs, staircase, lift shear walls, basement walls) to withstand seismic forces',
                    'Applied codes: IS 1893(Part I):2016, NBC 105:2020, IS 456:2000, IS 13920:2016',
                    'Conducted comparative study of results from IS 1893(Part I):2016 and NBC 105:2020',
                    'Prepared detailed structural drawings and documentation'
                ],
                tools: ['ETABS', 'AutoCAD', 'IS 1893:2016', 'NBC 105:2020', 'IS 456:2000', 'IS 13920:2016']
            },
            project2: {
                title: 'Bridge Design & Analysis',
                date: 'Oct 2024 - May 2025',
                details: [
                    'Drafted structural plans for more than ten bridge projects using AutoCAD',
                    'Ensured all designs adhered to IRC standards',
                    'Prepared Bills of Quantities (BOQ) and comprehensive cost estimates',
                    'Optimized total project costs for proposals',
                    'Performed global analysis of bridge models using MIDAS Civil',
                    'Conducted complex joint analysis using Idea Statica',
                    'Analyzed topographic survey data and prepared topo maps using SW DTM, SW Roads and AutoCAD',
                    'Improved project planning accuracy through detailed analysis'
                ],
                tools: ['MIDAS Civil', 'Idea Statica', 'AutoCAD', 'SW DTM', 'SW Roads', 'IRC Standards']
            },
            project3: {
                title: 'Hydraulic Ramp Pump (Hydram) for Water Supply and Irrigation',
                date: 'Sept 2023 - Oct 2023',
                details: [
                    'Conducted suitability study of hydraulic ramp pump for Nepal\'s context',
                    'Prepared functional working model for "nec ingenium 2023" exhibition',
                    'Presented in Batch wise and Program wise project exhibition',
                    'Utilized water hammer effect for water delivery without electricity',
                    'Innovative solution for rural water supply and irrigation systems'
                ],
                tools: ['Research', 'Prototype Development', 'Water Engineering']
            },
            project4: {
                title: 'Property Valuation & Research Projects',
                date: 'Jan - Mar 2023',
                details: [
                    'Property Valuation for Land and Building in Dhangadi, Kailali (Mar 2023)',
                    'Conducted detailed property valuation including market and government rates',
                    'Calculated depreciation using weighted average and plinth area methods',
                    'Research Project on Comparative Study of Normal and Plastic Pavement',
                    'Conducted comparative analysis of plastic vs. normal pavement',
                    'Performed tests on plastic mix-coated and bituminous aggregates',
                    'Analyzed enhanced strength and durability characteristics'
                ],
                tools: ['Valuation Methods', 'Research Analysis', 'Material Testing']
            },
            skill1: {
                title: 'Technical Skills',
                details: [
                    'Structural Analysis, Seismic Design and 3D Modeling: ETABS, Revit',
                    'Advanced Drafting: AutoCAD (expert level)',
                    'Surveying and Analysis: SW Roads, SW DTM, Google Earth',
                    'Modelling and Analysis of bridge and connections: MIDAS Civil, Idea Statica',
                    'Building Bylaws and Design Codes: NBC 105:2020, IS 1893:2016',
                    'Programming: C, C++ Programming languages',
                    'Currently pursuing: VBA Excel Programming, Python Programming, Revit, ArcGIS'
                ]
            },
            skill2: {
                title: 'Design Codes & Standards',
                details: [
                    'NBC 105:2020 - Seismic Design of Buildings in Nepal',
                    'IS 1893:2016 - Criteria for Earthquake Resistant Design of Structures',
                    'IS 456:2000 - Code of Practice for Plain and Reinforced Concrete',
                    'IS 13920:2016 - Ductile Design and Detailing of Reinforced Concrete Structures',
                    'IRC Standards - Indian Road Congress standards for bridge design',
                    'Proficient in comparative code-based design and analysis',
                    'Expert in applying codes to ensure compliance and assess earthquake-induced damage'
                ]
            },
            skill3: {
                title: 'Languages & Soft Skills',
                details: [
                    'Languages:',
                    '• Nepali (Native)',
                    '• English (Good)',
                    '• Hindi (Proficient)',
                    '',
                    'Soft Skills:',
                    '• Analytical Problem-Solving',
                    '• Team Collaboration',
                    '• Effective Communication',
                    '• Time Management',
                    '• Project Coordination',
                    '• Remote Collaboration'
                ]
            }
        };

        // Modal functionality
        const modal = document.getElementById('modal');
        const modalBody = document.getElementById('modal-body');
        const closeBtn = document.querySelector('.modal-close');

        document.querySelectorAll('.clickable-card').forEach(card => {
            card.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal');
                const data = modalData[modalId];
                
                if (data) {
                    let html = `<h2>${data.title}</h2>`;
                    if (data.date) {
                        html += `<p class="modal-date">${data.date}</p>`;
                    }
                    html += '<div class="modal-details"><ul>';
                    data.details.forEach(detail => {
                        if (detail.trim()) {
                            html += `<li>${detail}</li>`;
                        }
                    });
                    html += '</ul></div>';
                    if (data.tools) {
                        html += '<div class="modal-tools"><h3>Tools & Technologies:</h3><div class="tool-tags">';
                        data.tools.forEach(tool => {
                            html += `<span class="tool-tag">${tool}</span>`;
                        });
                        html += '</div></div>';
                    }
                    modalBody.innerHTML = html;
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body>
</html>

