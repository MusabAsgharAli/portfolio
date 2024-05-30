<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* HOME */
        .animate-fade-in {
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        /* END HOME */
        /* about me */
        .animate-typewriter {
            animation: typewriter 3s steps(15) 1s 1 normal both,
                       blinkTextCursor 500ms steps(15) infinite normal;
        }
        @keyframes typewriter {
            from { width: 0; }
            to { width: 15ch; }
        }
        @keyframes blinkTextCursor {
            from { border-right-color: rgba(255, 255, 255, .75); }
            to { border-right-color: transparent; }
        }
        /* and about me */
        .animate-button {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .animate-button:hover {
            transform: scale(1.1);
            background-color: #4a5568;
        }
        /* and about me */
        /* skills line */
        .progress-card {
          background-color: #114ec9;
          border-radius: 0.5rem;
          padding: 1rem;
        }
      
        .progress {
          height: 0.5rem;
          background-color: #e5e7eb;
          border-radius: 0.25rem;
          margin-top: 0.5rem;
        }
        /* skills line */
   /* button/ */
      .box {
         transition: transform 0.3s ease-in-out;
       }
     .box:hover { 
         transform: scale(1.05);
    }
    /*  end button/ */
      /* footer */
      .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .btn-up {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 50%;
      cursor: pointer;
    }
    .btn-up.active {
      display: block;
    }
    .up-icon {
      width: 20px;
      height: 20px;
      fill: #fff;
    }
       /* end footer */
    </style>
</head>
<body class="bg-[#152931] text-[#e6f3fd]">

    <!-- navbar -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center ">
            <div class="text-[#39fcff] text-5xl">Portfolio</div>
            <div class="block lg:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex space-x-4 ">
                <a href="#Home" class="text-white hover:text-[#39fcff] text-4x1">Home</a>
                <a href="#About" class="text-white hover:text-[#39fcff] text-4x1">About</a>
                <a href="#Skills" class="text-white hover:text-[#39fcff] text-4x1">Skills</a>
                <a href="#Projects" class="text-white hover:text-[#39fcff] text-4x1">Projects</a>
                <a href="#contect" class="text-white hover:text-[#39fcff] text-4x1">Contact</a>
            </div>
        </div>
        <div id="mobile-menu" class="lg:hidden hidden ">
            <a href="#Home " class="block px-4 py-2 text-sm text-white">Home</a>
            <a href="#About " class="block px-4 py-2 text-sm text-white">About</a>
            <a href="#Skills " class="block px-4 py-2 text-sm text-white">Skills</a>
            <a href="#Projects " class="block px-4 py-2 text-sm text-white">Projects</a>
            <a href="#contect " class="block px-4 py-2 text-sm text-white">Contact</a>
        </div>
    </nav>
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
    <!-- end navbar -->
    <!-- Home -->
    <section id="Home">
    
        <div class="text-center p-8 bg-[#39fcff] shadow-lg rounded-lg animate-fade-in">
            <img src="musab.png" alt="Animated" class="mx-auto mb-4 shadow-lg transform transition duration-500 hover:scale-110 rounded-full ">
            <h1 class="text-4xl font-bold mb-4">Welcome to Portfolio</h1>
            <p class="text-2xl" id="name"></p>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const names = ['Musab ', 'MUSAB ASGHAR', 'Musab Asghar', 'MUSAB son of Asghar ali', 'musab asghar'];
                const nameElement = document.getElementById('name');
    
                function typeWriter(text, i = 0) {
                    if (i < text.length) {
                        nameElement.innerHTML += text.charAt(i);
                        setTimeout(() => typeWriter(text, i + 1), 100);
                    }
                }
    
                function displayRandomName() {
                    const randomName = names[Math.floor(Math.random() * names.length)];
                    nameElement.innerHTML = '';
                    typeWriter(randomName);
                }
    
                displayRandomName();
                setInterval(displayRandomName, 5000);  // Change the name every 5 seconds
            });
        </script>
    </section>  
    <!-- end Home -->
    <!-- About me -->
    <section id="About">
    <div class="text-center p-8 bg-[#152931] shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold mb-4 border-r-2 border-gray-900 whitespace-nowrap overflow-hidden animate-typewriter">About Me</h1>
        <p class="text-xl mt-4 hidden" id="about-text"></p>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const paragraphs = [
               " Hi there! I'm Musab Asghar, a driven web developer on an inventive and self-improvement adventure. Motivated by the abundance of internet information, I set off on this new journey with resolve.",
               " I used YouTube as my virtual classroom to refine my HTML, CSS, and JavaScript abilities and establish the groundwork for my future coding endeavors. I learned more about the complexities of front-end development with every tutorial, becoming an expert at creating aesthetically pleasing and responsive web interfaces.",
               
            ];
            
            const textElement = document.getElementById('about-text');

            function typeWriter(text, i = 0) {
                if (i < text.length) {
                    textElement.innerHTML += text.charAt(i);
                    setTimeout(() => typeWriter(text, i + 1), 50);
                }
            }

            function displayRandomParagraph() {
                const randomParagraph = paragraphs[Math.floor(Math.random() * paragraphs.length)];
                textElement.innerHTML = '';
                typeWriter(randomParagraph);
            }

            setTimeout(() => {
                textElement.classList.remove('hidden');
                displayRandomParagraph();
            }, 3500);  // Display the paragraph after "About Me" animation ends
        });
    </script>
    </section>
    <!--and About me -->
   <!-- button about me -->
    <div class="text-center p-8  bg-[#152931]  shadow-lg rounded-lg ">
        <h1 class="text-4xl font-bold text-black-900 mb-4">Press Me </h1>
        <a href="About me" class="mt-4 inline-block px-6 py-3 bg-gray-800 text-white text-xl rounded-full animate-button">
            About Me
        </a>
    </div>
    <!-- end button -->
    <!-- [html=80%,css=60%,taliwind css=70%,javascript=78% ,php=70% ,my sql=80% ,laravel=78%] -->
    <!-- skill section -->
    <section id="Skills">
     <div class="flex my-[100px] items-center justify-center text-[50px] font-mono hover:font-serif">SKILLS</div>
     <div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8 mt-[134px]">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="progress-card">
            <div class="text-xs font-semibold text-white-600">HTML (80%)</div>
            <div id="htmlProgress" class="progress"></div>
          </div>
          <div class="progress-card">
            <div class="text-xs font-semibold text-white-600">CSS (60%)</div>
            <div id="cssProgress" class="progress"></div>
          </div>
          <div class="progress-card">
            <div class="text-xs font-semibold text-white-600">Tailwind CSS (70%)</div>
            <div id="tailwindProgress" class="progress"></div>
          </div>
          <div class="progress-card">
            <div class="text-xs font-semibold text-white-600">JavaScript (78%)</div>
            <div id="jsProgress" class="progress"></div>
          </div>
          <div class="progress-card">
            <div class="text-xs font-semibold text-white-600">PHP (70%)</div>
            <div id="phpProgress" class="progress"></div>
          </div>
          <div class="progress-card">
            <div class="text-xs font-semibold text-white-600">MySQL (80%)</div>
            <div id="mysqlProgress" class="progress"></div>
          </div>
        </div>
    </section>
