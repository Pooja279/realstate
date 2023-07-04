<?php
include 'connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, subject,message) VALUES ('$name', '$email', '$subject','$message')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "Data added successfully.";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }

}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preview.colorlib.com/theme/oakberry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 23:42:43 GMT -->
   <head>
      <title>Oakberry - Free Bootstrap 5 Template by Colorlib</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/ionicons.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/tiny-slider.css">
      <link rel="stylesheet" href="css/glightbox.min.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/style.css">
      <script nonce="8329a980-a1dc-45ca-9dd8-3d2214076a3f">(function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})),{})))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
   </head>
   <body>
      <div class="py-4 top-wrap">
         <div class="container-xl">
            <div class="row d-flex align-items-start">
               <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-map"></span></div>
                  <div class="text pl-3 pl-md-3">
                     <p class="con"><span>Free Call</span> <span>+91 89285 88444</span></p>
                     <p class="con">Call Us Now 24/7 Customer Support</p>
                  </div>
               </div>
               <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span></div>
                  <div class="text pl-3 pl-md-3">
                     <p class="hr"><span>Our Location</span></p>
                     <p class="con">NEAR KOTAK MAHINDRA BANK, ELITE CHAURAHA, CIVIL LINES, Jhansi, Uttar Pradesh 284002</p>
                  </div>
               </div>
               <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                  <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-connectdevelop"></span></div>
                  <div class="text pl-3 pl-md-3">
                     <p class="con"><span>Connect </span> <span>with us</span></p>
                     <p class="con"><a href="https://wa.me/918928588444">Whats app</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg  ftco-navbar-light">
         <div class="container-xl">
            <a class="navbar-brand align-items-center" href="index.html">
				<img src="images/logo.jpg" style="height:53px; width: 68px;"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="properties.html">Properties</a></li>
                  <li class="nav-item"><a class="nav-link" href="agents.html">Agents</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
               </ul>
               <p class="mb-0"><a href="#" class="btn btn-primary rounded">Submit A Property</a></p>
            </div>
         </div>
      </nav>
      <section class="slider-hero">
         <div class="overlay"></div>
         <div class="hero-slider">
            <div class="item">
               <div class="work">
                  <div class="img d-flex align-items-center js-fullheight" style="background-image: url(images/bg_1.jpg);">
                     <div class="container-xl">
                        <div class="row justify-content-center">
                           <div class="col-md-10 col-xl-6">
                              <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                 <h2>Your Property Is Our Priority</h2>
                                 <p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                 <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="work">
                  <div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url(images/bg_2.jpg);">
                     <div class="container-xl">
                        <div class="row justify-content-center">
                           <div class="col-md-10 col-xl-6">
                              <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                 <h2>Let Your Home Be Unique &amp; Stylist</h2>
                                 <p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                 <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item">
               <div class="work">
                  <div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url(images/bg_3.jpg);">
                     <div class="container-xl">
                        <div class="row justify-content-center">
                           <div class="col-md-10 col-xl-6">
                              <div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
                                 <h2>Modern House Make Better Life</h2>
                                 <p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                 <p><a href="#" class="btn btn-primary px-5 py-3">Learn More <span class="ion ion-ios-arrow-round-forward"></span></a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-no-pb ftco-no-pt">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="ftco-search d-flex justify-content-center">
                     <div class="row">
                        <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                           <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Buy Properties</a>
                              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Rent Properties</a>
                           </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                           <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                 <form action="#" class="search-property-1">
                                    <div class="row g-0">
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4 border-0">
                                             <label for="#">Enter Keyword</label>
                                             <div class="form-field">
                                                <div class="icon"><span class="fa fa-search"></span></div>
                                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4">
                                             <label for="#">Property Type</label>
                                             <div class="form-field">
                                                <div class="select-wrap">
                                                   <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                   <select name="" id="" class="form-control">
                                                      <option value="">Residential</option>
                                                      <option value="">Commercial</option>
                                                      <option value="">Land</option>
                                                      <option value="">Industrial</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4">
                                             <label for="#">Location</label>
                                             <div class="form-field">
                                                <div class="icon"><span class="ion-ios-pin"></span></div>
                                                <input type="text" class="form-control" placeholder="Search Location">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4">
                                             <label for="#">Price Limit</label>
                                             <div class="form-field">
                                                <div class="select-wrap">
                                                   <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                   <select name="" id="" class="form-control">
                                                      <option value="">$100</option>
                                                      <option value="">$10,000</option>
                                                      <option value="">$50,000</option>
                                                      <option value="">$100,000</option>
                                                      <option value="">$200,000</option>
                                                      <option value="">$300,000</option>
                                                      <option value="">$400,000</option>
                                                      <option value="">$500,000</option>
                                                      <option value="">$600,000</option>
                                                      <option value="">$700,000</option>
                                                      <option value="">$800,000</option>
                                                      <option value="">$900,000</option>
                                                      <option value="">$1,000,000</option>
                                                      <option value="">$2,000,000</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group d-flex w-100 border-0">
                                             <div class="form-field w-100 align-items-center d-flex">
                                                <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                 <form action="#" class="search-property-1">
                                    <div class="row g-0">
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4 border-0">
                                             <label for="#">Enter Keyword</label>
                                             <div class="form-field">
                                                <div class="icon"><span class="fa fa-search"></span></div>
                                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4">
                                             <label for="#">Property Type</label>
                                             <div class="form-field">
                                                <div class="select-wrap">
                                                   <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                   <select name="" id="" class="form-control">
                                                      <option value="">Residential</option>
                                                      <option value="">Commercial</option>
                                                      <option value="">Land</option>
                                                      <option value="">Industrial</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4">
                                             <label for="#">Location</label>
                                             <div class="form-field">
                                                <div class="icon"><span class="ion-ios-pin"></span></div>
                                                <input type="text" class="form-control" placeholder="Search Location">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group p-4">
                                             <label for="#">Price Limit</label>
                                             <div class="form-field">
                                                <div class="select-wrap">
                                                   <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                   <select name="" id="" class="form-control">
                                                      <option value="">$100</option>
                                                      <option value="">$10,000</option>
                                                      <option value="">$50,000</option>
                                                      <option value="">$100,000</option>
                                                      <option value="">$200,000</option>
                                                      <option value="">$300,000</option>
                                                      <option value="">$400,000</option>
                                                      <option value="">$500,000</option>
                                                      <option value="">$600,000</option>
                                                      <option value="">$700,000</option>
                                                      <option value="">$800,000</option>
                                                      <option value="">$900,000</option>
                                                      <option value="">$1,000,000</option>
                                                      <option value="">$2,000,000</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md d-flex">
                                          <div class="form-group d-flex w-100 border-0">
                                             <div class="form-field w-100 align-items-center d-flex">
                                                <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container-xl">
            <div class="row justify-content-center">
               <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                  <span class="subheading">Oakberry Categories</span>
                  <h2 class="mb-4">Explore Our Categories &amp; Places</h2>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-md-10">
                  <div class="row g-1 mb-1">
                     <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <a href="#" class="services">
                           <div class="icon"><span class="flaticon-architect"></span></div>
                           <div class="text">
                              <h2>Land</h2>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <a href="#" class="services">
                           <div class="icon"><span class="flaticon-house"></span></div>
                           <div class="text">
                              <h2>Residential</h2>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <a href="#" class="services">
                           <div class="icon"><span class="flaticon-apartment"></span></div>
                           <div class="text">
                              <h2>Commercial</h2>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <a href="#" class="services">
                           <div class="icon"><span class="flaticon-factory"></span></div>
                           <div class="text">
                              <h2>Industrial</h2>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="row">
                     <div class="col-md-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <ul class="places-list">
                           <li>
                              <a href="#">
                              New York
                              <span>200 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              London
                              <span>100 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Chicago
                              <span>120 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Illinois
                              <span>300 Properties</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <ul class="places-list">
                           <li>
                              <a href="#">
                              California
                              <span>100 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Tennessee
                              <span>200 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Texas
                              <span>200 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              North Carolina
                              <span>200 Properties</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                        <ul class="places-list">
                           <li>
                              <a href="#">
                              Florida
                              <span>422 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Charlotte
                              <span>200 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Orlando
                              <span>200 Properties</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              Atlanta
                              <span>200 Properties</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-xl">
            <div class="row justify-content-center">
               <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                  <span class="subheading">Our Properties</span>
                  <h2 class="mb-4">Featured Properties</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="property-wrap">
                     <a href="#" class="img img-property" style="background-image: url(images/work-1.jpg);">
                        <p class="price"><span class="orig-price">$300,000</span></p>
                     </a>
                     <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                           <div class="d-flex align-items-center">
                              <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                              <h3 class="ml-2">John Dorf</h3>
                           </div>
                           <span class="text-right">2 weeks ago</span>
                        </div>
                        <h3><a href="#">Sunny Loft Property</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> New York <span class="sale">Sale</span></span>
                        <ul class="property_list mt-3 mb-0">
                           <li><span class="flaticon-bed"></span>3</li>
                           <li><span class="flaticon-bathtub"></span>2</li>
                           <li><span class="flaticon-blueprint"></span>1,878 sqft</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="property-wrap">
                     <a href="#" class="img img-property" style="background-image: url(images/work-2.jpg);">
                        <p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small> / mo</small></span></p>
                     </a>
                     <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                           <div class="d-flex align-items-center">
                              <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                              <h3 class="ml-2">John Dorf</h3>
                           </div>
                           <span class="text-right">2 weeks ago</span>
                        </div>
                        <h3><a href="#">Sunny Loft Property</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> New York <span class="rent">Rent</span></span>
                        <ul class="property_list mt-3 mb-0">
                           <li><span class="flaticon-bed"></span>3</li>
                           <li><span class="flaticon-bathtub"></span>2</li>
                           <li><span class="flaticon-blueprint"></span>1,878 sqft</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                  <div class="property-wrap">
                     <a href="#" class="img img-property" style="background-image: url(images/work-3.jpg);">
                        <p class="price"><span class="orig-price">$300</span></p>
                     </a>
                     <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                           <div class="d-flex align-items-center">
                              <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                              <h3 class="ml-2">John Dorf</h3>
                           </div>
                           <span class="text-right">2 weeks ago</span>
                        </div>
                        <h3><a href="#">Sunny Loft Property</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> New York <span class="sale">Sale</span></span>
                        <ul class="property_list mt-3 mb-0">
                           <li><span class="flaticon-bed"></span>3</li>
                           <li><span class="flaticon-bathtub"></span>2</li>
                           <li><span class="flaticon-blueprint"></span>1,878 sqft</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                  <div class="property-wrap">
                     <a href="#" class="img img-property" style="background-image: url(images/work-4.jpg);">
                        <p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
                     </a>
                     <div class="text">
                        <div class="list-team d-flex align-items-center mb-4">
                           <div class="d-flex align-items-center">
                              <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                              <h3 class="ml-2">John Dorf</h3>
                           </div>
                           <span class="text-right">2 weeks ago</span>
                        </div>
                        <h3><a href="#">Sunny Loft Property</a></h3>
                        <span class="location"><i class="ion-ios-pin"></i> New York <span class="rent">Rent</span></span>
                        <ul class="property_list mt-3 mb-0">
                           <li><span class="flaticon-bed"></span>3</li>
                           <li><span class="flaticon-bathtub"></span>2</li>
                           <li><span class="flaticon-blueprint"></span>1,878 sqft</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="img vid-section" style="background-image: url(images/bg_4.jpg);">
         <div class="overlay"></div>
         <div class="container-xl">
            <div class="row justify-content-center">
               <div class="col-md-6 vid-height d-flex align-items-center justify-content-center text-center">
                  <div class="video-wrap" data-aos="fade-up">
                     <h3>Modern House Video</h3>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                     <a href="https://vimeo.com/115041822" class="video-icon glightbox d-flex align-items-center justify-content-center">
                     <span class="ion-ios-play"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-about-section" id="#about">
         <div class="container-xl">
            <div class="row g-xl-5">
               <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="img w-100" style="background-image: url(images/about.jpg);"></div>
               </div>
               <div class="col-md-8 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <span class="subheading">About Us</span>
                  <h2 class="mb-4">Oakberry A Real Estate Company</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <div class="row py-5">
                     <div class="col-md-6 col-lg-3">
                        <div class="counter-wrap" data-aos="fade-up" data-aos-duration="1000">
                           <div class="text">
                              <span class="d-block number gradient-text"><span id="count1" class="counter" data-count="50">0</span></span>
                              <p>Years of Experienced</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                           <div class="text">
                              <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="210">0</span>K+</span>
                              <p>Total Properties</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="counter-wrap" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                           <div class="text">
                              <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="450">0</span></span>
                              <p>Qualified Realtors</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="counter-wrap" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                           <div class="text">
                              <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="100">0</span></span>
                              <p>Total Branches</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="img img-2" style="background-image: url(images/about-1.jpg);" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000"></div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-intro ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_4.jpg);">
         <div class="overlay"></div>
         <div class="container-xl py-5">
            <div class="row justify-content-center">
               <div class="col-lg-10 col-xl-8">
                  <div class="row">
                     <div class="col-md-8 d-flex align-items-center">
                        <div>
                           <h1 class="mb-0">Find Best Place For Leaving</h1>
                           <p>Find Best Place For Leaving</p>
                        </div>
                     </div>
                     <div class="col-md-4 d-flex align-items-center">
                        <p class="mb-0"><a href="#" class="btn btn-black py-3 px-4">Get in touch</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section testimony-section bg-light">
         <div class="container-xl">
            <div class="row justify-content-center pb-4">
               <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                  <span class="subheading">Testimonial</span>
                  <h2 class="mb-3">Clients We Help</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                  <div class="carousel-testimony">
                     <div class="item">
                        <div class="testimony-wrap">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                           <div class="text">
                              <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                 <div class="pl-3 tx">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                           <div class="text">
                              <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                 <div class="pl-3 tx">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                           <div class="text">
                              <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                 <div class="pl-3 tx">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                           <div class="text">
                              <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                 <div class="pl-3 tx">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="testimony-wrap">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                           <div class="text">
                              <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                 <div class="pl-3 tx">
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-agent ftco-no-pb">
         <div class="overlay"></div>
         <div class="container-xl">
            <div class="row justify-content-center pb-5">
               <div class="col-md-10 heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">
                  <span class="subheading">Meets Our Agents</span>
                  <h2 class="mb-4">Our Agents</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="agent">
                     <div class="img">
                        <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
                     </div>
                     <div class="desc">
                        <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
                        <h3><a href="properties.html">Mike Bochs</a></h3>
                        <ul class="ftco-social">
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="agent">
                     <div class="img">
                        <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                     </div>
                     <div class="desc">
                        <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
                        <h3><a href="properties.html">Mike Bochs</a></h3>
                        <ul class="ftco-social">
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                  <div class="agent">
                     <div class="img">
                        <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                     </div>
                     <div class="desc">
                        <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
                        <h3><a href="properties.html">Jessica Moore</a></h3>
                        <ul class="ftco-social">
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                  <div class="agent">
                     <div class="img">
                        <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                     </div>
                     <div class="desc">
                        <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
                        <h3><a href="properties.html">Sarah Geronimo</a></h3>
                        <ul class="ftco-social">
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                           <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-xl">
            <div class="row justify-content-center mb-5">
               <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                  <span class="subheading">Our Blog</span>
                  <h2>Recent Blog</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 d-flex">
                  <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                     <a href="blog-single.html" class="block-20 img d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                     </a>
                     <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                        <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 d-flex">
                  <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                     <a href="blog-single.html" class="block-20 img d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
                     </a>
                     <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                        <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 d-flex">
                  <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <a href="blog-single.html" class="block-20 img d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
                     </a>
                     <div class="text">
                        <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                        <h3 class="heading mb-3">
                           <a href="#">
                              New Home Sales Picked Up in December</a mb-3>
                        </h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 d-flex">
               <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
               <a href="blog-single.html" class="block-20 img d-flex align-items-end" style="background-image: url('images/image_4.jpg');">
               </a>
               <div class="text">
               <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
               <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>
               <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
               </div>
               </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-gallery">
      <div class="container-xl-fluid">
      <div class="row g-0">
      <div class="col-md-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
      <a href="images/gallery-1.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-1.jpg);">
      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
      </a>
      </div>
      <div class="col-md-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <a href="images/gallery-1.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-2.jpg);">
      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
      </a>
      </div>
      <div class="col-md-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
      <a href="images/gallery-3.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-3.jpg);">
      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
      </a>
      </div>
      <div class="col-md-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
      <a href="images/gallery-4.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-4.jpg);">
      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
      </a>
      </div>
      <div class="col-md-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
      <a href="images/gallery-5.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-5.jpg);">
      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
      </a>
      </div>
      <div class="col-md-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
      <a href="images/gallery-6.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-6.jpg);">
      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
      </a>
      </div>
      </div>
      </div>
      </section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row no-gutters justify-content-center">
         <div class="col-md-12">
            <div class="wrapper">
               <div class="row g-0">
                  <div class="col-lg-6">
                     <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3>Contact us</h3>
                        <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                        <div class="row mb-4">
                           <div class="col-md-4">
                              <div class="dbox w-100 d-flex align-items-start">
                                 <div class="text">
                                    <p><span>Address:</span> NEAR KOTAK MAHINDRA BANK, ELITE CHAURAHA, CIVIL LINES, Jhansi, Uttar Pradesh 284002</p>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-md-4">
                              <div class="dbox w-100 d-flex align-items-start">
                                 <div class="text">
                                    <p><span>Phone:</span> <a href="tel://1234567920">+91 89285 88444</a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <form action="" id="contactForm" method="post" class="contactForm">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
                                 </div>
                              </div>
							  <br>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                    <div class="submitting"></div>
                                 </div>
                              </div>
							  <br>
							  <?php if(isset($success_message)) { ?>
									<div class="success"><?php echo $success_message; ?></div>
								<?php } ?>
								<?php if(isset($error_message)) { ?>
									<div class="error"><?php echo $error_message; ?></div>
								<?php } ?>
								<br>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-stretch">
                     <div id="map" class="bg-white"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

      <footer class="ftco-footer">
         <div class="container-xl">
            <div class="row mb-5 pb-5 justify-content-between">
               <div class="col-md-8 col-lg-3">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2 logo d-flex">
                        <a class="navbar-brand align-items-center" href="index.html">
							<img src="images/logo.jpg" style="height:100px; width:234px;">
                        </a>
                     </h2>
                     <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    
                  </div>
               </div>
               <div class="col-md-8 col-lg-3">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Offers</h2>
                     <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Properties</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Agents</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Locations</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Clients Support</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-8 col-lg-3">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Company</h2>
                     <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a></li>
                     </ul>
                  </div>
               </div>
              
               <div class="col-md-8 col-lg-3">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Have a Questions?</h2>
                     <div class="block-23 mb-3">
                        <ul>
                           <li><span class="icon fa fa-map marker"></span><span class="text">NEAR KOTAK MAHINDRA BANK, ELITE CHAURAHA, CIVIL LINES, Jhansi, Uttar Pradesh 284002</span></li>
                           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 89285 88444</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">
                        Copyright &copy;<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Designed & Developed <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://crazywebdev.com/" target="_blank" rel="nofollow noopener">CrazyWebDev Technologies</a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/tiny-slider.js"></script>
      <script src="js/glightbox.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7e08dc0e5d5a4887","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
   </body>
   <!-- Mirrored from preview.colorlib.com/theme/oakberry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 23:43:34 GMT -->
</html>