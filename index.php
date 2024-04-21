
<!-- Adding Database ( Backend Connect ) -->

<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $query = "INSERT INTO `contact_form` (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')";
    $insert = mysqli_query($conn, $query);

    if ($insert) {
        $message[] = 'Appointment made successfully!';
    } else {
        $message[] = 'Failed to create appointment. Please try again later.';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Hospital Management System </title>

    <!-- Font Awesome cdn Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fa-solid fa-heart-pulse"> </i> <strong> We Care </strong> Medicentre </a>
    
        <nav class="navbar">
            <a href="#home"> Home </a>
            <a href="#about"> About </a>
            <a href="#services"> Services </a>
            <a href="#doctors"> Doctors </a>
            <a href="#appointment"> Appointment </a>
            <a href="#review"> Review </a>
            <a href="#blogs"> Blogs </a>
        </nav>
    
        <div id="menu-btn" class=""fa-solid fa-bars""></div>
    
    </header>

    <!-- HOME PAGE -->

    <section class="home" id="home">

        <div class="image">
            <img src="Images/Home-Img.svg" alt="">
        </div>
    
        <div class="content">
            <h3> We take care of your healthy life </h3>
            <p> A person who has good physical health is likely to have bodily functions and processes working at their peak. </p>
            <a href="#appointment" class="btn"> Take Appointment <span class="fa-solid fa-chevron-right"> </span> </a>
        </div>
    
    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fa-solid fa-user-doctor"></i>
            <h3> 200+ </h3>
            <p> Doctors At Work </p>
        </div>
    
        <div class="icons">
            <i class="fa-solid fa-users"></i>
            <h3> 1100+ </h3>
            <p> Satisfied Patients </p>
        </div>
    
        <div class="icons">
            <i class="fa-solid fa-bed-pulse"></i>
            <h3> 350+ </h3>
            <p> Bed Facility </p>
        </div>
    
        <div class="icons">
            <i class="fa-solid fa-hospital"></i>
            <h3> 20+ </h3>
            <p> Available Hospitals </p>
        </div>
    
    </section>

    <!-- ABOUT PAGE -->

    <section class="about" id="about">

        <h1 class="heading"> <span> About </span> Us </h1>
    
        <div class="row">
    
            <div class="image">
                <img src="Images/About-Img.svg" alt="">
            </div>
    
            <div class="content">
                <h3> Take the world's best quality treatment </h3>
                <p> Welcome to <b>We Care Medicentre</b> , where compassionate care meets cutting-edge medicine. Our dedicated team of healthcare professionals is committed to your well-being, providing personalized treatment and support. </p>
                <p> Experience excellence in healthcare. Trust <b> We Care Medicentre </b> for comprehensive medical services delivered with expertise and empathy. </p>
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
        </div>
    
    </section>

    <!-- SERVICES PAGE -->

    <section class="services" id="services">

        <h1 class="heading"> Our <span> Services </span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <i class="fa-solid fa-notes-medical"></i>
                <h3> Free Checkups </h3>
                <p> Our complimentary checkup services empower you to monitor your well-being regularly. Take advantage of our free health screenings and consultations to stay ahead on your path to wellness. </p>
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-truck-medical"></i>
                <h3> 24/7 Ambulance </h3>
                <p> Our dedicated ambulance fleet is on standby round the clock. Whether it's an emergency or a medical transfer, count on us for swift and reliable transportation. Your well-being is our priority. </p> <br><br>  
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-user-doctor"></i>
                <h3> Expert Doctors </h3>
                <p> Our team of highly skilled and specialized physicians is dedicated to providing top-notch medical care. From diagnostics to treatment, trust our experts to guide you on your path to recovery. </p>
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-pills"></i>
                <h3> Medicines </h3>
                <p> Our pharmacy offers a comprehensive range of high-quality medications. From prescriptions to over-the-counter remedies, trust us to meet your healthcare needs. </p> <br><br>
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3> Bed Facility </h3>
                <p> Our state-of-the-art facility offers comfortable and well-equipped beds for patients. Whether you need rest after surgery or extended care, we prioritize your comfort and recovery. </p>
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-heart-pulse"></i>
                <h3> Total Care </h3>
                <p> At <b>We Care Medicentre</b>, we provide comprehensive total care for your health needs. From diagnostics to rehabilitation, our team is committed to your well-being. </p> <br><br>
                <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
            </div>
    
        </div>
    
    </section>

    <!-- DOCTORS PAGE -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> Our <span> Doctors </span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="Images/Doctor-1.jpg" alt="">
                <h3> Dr. Anil Handoo </h3>
                <span> Expert Pathologist </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="Images/Doctor-2.jpg" alt="">
                <h3> Dr. Ganesh Nagarajan </h3>
                <span> Surgical Oncologist </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="Images/Doctor-3.jpg" alt="">
                <h3> Dr. Hiren N. Doshi </h3>
                <span> Pediatric Critical care </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="Images/Doctor-4.jpg" alt="">
                <h3> Prof. (Dr.) Pradeep B. Bhosale </h3>
                <span> Surgical Orthopedic Specialist </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="Images/Doctor-5.jpg" alt="">
                <h3> Dr. Rekha Ambegaokar </h3>
                <span> Obstetrician and Gynaecologist </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="Images/Doctor-6.jpg" alt="">
                <h3> Dr. Vishal Khullar </h3>
                <span> General Cardiac Surgeries </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                
                </div>
            </div>

            <div class="box">
                <img src="Images/Doctor-7.jpg" alt="">
                <h3> Dr. Nikhil S. Sardar </h3>
                <span> Ophthalmology ( Eye Specialist ) </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="Images/Doctor-8.jpg" alt="">
                <h3> Dr. Raina N. Nahar </h3>
                <span> Dermatology And Hair Transplant </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="Images/Doctor-9.jpg" alt="">
                <h3> Dr. Keyur Sheth </h3>
                <span> Gastrologist </span>

                <div class="share">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-x-twitter"></a>
                    <a href="#" class=></a>
                    <a href="#" class="fa-brands fa-linkedin"></a>
                </div>
            </div>
    
        </div>
    
    </section>

    <!-- APPOINTMENT PAGE -->

    <section class="appointment" id="appointment">

        <h1 class="heading"> <span> Book Your Appointment </span> Now !  </h1>    
    
        <div class="row">
    
            <div class="image">
                <img src="Images/Appointment-Img.svg" alt="">
            </div>
            
            <!-- Backend Connect  -->

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
                if(isset($message)) {
                    foreach($message as $message) {
                    echo '<p class ="message">'.$message.'</p>';
                    }
                }
                ?>

            <!-- Backend Connect End -->

                <h3> Make An Appointment </h3>

                <input type="text"name="name" placeholder=" Your Full-Name " class="box">

                <input type="number"name="number" placeholder=" Your Contact No. " class="box">

                <input type="email"name="email" placeholder=" Your E-Mail ID " class="box">

                <input type="date"name="date" class="box">
                <input type="submit" name="submit" value=" Request For An Appointment " class="btn">

            </form>
    
        </div>
    
    </section>

    <!-- REVIEWS PAGE  -->

    <section class="review" id="review">
    
        <h1 class="heading"> Patient <span> Review's </span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="Images/Review-1.jpg" alt="">
                <h3> Ankur Verma </h3>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="text">“The hospital staff provided exceptional care during my recent visit. The doctors were knowledgeable, and the nurses were attentive. Overall, a positive experience.”</p>
            </div>
    
            <div class="box">
                <img src="Images/Review-2.jpg" alt="">
                <h3> Hitesh Patel </h3>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="text"> "Exceptional care from the moment I walked in. The staff was attentive, compassionate, and efficient. Grateful for their expertise.” </p>
            </div>
    
            <div class="box">
                <img src="Images/Review-3.jpg" alt="">
                <h3> Jyotsna Naik </h3>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p class="text"> “Impressed by the cleanliness and organization. Doctors and nurses were friendly, explaining everything thoroughly. A reassuring visit.” </p>
            </div>

        </div>

    </section>

    <!-- BLOGS PAGE  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> OUR <span> BLOGS </span> </h1>
    
        <div class="box-container">
    
            <div class="box">

                <div class="image">
                    <img src="Images/Blog-1.jpg"">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fa-solid fa-calendar"></i> 31 March, 2024 </a>
                        <a href="#"> <i class="fa-solid fa-user"></i> By Dr. Ambrish Mithal </a>
                    </div>

                    <h3> Type 1 Diabetes: Symptoms, Diagnosis and Treatment </h3>

                    <p> Type 1 diabetes is more than just a medical condition; it is a disorder impacting the daily affairs of those affected and also the caregivers. From the intricate management of blood glucose levels to the ever- present awareness of potential complications, the impact of type 1 Diabetes extends beyond the clinical realm into the very fabric of affected individuals' lives. </p> <br><br><br>

                    <a href=" https://www.maxhealthcare.in/blogs/type-1-diabetes-causes-symptoms-and-diagnosis " class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
                </div>
            </div>
    
            <div class="box">

                <div class="image">
                    <img src="Images/Blog-2.jpg" alt="">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fa-solid fa-calendar"></i> 25 March, 2024 </a>
                        <a href="#"> <i class="fa-solid fa-user"></i> By Amit Batra </a>
                    </div>

                    <h3> Empower Your Wellness: Practical Tips for Physical and Mental Well-Being </h3>

                    <p> In the fast-paced world we live in, maintaining a balance between physical health and mental well-being is crucial. The two are deeply interconnected, with each influencing the other significantly. Whether you're looking to enhance your overall health or seeking ways to uplift your mood and mental clarity, adopting a holistic approach is key. </p> <br><br>
                    <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
                </div>
            </div>
    
            <div class="box">

                <div class="image">
                    <img src="Images/Blog-3.jpg" alt="">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fa-solid fa-calendar"></i> 20 March, 2024 </a>
                        <a href="#"> <i class="fa-solid fa-user"></i> By Dr.Sachin Gupta </a>
                    </div>

                    <h3> Targeted Cancer Therapies: A Comprehensive Overview </h3>

                    <p> Cancer remains one of the most formidable challenges to human health, with its complexity and heterogeneity presenting obstacles to traditional treatment approaches. However, the advent of targeted therapies has revolutionized cancer treatment by offering personalized, precision medicine tailored to the specific characteristics of individual cancers. </p>

                    <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">

                <div class="image">
                    <img src="Images/Blog-4.jpg" alt="">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fa-solid fa-calendar"></i> 15 March, 2024 </a>
                        <a href="#"> <i class="fa-solid fa-user"></i> By Nidhi Sahai </a>
                    </div>

                    <h3> 5 Important Benefits of Drinking Coconut Water </h3>

                    <p> Coconut water is a new health obsession: it is cholesterol free, contains less sugar, low in calories, and is rich in calcium, magnesium, potassium, and phosphorous. With brilliant hydrating properties, it prevents from cancer, kidney stones, and several cardiovascular diseases. </p>

                    <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">

                <div class="image">
                    <img src="Images/Blog-5.jpg" alt="">
                </div>
    
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fa-solid fa-calendar"></i> 10 March, 2024 </a>
                        <a href="#"> <i class="fa-solid fa-user"></i> By Nidhi Sahai </a>
                    </div>
    
                    <h3> 10 Foods that Improve Memory and Focus! </h3>
    
                    <p> Eating an adequate diet is beneficial for both mental and physical health. The brain plays the role of a command center in our body, and just like every other body part, the brain also requires some specific nutrients to work efficiently. By incorporating specific nutrients into our everyday diet, we can improve our memory and focus. </p><br>
    
                    <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">

                <div class="image">
                    <img src="Images/Blog-6.jpg" alt="">
                </div>
                
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fa-solid fa-calendar"></i> 5 March, 2024 </a>
                        <a href="#"> <i class="fa-solid fa-user"></i> By Parul Sharma </a>
                    </div>
                
                    <h3> Eye Flu: Symptoms, Prevention, and At-Home Care </h3>
                
                    <p> Eye fluid or conjunctivitis is a highly contagious eye infection affecting many. Conjunctivitis is usually viral and may have superadded bacterial or allergic eye disease.The most common viruses responsible for conjunctivitis include adenoviruses, enteroviruses, and herpes simplex viruses. </p>
                
                    <a href="#" class="btn"> Learn More <span class="fa-solid fa-chevron-right"></span> </a>
                </div>
                </div>
    
        </div>
    
    </section>
    

    <section class="footer">
    
        <div class="box-container">
    
            <div class="box">
                <h3> Quick Links </h3>
                <a href="#home"> <i class="fa-solid fa-chevron-right"></i> Home </a>
                <a href="#about"> <i class="fa-solid fa-chevron-right"></i> About </a>
                <a href="#services"> <i class="fa-solid fa-chevron-right"></i> Services </a>
                <a href="#doctors"> <i class="fa-solid fa-chevron-right"></i> Doctors </a>
                <a href="#appointment"> <i class="fa-solid fa-chevron-right"></i> Appointment </a>
                <a href="#review"> <i class="fa-solid fa-chevron-right"></i> Review </a>
                <a href="#blogs"> <i class="fa-solid fa-chevron-right"></i> Blogs </a>
            </div>
    
            <div class="box">
                <h3> Our Services</h3>
                <a href="#"> <i class="fa-solid fa-chevron-right"></i> Dental Care </a>
                <a href="#"> <i class="fa-solid fa-chevron-right"></i> Message Therapy </a>
                <a href="#"> <i class="fa-solid fa-chevron-right"></i> Cardiology </a>
                <a href="#"> <i class="fa-solid fa-chevron-right"></i> Diagnosis </a>
                <a href="#"> <i class="fa-solid fa-chevron-right"></i> Ambulance Service </a>
            </div>
    
            <div class="box">
                <h3> Appointment Info</h3>
                <a href="#"> <i class="fa-solid fa-phone"></i> +91 8693824751 </a>
                <a href="#"> <i class="fa-solid fa-phone"></i> +91 8801782545 </a>
                <a href="#"> <i class="fa-solid fa-envelope"></i> wecaremedicare1@gmail.com </a>
                <a href="#"> <i class="fa-solid fa-envelope"></i> wcmedicare45@gmail.com </a>
                <a href="#"> <i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra </a>
            </div>
    
            <div class="box">
                <h3> Follow Us </h3>
                
                <a href="#"> <i class="fa-brands fa-facebook"></i> Facebook </a>
                <a href="#"> <i class="fa-brands fa-x-twitter"></i> X-Twitter </a>
                <a href="#"> <i class="fa-brands fa-instagram"></i> Instagram </a>
                <a href="#"> <i class="fa-brands fa-linkedin"></i> Linkedin </a>
                <a href="#"> <i class="fa-brands fa-pinterest"></i> Pinterest </a>
            </div>
    
        </div>
    
        <div class="credit"> Created By <span> Satyajeet And Vikas </span> | Final Year Project </div>
    
    </section>

</body>
</html>