<script>
    const skills = [
      { id: 'htmlProgress', percentage: 80 },
      { id: 'cssProgress', percentage: 60 },
      { id: 'tailwindProgress', percentage: 70 },
      { id: 'jsProgress', percentage: 78 },
      { id: 'phpProgress', percentage: 70 },
      { id: 'mysqlProgress', percentage: 80 },
      { id: 'laravelProgress', percentage: 78 }
    ];
  
    document.addEventListener('DOMContentLoaded', function() {
      skills.forEach(skill => {
        const progressBar = document.getElementById(skill.id);
        progressBar.style.width = `${skill.percentage}%`;
        progressBar.classList.add('bg-green-500');
      });
    });
  </script>
     <!-- endskill section -->
<center><h1 class="text-[white] text-[34px] bg-[#39fcff] rounded-lg mt-0  w-[234px]">Projects</h1></center>
<section id="Projects">
  
  <div class=" sm:h-[600px] md:h-[200px] flex flex-wrap justify-center items-center">
  <!-- Box elements -->
  <a href="html.html" class="box bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white font-bold py-6 px-8 rounded-lg shadow-md m-4 transition duration-300 ease-in-out flex justify-center items-center">
    <pre>    HTML      </pre>
  </a>
  <a href="css.html" class="box bg-green-500 hover:bg-green-600 active:bg-green-700 text-white font-bold py-6 px-8 rounded-lg shadow-md m-4 transition duration-300 ease-in-out flex justify-center items-center">
     CSS,tailwindcss
  </a>
  <a href="javaScript.html" class="box bg-red-500 hover:bg-red-600 active:bg-red-700 text-white font-bold py-6 px-8 rounded-lg shadow-md m-4 transition duration-300 ease-in-out flex justify-center items-center">
    <pre></pre>    JavaScript   </pre>
  </a>
  <a href="php.php" class="box bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 text-white font-bold py-6 px-8 rounded-lg shadow-md m-4 transition duration-300 ease-in-out flex justify-center items-center">
     <pre>      php      </pre>
  </a>

</div>
</section>

<!-- feedback -->
<div class="max-w-md mx-auto mt-10 bg-[#39fcff] p-6 rounded-md shadow-md mb-[34px]">
  <h2 class="text-2xl font-semibold mb-6">Contact Us</h2>
  <form action="feed.php" method="post">
      <div class="mb-4 ">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name"
              class="bg-[#152931] appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email"
              class="bg-[#152931] appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
          <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="Your Phone Number"
              class="bg-[#152931] appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
          <label for="feedback" class="block text-gray-700 text-sm font-bold mb-2">Feedback</label>
          <textarea id="feedback" name="feedback" placeholder="Your Feedback"
              class="bg-[#152931] appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline"></textarea>
      </div>
      <div class="flex justify-end">
          <button name="submit" type="submit"
              class="bg-[#152931] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out">Submit</button>
      </div>
  </form>
</div>
<!-- endfeedback  -->
<section id="contect">
    <div class=" h-[60px] flex justify-center items-center">
        <p class="text-[33px] text-[black]">Contect Me</p> <br>
        <button class="rounded-full h-[40px] w-[40px]" onclick="redirectToWhatsApp()"> <i class="text-[33px] fa-brands fa-whatsapp" style="color: #63E6BE;"></i></button>
  </div>    
</section>
<script>
    // Redirect function
    function redirectToWhatsApp() {
      var whatsappUrl = "https://t.ly/o-t4n";
      // Redirecting to WhatsApp
      window.location.href = whatsappUrl;
    }
  </script>



<!-- footer -->
  <!-- Scroll-to-top button -->
  <button class="btn-up" onclick="scrollToTop()">
    <svg class="up-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M12 2L0 14h7v10h10V14h7L12 2zm0 12.83l5.5-5.5 1.41 1.41L12 16.66l-6.91-6.91 1.41-1.41L12 15.24z"/>
    </svg>
  </button>
  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 Your Website. All rights reserved.</p>
  </footer>
  <!-- JavaScript for scroll-to-top button -->
  <script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      var upBtn = document.querySelector('.btn-up');
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        upBtn.classList.add('active');
      } else {
        upBtn.classList.remove('active');
      }
    }
    function scrollToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- end footer -->
</body>
</html>