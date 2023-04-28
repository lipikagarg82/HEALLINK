<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Website</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "Untitled-1.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

    <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <a href = "index1.html" class = "navbar-brand">
                    <img src = "logo.png" alt = "site logo">
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "logo.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "2.jpg">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a class="active"href = "#home" >Home</a>
                        </li>
                        <li class = "nav-item">
                            <a class="active" href = "#about" >About</a>
                        </li>
                        <li class = "nav-item">
                            <a class="active"href = "#services">Speciality</a>
                        </li>
                       
                        
                        <li class = "nav-item">
                            <a class="active"href = "#posts">Blogs</a>
                        </li>
                        <li class = "nav-item">
                            <a class="active"href = "..\healthcare\Her Health DTU Hackathon\ChatApp\ChatApp\signup.php">My Community</a>
                        </li>
                        <li class = "nav-item">
                            <a class="active"href = "index.php" >Appointment</a>
                        </li>
                    </ul>
                    <div class = "search-bar">
                        <form>
                            <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <img src = "search.jpg">
                                </span>
                                <input type = "search" class = "search-control" placeholder="Search here">
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </nav>

        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1>Because every woman deserves personalized care.<br> </h1>
                    
                    <p class = "lead">Revolutionizing healthcare for her i.e Non Judgemental</p>
                    <p class = "text text-md">10000+ women trust us</p>
                    <div class = "btn-group">
                        <a href = "#" class = "btn btn-white">Learn More</a>
                        <a href = "#" class = "btn btn-light-blue">Sign In</a>
                    </div>
                </div>
                <div class = "header-inner-right">
                    <img src = "main.png">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head">
                            <h2>About Us</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">Heal Link is a women's healthtech startup offering judgment-free, personalized, confidential and hassle-free healthcare solutions.

                            We intend to solve health concerns of Indian women across their lifetime-from puberty to menopause and beyond. Our services are available online and in-clinic. We want to empower every Indian woman to take charge of their own health and wellness journey.
                            
                            We frequently host webinars and workshops on exciting and undiscovered topics around women's health in partnership with corporates, specialized doctors and various communities.
                             </p>
                        <a href = "#" class = "btn btn-white">Learn More</a>
                    </div>
                    <div class = "about-right flex">
                        <div class = "img">
                            <img src = "banner-1-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->
        
                    
                    

        <!-- banner one -->
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i> When you are young and healthy, it never occurs to you that in a single second your whole life could change. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Anonim Nano</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">Our Speciality</h2>
                    
                    <div class = "line-art flex">
                        <div></div>
                        
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "gynaecology-10.jpg">
                        </div>
                        <a href><h4>Gynaecology</h4></a>
                        
                    </article>
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "i-cardiology.png">
                        </div>
                        <a href><h4>Cardiology</h4></a>
                        
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "Group 17.png">
                        </div>
                        <a href><h4>Nutritionist</h4></a>
                        
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "Group 10.png">
                        </div>
                        <a href><h4>Urology</h4></a>
                       
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "Group 11.png">
                        </div>
                        <a href><h4>Orthopedics</h4></a>
                        
                    </article>
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "Group 9.png">
                        </div>
                        <a href><h4>Dermatology</h4></a>
                        
                    </article>
                </article>
                <article class = "service-item">
                    <div class = "icon">
                        <img src = "Vector.png">
                    </div>
                    <a href><h4>Dental</h4></a>
                    
                </article>
                <article class = "service-item">
                    <div class = "icon">
                        <img src = "mind-3 1.jpg">
                    </div>
                    <a href><h4>Psychology</h4></a>
                    
                </article>

                </div>
            </div>
        </section>
        <!-- end of services section -->

        

       

        <!-- package services section -->
        <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>How it Works</h2>
                    
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Patient Books Appointment</h3>
                        <p class = "text text-sm">Using our portal patient can search relevant physician and book consultation date as per their convenience</p>
                        
                    </div>

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fa fa-hospital-o"style="font-size:36px"></i>
                        </div>
                        <h3>Patient Arrives At The Clinic</h3>
                        <p class = "text text-sm">Patient will locate the clinic as per mentioned address and meet receptionist for further procedure.</p>
                        
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Consultation with Physician</h3>
                        <p class = "text text-sm">Patient will checkup the patient and will proceed for further examination accordingly if needed</p>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end of package services section -->

        <!-- posts section -->
        <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Blogs</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            
                        </div>
                        <div class = "content">
                            <h4>How Much Protein Can Your Body Absorb? Here's How Much To Eat In One Sitting</h4>
                            <p class = "text text-sm">If muscle growth is your goal, what you put on your plate is just as important as how much weight you're lifting at the gym. 
                                But besides filling up on lean proteins or sipping a protein shake after your workout, how you distribute your protein intake throughout the day can also affect how quickly you'll see results.</p>
                            
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2022</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            
                        </div>
                        <div class = "content">
                            <h4>This Ayurvedic Facial Massage Brightens Your Skin & Reduces Toxins</h4>
                            <p class = "text text-sm">For thousands of years, cultures around the world have relied on massage techniques to promote whole-body healing—think moving lymph fluid, increasing circulation, aiding detoxification, and more. Given these benefits, it's really no wonder these modalities have withstood the test of time; you might opt for a gentle 
                                at-home facial versus full-on bodywork, but still, you pay homage to ancient healing techniques with each scrape across your jawline.</p>
                            
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> December 7, 2022</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            
                        </div>
                        <div class = "content">
                            <h4>3 Beginner Breathwork Techniques & The Best Time Of Day To Do Them</h4>
                            <p class = "text text-sm">Meditation is certainly a useful tool for the mind and the body. However, many people find it hard to meditate because 
                                when we sit still and quiet our external stimulation, all of the racing thoughts, feelings, and sensations bubble up to the surface.</p>
                            
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> March 9, 2023</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 3 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of posts section -->

        
    </main>

    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = >
                    </div>
                    <p class = "text text-md">We offer a wide range of services from routine checkups to specialized 
                        women's health services such as gynecological exams, birth control, and fertility treatments. Our team of highly skilled 
                        professionals are committed to helping our patients achieve their health goals and strive to provide them with the best care possible. </p>
                    
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Privacy Policy</a></li>
                        
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">make an appointment</h3>
                    <li><a href = "#" class = "text-white">Appointment</a></li>
                    
                            <i class = "fas fa-envelope"></i>
                            <span>HealLink@gmail.com</span>
                        </li>
                        <li>
                            <i class = "fas fa-phone"></i>
                            <span>+003 478 2834(00)</span>
                        </li>
                    </ul>
                </div>
            </div>

            
        </div>
    </footer>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>