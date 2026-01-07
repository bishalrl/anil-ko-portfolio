import React from 'react';

const cvData = {
    "name": "Khumkanta Regmi",
    "title": "Civil Engineer",
    "contact": {
        "phone": "+977-9866345032",
        "email": "kk.reg002@gmail.com",
        "linkedin": "www.linkedin.com/in/kkregmi",
        "location": "Kathmandu, Nepal"
    },
    "summary": "Civil Engineering graduate with working experience in a bridge consulting firm, specializing in advanced drafting using AutoCAD, Cost Estimation, Structural Analysis, and Excel-based data management. Proficient in delivering precise technical drawings and optimizing project workflows, contributing to efficient design projects. Adapt at collaborating with multidisciplinary teams to meet project deadlines and standards. Passionate about leveraging structural and aesthetic design and technological advancements to drive innovative infrastructure solutions in building structures with proficiency in applying Nepal Building Code (NBC 105:2020) and Indian Standards (IS 1893:2016) to ensure compliance and assess earthquake-induced structural and aesthetic damage. With a passion for innovative structural and aesthetic design, I am determined to take on new challenges and drive excellence in structural and aesthetic engineering projects.",
    "education": [
        {
            "degree": "Bachelor of Engineering in Civil Engineering",
            "institution": "Nepal Engineering College-nec, Pokhara University, Bhaktapur",
            "period": "Nov 2019 - Aug 2024"
        },
        {
            "degree": "National Examination Board (NEB, +2)",
            "institution": "Nepal Adarsha Secondary School, Waling",
            "period": "May 2017 - May 2019"
        }
    ],
    "skills": {
        "technical": [
            "Structural Analysis, Seismic Design and 3D Modeling (ETABS, Revit)",
            "Advanced Drafting (AutoCAD)",
            "Surveying and Analysis (SW Roads, SW DTM, Google Earth)",
            "Modelling and Analysis of bridge and connections (MIDAS Civil and Idea Statica)",
            "Building Bylaws and Design Codes (NBC 105:2020, IS 1893:2016)",
            "C, C++ Programming language"
        ],
        "soft": [
            "Analytical Problem-Solving",
            "Team Collaboration",
            "Effective Communication",
            "Time Management"
        ],
        "languages": [
            "Nepali (Native)",
            "English (Good)",
            "Hindi (Proficient)"
        ]
    },
    "experience": [
        {
            "role": "Civil Engineer",
            "company": "Impulse Consultants Pvt. Ltd",
            "period": "October 2024 – May 2025",
            "responsibilities": [
                "AutoCAD was used to draft structural plans for more than ten bridge projects, making sure that they adhered to IRC standards.",
                "Bills of Quantities (BOQ) and comprehensive cost estimates were prepared for project proposals, and optimize the total project cost.",
                "Global analysis of the bridge model using the MIDAS Civil, and complex joint analysis using Idea Statica adhering to the IRC standards.",
                "Topographic surveys data were analysed and prepare topo maps using SW DTM, SW Roads and AutoCAD, improving project planning accuracy."
            ]
        },
        {
            "role": "Freelancer",
            "company": "",
            "period": "2023-Present",
            "responsibilities": [
                "Specialized in mapping, engineering drawings, and technical report writing while providing excellent civil engineering services to clients worldwide.",
                "Collaborated remotely with multidisciplinary teams, leveraging strong communication and time management skills to meet tight project deadlines."
            ]
        }
    ],
    "projects": [
        {
            "title": "Seismic Analysis and Design of RCC Structure Office Building",
            "period": "Dec 2023-Sep 2024",
            "details": [
                "Using dynamic analysis, the building's reaction to seismic forces was assessed.",
                "A thorough understanding of building codes and earthquake design principles was gained.",
                "Designed structural elements (beams, columns, slabs, staircase, lift shear walls, basement walls) to withstand seismic forces as per IS 1893(Part I):2016(Criteria for Earthquake Resistant Design of Structures), NBC 105:2020(Seismic Design of Buildings in Nepal), IS 456:2000(Code of Practice for Plain and Reinforced Concrete) and IS 13920:2016(Ductile Design and Detailing of Reinforced Concrete Structures Subjected to Seismic Forces).",
                "Comparative study of results for design and analysis from IS 1893(Part I):2016 and NBC 105:2020.",
                "Prepared detailed structural drawings and documentation."
            ]
        },
        {
            "title": "Hydraulic Ramp Pump (Hydram) for water supply and irrigation",
            "period": "Sept 2023-Oct 2023",
            "details": [
                "Conducted a suitability study of the hydraulic ramp pump for Nepal's context and prepared a functional working model to present in the “nec ingenium 2023” Batch wise and Program wise project exhibition.",
                "Utilized the water hammer effect in the hydraulic ramp pump for water delivery without using electricity."
            ]
        },
        {
            "title": "Property Valuation for Land and Building in Dhangadi, Kailali",
            "period": "Mar 2023",
            "details": [
                "Conducted detailed property valuation for land and building in Dhangadi, Kailali, including assessment of market and government rates, calculation of depreciation, and use of weighted average and plinth area methods.",
                "Got knowledge of land and building estimation, valuation methodologies, and applying depreciation techniques to determine the present value of properties."
            ]
        },
        {
            "title": "Research Project on Comparative Study of Normal and Plastic Pavement",
            "period": "Jan- Mar 2023",
            "details": [
                "Conducted comparative analysis of plastic vs. normal pavement for enhanced strength and durability.",
                "Performed different tests on plastic mix -coated and bituminous aggregates for comparative analysis."
            ]
        }
    ]
};

