<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thekist Updates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            gap: 20px;
        }

        .main-content {
            flex: 2;
        }

        .main-content p {
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .social-icons a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .social-icons .facebook { background: #3b5998; }
        .social-icons .twitter { background: #00acee; }
        .social-icons .pinterest { background: #bd081c; }
        .social-icons .whatsapp { background: #25d366; }
        .social-icons .youtube { background: #c4302b; }

        .right-sidebar {
            flex: 1;
        }

        .update-section {
            margin-bottom: 20px;
        }

        .update-section h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: gray;
        }

        .update-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .update-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%; /* Makes the image circular */
            margin-right: 10px;
        }

        .update-item p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }


        .gallery-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
            margin: 20px auto;
        }

        .gallery {
            display: flex;
            flex-wrap: nowrap;
            transition: transform 0.5s ease-in-out;
        }

        .gallery-item {
            flex: 0 0 auto;
            width: 300px;
            margin: 0 10px;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .gallery-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            color: white;
            padding: 15px;
            text-align: left;
            border-radius: 0 0 8px 8px;
        }

        .overlay h3 {
            font-size: 16px;
            margin: 0 0 5px;
        }

        .overlay p {
            font-size: 14px;
            margin: 0;
        }

        .controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-bottom: 10px;
        }

        .social-icons a {
            text-decoration: none;
            font-size: 24px;
            color: #000;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        .control-button {
            background-color: gray;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .control-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .updates-container::-webkit-scrollbar {
            height: 8px;
        }

        .updates-container::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 4px;
        }

        .updates-container::-webkit-scrollbar-track {
            background-color: #f0f0f0;
        }


          /* Hides the last two items */
          .update-item:nth-last-child(-n+2) {
            display: none;
        }


        .update-item.hidden {
            display: none;
        }


        .show-more-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: gray;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 900px;
        }

        .show-more-btn:hover {
            background-color: #0056b3;
        }


        .thekist-section {
            font-family: Arial, sans-serif;
            background: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        .thekist-section h1 {
            font-size: 2.5rem;
            color: gray;
            margin-bottom: 1rem;
        }
        .thekist-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        .thekist-section .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .thekist-section .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            text-decoration: none;
            color: #333;
            font-size: 1.5rem;
            transition: background-color 0.3s, transform 0.3s;
        }
        .thekist-section .social-icons a:hover {
            background-color: #0056b3;
            color: #ffffff;
            transform: scale(1.1);
        }


        .thekist-section .social-icons .facebook {
            background-color: #4267B2;
        }
        .thekist-section .social-icons .facebook:hover {
            background-color: #365899;
        }
        .thekist-section .social-icons .twitter {
            background-color: #1DA1F2;
        }
        .thekist-section .social-icons .twitter:hover {
            background-color: #0d95e8;
        }
        .thekist-section .social-icons .whatsapp {
            background-color: #25D366;
        }
        .thekist-section .social-icons .whatsapp:hover {
            background-color: #1ebe57;
        }
        .thekist-section .social-icons .youtube {
            background-color: #FF0000;
        }
        .thekist-section .social-icons .youtube:hover {
            background-color: #cc0000;
        }


        @media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .main-content, .right-sidebar {
        width: 100%; /* Full width for smaller devices */
    }

    .gallery-item {
        max-width: 100%; /* Adjust images for smaller devices */
    }

    .show-more-btn {
        margin-left: 0; /* Align button properly */
        display: block;
        margin: 20px auto;
    }
}

