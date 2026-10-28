<?php include 'header.php'; ?>




<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity - Telkom Indonesia</title>
    <link rel="stylesheet" href="activity.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>


    <section class="activity-listing-section">
        <div class="container">
            <h1>Activity</h1>
            <div class="activity-list">
                <div class="activity-item"
                    data-image="images/hutTelkom.png"
                    data-date="7 Juli 2025"
                    data-title="HUT Telkom Ke-60"
                    data-description="HUT Telkom ke-60 Diselenggarakan di Aula lt 6 Gedung Graha Merah Putih">
                    <div class="activity-thumbnail">
                        <img src="images/hutTelkom.png" alt="HUT Telkom Ke-60">
                    </div>
                    <div class="activity-content">
                        <span class="activity-date">7 Juli 2025</span>
                        <h2 class="activity-title">Funtasixty</h2>
                        <p class="activity-description">HUT Telkom ke-60 Diselenggarakan di Aula lt 6 Gedung Graha Merah Putih</p>
                        <a href="#" class="activity-button open-activity-modal">View</a>
                    </div>
                </div>

                <div class="activity-item"
                    data-image="images/pressRelease.png"
                    data-date="25 Juli 2024"
                    data-title="Press Conference"
                    data-description="Adapun penandatanganan kerja sama ini terkait penggunaan layanan connectivity, High Speed Internet (HSI) Bisnis. Penggunaan layanan HSI dan 
                    Managed Service ini sendiri diharapkan mampu meningkatkan pengalaman internet bagi para pelanggan hotel Pangeran Pekanbaru.">
                    <div class="activity-thumbnail">
                        <img src="images/pressRelease.png" alt="Gambar Contoh Artikel">
                    </div>
                    <div class="activity-content">
                        <span class="activity-date">25 Juli 2024</span>
                        <h2 class="activity-title">Press Conference</h2>
                        <p class="activity-description">Penandatanganan Kontrak Kerjasama dengan Hotel Pangeran</p>
                        <a href="#" class="activity-button open-activity-modal">View</a>
                    </div>
                    
                </div>

                

                </div>
        </div>
    </section>



    <div id="activityDetailModal" class="modal">
        <div class="modal-content">
            <span class="close-button">×</span>
            <div class="modal-body">
                <div class="activity-modal-detail">
                    <img id="modalActivityImage" src="" alt="Activity Image" class="modal-activity-image">
                    <div class="activity-modal-info">
                        <span id="modalActivityDate" class="activity-date"></span>
                        <h2 id="modalActivityTitle" class="activity-title"></h2>
                        <p id="modalActivityDescription" class="activity-description"></p>
                    </div>
                </div>
                <button class="close-modal-button">Close X</button>
            </div>
        </div>
    </div>

    <audio id="backgroundMusic" loop autoplay muted>
        <source src="Audio/Jayalah Telkom Indonesia - Mars Telkom Group.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung elemen audio.
    </audio>

    <button id="unmuteButton" style="position: fixed; bottom: 20px; right: 20px; background-color: #000; color: #fff; border: none; padding: 10px; border-radius: 5px; cursor: pointer; z-index: 9999; display: none;">
        Unmute Music
    </button>

    <script>
        // JavaScript untuk fungsionalitas Modal Aktivitas Dinamis
        const activityModal = document.getElementById("activityDetailModal");
        const openActivityModalButtons = document.querySelectorAll(".open-activity-modal");
        const closeActivitySpan = activityModal.querySelector(".close-button");
        const closeActivityModalButton = activityModal.querySelector(".close-modal-button");

        const modalActivityImage = document.getElementById("modalActivityImage");
        const modalActivityDate = document.getElementById("modalActivityDate");
        const modalActivityTitle = document.getElementById("modalActivityTitle");
        const modalActivityDescription = document.getElementById("modalActivityDescription");

        openActivityModalButtons.forEach(button => {
            button.onclick = function(event) {
                event.preventDefault();

                const activityItem = this.closest('.activity-item'); 
                
                modalActivityImage.src = activityItem.dataset.image;
                modalActivityImage.alt = activityItem.dataset.title + " Image";
                modalActivityDate.textContent = activityItem.dataset.date;
                modalActivityTitle.textContent = activityItem.dataset.title;
                modalActivityDescription.textContent = activityItem.dataset.description;

                activityModal.style.display = "flex"; // Tampilkan modal
            };
        });

        function closeActivityModal() {
            activityModal.style.display = "none";
            modalActivityImage.src = "";
            modalActivityImage.alt = "";
            modalActivityDate.textContent = "";
            modalActivityTitle.textContent = "";
            modalActivityDescription.textContent = "";
        }

        closeActivitySpan.onclick = closeActivityModal;
        closeActivityModalButton.onclick = closeActivityModal;

        window.onclick = function(event) {
            if (event.target == activityModal) {
                closeActivityModal();
            }
        };

        // Script untuk mengatur musik latar (diulang untuk setiap halaman)
        const audio = document.getElementById('backgroundMusic');
        const unmuteBtn = document.getElementById('unmuteButton');

        if (audio) {
            audio.volume = 0.3; // Volume 30% (pelan, sesuaikan 0.1-0.5)
            audio.play().catch(error => {
                console.log("Autoplay diblokir oleh browser, audio akan tetap muted.", error);
            });
        }

        if (unmuteBtn && audio) {
            unmuteBtn.addEventListener('click', () => {
                if (audio.muted) {
                    audio.muted = false;
                    unmuteBtn.textContent = "Mute Music";
                } else {
                    audio.muted = true;
                    unmuteBtn.textContent = "Unmute Music";
                }
            });

            audio.addEventListener('loadeddata', () => {
                if (audio.autoplay && audio.muted) {
                    unmuteBtn.style.display = 'block';
                }
            });
            audio.addEventListener('error', () => {
                unmuteBtn.style.display = 'none';
            });

            document.addEventListener('DOMContentLoaded', () => {
                if (audio.autoplay && audio.muted && audio.readyState >= 2) {
                    unmuteBtn.style.display = 'block';
                } else {
                    unmuteBtn.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>



<?php include 'footer.php'; ?>