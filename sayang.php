<!DOCTYPE html>
<html>
<head>
    <title>Raj❤️Nisha</title>
    <link rel="stylesheet" href="style.css">
    <style>
      

        .container {
            padding: 20px;
        }

        /* Styling for love videos */
        .love-videos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .video {
            position: relative;
            cursor: pointer;
        }

        .video img {
            max-width: 100%;
            height: auto;
        }

        /* Styling for modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        /* Styling for love quote */
        .love-quote {
            margin: 20px 0;
            font-size: 18px;
            font-style: italic;
            text-align: center;
        }

        /* Media query for responsive design */
        @media screen and (max-width: 768px) {
            .container {
                padding: 10px; /* Mengurangi padding pada layar kecil */
            }

            .love-quote {
                font-size: 16px; /* Mengurangi ukuran font pada layar kecil */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>I Love You</h2>
        <div class="menu">
        <audio id="audioPlayer" autoplay loop style="display: none;">
                <source src="love.mp4" type="audio/mp4">
                Browser Anda tidak mendukung elemen audio.
            </audio>
            <a href="menu.php">Kembali ke Menu</a>
            <a> Through time's shifting sand, our love remains unwavering,
            A symphony of hearts, stars above gently observing,
            Side by side, united in an unbreakable band,
            In an embrace that's eternal, guided by love's tender command. </a>
         </div>

        <!-- Tampilkan 6 video dengan pembagian 3 video di atas dan 3 video di bawah -->
        <div class="love-videos">
            <!-- Video 1 -->
            <div class="menu">
            <div class="video" onclick="openModal('Video 1', 'Kata-kata video 1')">
                <a href="video1.php">
                    <img src="foto/21.jpg" alt="Video 1">
                    
                    <p class="video-text">I</p>
                </a>
            </div>
            </div>
            <!-- Video 2 -->
            <div class="menu">
            <div class="video" onclick="openModal('Video 2', 'Kata-kata video 2')">
                <a href="video2.php">
                    <img src="foto/2.jpg" alt="Video 2">
                    <p class="video-text">L</p>
                </a>
            </div>
            </div>
            <!-- Video 3 -->
            <div class="menu">
            <div class="video" onclick="openModal('Video 3', 'Kata-kata video 3')">
                <a href="video3.php">
                    <img src="foto/3.jpg" alt="Video 3">
                    <p class="video-text">O</p>
                </a>
            </div>
            </div>
            <!-- Video 4 -->
            <div class="menu">
            <div class="video" onclick="openModal('Video 4', 'Kata-kata video 4')">
                <a href="video4.php">
                    <img src="foto/4.jpg" alt="Video 4">
                    <p class="video-text">V</p>
                </a>
            </div>
            </div>
            <!-- Video 5 -->
            <div class="menu">
            <div class="video" onclick="openModal('Video 5', 'Kata-kata video 5')">
                <a href="video5.php">
                    <img src="foto/5.jpg" alt="Video 5">
                    <p class="video-text">E</p>
                </a>
            </div>
            </div>
            <!-- Video 6 -->
            <div class="menu">
            <div class="video" onclick="openModal('Video 6', 'Kata-kata video 6')">
                <a href="video6.php">
                    <img src="foto/6.jpg" alt="Video 6">
                    <p class="video-text">U</p>
                </a>
            </div>
            </div>
        </div>

        <!-- Modal for video details -->
        <div class="modal" id="videoModal">
            <!-- Modal content ... (sesuai dengan yang Anda lampirkan) -->
        </div>

        <!-- Tampilkan kutipan cinta -->
        <div class="love-quote">
            "Dalam setiap video ini, terpatri cintaku yang tulus untukmu."
        </div>
        <div class="menu">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <script>
        function openModal(title, description) {
            const modal = document.getElementById('videoModal');
            const videoTitle = document.getElementById('videoTitle');
            const videoDescription = document.getElementById('videoDescription');

            videoTitle.textContent = title;
            videoDescription.textContent = description;
            modal.style.display = 'flex';
        }

        function closeModal() {
            const modal = document.getElementById('videoModal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>