/* Media Query for Mobile */
@media (max-width: 480px) {
    .social-icons a {
        font-size: 14px;
        width: 30px;
        height: 30px;
    }

    .gallery-item {
        margin: 10px auto;
    }

    .control-button {
        font-size: 14px;
        padding: 8px 16px;
    }

    .gallery-container{
        flex-direction: column;
    }
    #gallery{
        flex-direction: column;
    }
    .gallery{
        flex-direction: column;
    }
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="thekist-section">
                <h1>Welcome to <a href="https://thekist.info/">thekist.info</a></h1>
                <p>
                We provide news and updates related to universities in Rwanda and abroad. Our main goal is to help countless students secure places in their preferred universities and pursue their dream careers.
                </p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/itangishatse.musa" class="facebook" title="Share on Facebook">F</a>
                    <a href="https://x.com/ikiryango" class="twitter" title="Share on Twitter">X</a>
                    <a href="https://chat.whatsapp.com/CqDsEthJK3AC1qjuogVjcP" class="whatsapp" title="Share on WhatsApp">W</a>
                    <a href="https://www.youtube.com/@thekist111?sub_confirmation=1" target="_blank" class="youtube" title="Visit YouTube">Y</a>
                </div>
            </div>
            <aside class="right-sidebar">
                <div class="update-section">
                    <h3>Latest Updates</h3>
                    <div class="update-item">
                        <a href="hungary.php"><img src="images/hec.png" alt="Update 1"></a>
                        <a href="hungary.php"><p>Call for application Hungaricum stipendium in partnership with HEC Rwanda</p></a>
                    </div>
                    <div class="update-item">
                        <a href="iprc.php"><img src="images/RP.png" alt="Update 2"></a>
                       <a href="iprc.php"> <p>Call for Applications: Short-Term Training in Image Editing and Filmmaking at Rwanda Polytechnic</p></a>
                    </div>
                    <div class="update-item">
                        <img src="https://via.placeholder.com/60" alt="Update 3">
                        <p>Call for Applications to Study Bachelor of Technology Programs at Rwanda Polytechnic</p>
                    </div>
                    <div class="update-item">
                        <img src="https://via.placeholder.com/60" alt="Update 4">
                        <p>Rwanda Polytechnic Application Process 2024/2025 for BTech Applicants</p>
                    </div>
                </div>
                <div class="update-item">
            <img src="https://via.placeholder.com/60" alt="Update 5">
            <p>Scholarships for Rwandan Students Available for 2024</p>
        </div>
    </div>
    <button class="show-more-btn" id="toggleUpdatesBtn">Show More</button>
            </aside>
        </div>
    </header>


    <header>
        <h1 style="text-align: center;">Helpful Guides</h1>
    </header>

    <div class="gallery-container">
        <div class="gallery" id="gallery">
            <div class="gallery-item">
                <a href="iprc.php"><img src="images/RP.png" alt="Image 1"></a>
                <div class="overlay">
                    <h3>Announcements</h3>
                    <p>Rwanda Polytechnic Training Opportunity</p>
                </div>
            </div>
            <div class="gallery-item">
               <a href="hungary.php"> <img src="images/hec.png" alt="Image 2"></a>
                <div class="overlay">
                    <h3>Announcements</h3>
                    <p>call for application to study in Hungary in partnership with HEC Rwanda</p>
                </div>
            </div>
            <div class="gallery-item">
                <a href="hungary.php"><img src="images/hec.png" alt="Image 3"></a>
                <div class="overlay">
                    <h3>Scholarships for Rwandans</h3>
                    <p>apply now to study in Hungary</p>
                </div>
            </div>
        </div>
    </div>

    <div class="controls">
        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://chat.whatsapp.com/CqDsEthJK3AC1qjuogVjcP" target="_blank" title="WhatsApp">
                <img src="https://img.icons8.com/color/48/whatsapp.png" alt="WhatsApp Icon" width="40" height="40">
            </a>
            <a href="https://www.youtube.com/@thekist111?sub_confirmation=1" target="_blank">
                <img src="https://img.icons8.com/color/48/youtube-play.png" alt="YouTube Icon" width="40" height="40">
            </a>
        </div>

        <!-- Navigation Buttons -->
        <button class="control-button" id="prevBtn" onclick="scrollGallery(-1)">Previous</button>
        <button class="control-button" id="nextBtn" onclick="scrollGallery(1)">Next</button>
    </div>

    <script>
        const gallery = document.getElementById('gallery');
        const galleryItems = document.querySelectorAll('.gallery-item');
        let currentIndex = 0;

        function scrollGallery(direction) {
            const maxIndex = galleryItems.length - 1;

            // Update the current index
            currentIndex += direction;

            // Ensure the index stays within bounds
            if (currentIndex < 0) {
                currentIndex = 0;
            } else if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }

            // Scroll the gallery
            const scrollAmount = currentIndex * (galleryItems[0].offsetWidth + 20); // Include margin
            gallery.style.transform = `translateX(-${scrollAmount}px)`;

            // Disable buttons when at the edges
            document.getElementById('prevBtn').disabled = currentIndex === 0;
            document.getElementById('nextBtn').disabled = currentIndex === maxIndex;
        }
    </script>

<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script>
        const toggleBtn = document.getElementById("toggleUpdatesBtn");
        const hiddenItems = document.querySelectorAll(".update-item.hidden");
        let isShowingMore = false;

        toggleBtn.addEventListener("click", () => {
            isShowingMore = !isShowingMore; // Toggle state

            hiddenItems.forEach(item => {
                item.style.display = isShowingMore ? "block" : "none";
            });

            // Update button text
            toggleBtn.textContent = isShowingMore ? "Show Less" : "Show More";
        });
    </script>

    <footer>
        <p>© 2024 thekist.com | All Rights Reserved</p>
    </footer>
</body>
</html>