const App = () => {
    return (
        <div className="main-wrapper">
            <nav className="navbar">
                <div className="container">
                    <a className="nav-brand" href="#">{cvData.name}</a>
                    <ul className="nav-menu">
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a className="nav-contact" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <header className="hero">
                <div className="container">
                    <div className="hero-content">
                        <div className="hero-text">
                            <h1 className="hero-name">{cvData.name}</h1>
                            <p className="hero-description">{cvData.summary}</p>
                            <div className="hero-actions">
                                <a href="#projects" className="btn-primary">View My Work</a>
                                <a href="/cv info.txt" download="Khumkanta_Regmi_CV.txt" className="btn-primary">Download CV</a>
                                <div className="social-links">
                                    <a href={`https://${cvData.contact.linkedin}`} className="social-icon" aria-label="LinkedIn"><i className="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div className="hero-image">
                            <img src="/images/khumkanta.jpg" alt={cvData.name} />
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <section id="experience" className="section section-alt">
                    <div className="container">
                        <h2 className="section-title">Work Experience</h2>
                        <div className="experience-grid">
                            {cvData.experience.map((exp, index) => (
                                <div className="experience-card" key={index}>
                                    <div className="exp-header">
                                        <h3>{exp.role}</h3>
                                        <span className="exp-date">{exp.period}</span>
                                    </div>
                                    <p className="exp-company">{exp.company}</p>
                                    <ul className="exp-list">
                                        {exp.responsibilities.map((res, i) => (
                                            <li key={i}>{res}</li>
                                        ))}
                                    </ul>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>

                <section id="projects" className="section">
                    <div className="container">
                        <h2 className="section-title">Featured Projects</h2>
                        <div className="projects-grid">
                            {cvData.projects.map((project, index) => (
                                <div className="project-card" key={index}>
                                    <h3>{project.title}</h3>
                                    <p className="project-subtitle">{project.period}</p>
                                    <ul className="exp-list">
                                        {project.details.map((detail, i) => (
                                            <li key={i}>{detail}</li>
                                        ))}
                                    </ul>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>

                <section id="skills" className="section section-alt">
                    <div className="container">
                        <h2 className="section-title">Core Competencies</h2>
                        <div className="skills-compact">
                            <div className="skill-group">
                                <h3>Technical Skills</h3>
                                <ul>
                                    {cvData.skills.technical.map((skill, index) => (
                                        <li key={index}>{skill}</li>
                                    ))}
                                </ul>
                            </div>
                            <div className="skill-group">
                                <h3>Soft Skills</h3>
                                <ul>
                                    {cvData.skills.soft.map((skill, index) => (
                                        <li key={index}>{skill}</li>
                                    ))}
                                </ul>
                            </div>
                            <div className="skill-group">
                                <h3>Languages</h3>
                                <ul>
                                    {cvData.skills.languages.map((lang, index) => (
                                        <li key={index}>{lang}</li>
                                    ))}
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact" className="section contact-section">
                    <div className="container">
                        <h2 className="section-title">Get in Touch</h2>
                        <div className="contact-grid">
                            <div className="contact-card">
                                <div className="contact-icon"><i className="fas fa-phone"></i></div>
                                <h3>Phone</h3>
                                <p>{cvData.contact.phone}</p>
                            </div>
                            <div className="contact-card">
                                <div className="contact-icon"><i className="fas fa-envelope"></i></div>
                                <h3>Email</h3>
                                <p>{cvData.contact.email}</p>
                            </div>
                            <div className="contact-card">
                                <div className="contact-icon"><i className="fab fa-linkedin"></i></div>
                                <h3>LinkedIn</h3>
                                <p><a href={`https://${cvData.contact.linkedin}`}>{cvData.contact.linkedin}</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer className="footer">
                <div className="container">
                    <p>&copy; {new Date().getFullYear()} {cvData.name}. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    );
};

export default App;