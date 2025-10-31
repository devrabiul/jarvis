<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning & Experimentation Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #f72585;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: var(--dark-color);
        }

        .welcome-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            padding: 3.5rem;
            margin: 2rem auto;
            max-width: 1000px;
            position: relative;
            overflow: hidden;
        }

        .welcome-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color), var(--success-color));
        }

        .welcome-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            font-size: 2.5rem;
        }

        .welcome-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 70px;
            height: 4px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }

        .welcome-subtitle {
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
        }

        .welcome-text {
            color: var(--dark-color);
            line-height: 1.8;
            margin-bottom: 2.5rem;
            font-size: 1.1rem;
        }

        .purpose-badge {
            display: inline-block;
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            font-weight: 500;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(67, 97, 238, 0.2);
        }

        .feature-icon {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }

        .feature-card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            padding: 2rem 1.5rem;
            text-align: center;
            height: 100%;
            background-color: rgba(248, 249, 250, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .feature-card h5 {
            color: var(--secondary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .btn-custom {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            padding: 0.85rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
            font-size: 1.1rem;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
            color: white;
        }

        .experiment-notice {
            background-color: rgba(247, 37, 133, 0.05);
            border-left: 4px solid var(--accent-color);
            padding: 1.5rem;
            border-radius: 0 10px 10px 0;
            margin: 2rem 0;
        }

        .experiment-notice h5 {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .decoration {
            position: absolute;
            opacity: 0.03;
            z-index: 0;
        }

        .decoration-1 {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background-color: var(--primary-color);
            top: -80px;
            right: -80px;
        }

        .decoration-2 {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background-color: var(--accent-color);
            bottom: -60px;
            left: -60px;
        }

        .decoration-3 {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: var(--success-color);
            top: 40%;
            left: -40px;
        }

        @media (max-width: 768px) {
            .welcome-container {
                padding: 2.5rem 1.5rem;
                margin: 1rem;
            }

            .welcome-title {
                font-size: 2rem;
            }

            .feature-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-container">
            <div class="decoration decoration-1"></div>
            <div class="decoration decoration-2"></div>
            <div class="decoration decoration-3"></div>

            <div class="text-center mb-4">
                <span class="purpose-badge">Learning & Experimentation Environment</span>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="welcome-title">Welcome!</h1>
                    <h3 class="welcome-subtitle">Thanks for visiting our learning space</h3>
                    <p class="welcome-text">
                        This webpage is currently being used for educational purposes, experimentation, and testing new web development concepts. Feel free to explore the features and layouts as we continue to learn and improve our skills.
                    </p>

                    <div class="experiment-notice">
                        <h5>Experimental Environment</h5>
                        <p class="mb-0">Please note that this site may contain experimental features, test content, and works in progress as part of our learning journey.</p>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-custom me-3">Explore Features</button>
                        <button class="btn btn-outline-primary">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <h5>Web Development</h5>
                                <p class="small">Testing HTML, CSS, JavaScript and modern frameworks in real-world scenarios.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-palette2"></i>
                                </div>
                                <h5>UI/UX Design</h5>
                                <p class="small">Experimenting with layouts, color schemes, and user interaction patterns.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h5>Performance Tests</h5>
                                <p class="small">Measuring and optimizing page load times and rendering performance.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <h5>Responsive Design</h5>
                                <p class="small">Testing how layouts adapt to different screen sizes and devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-12 text-center">
                    <p class="text-muted mb-0">
                        This is a learning environment • Content and features may change without notice • Thank you for understanding
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</body>
</html>
