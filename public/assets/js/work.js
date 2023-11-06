
    document.addEventListener('DOMContentLoaded', function() {
        const showAllButton = document.getElementById('show-all');
        const showVideoButton = document.getElementById('show-video');
        const showPhotosButton = document.getElementById('show-photos');
        const allContent = document.getElementById('all-content');
        const videoContent = document.getElementById('video-content');
        const photoContent = document.getElementById('photo-content');

        showAllButton.addEventListener('click', function() {
            allContent.style.display = 'block';
            videoContent.style.display = 'none';
            photoContent.style.display = 'none';
        });

        showVideoButton.addEventListener('click', function() {
            allContent.style.display = 'none';
            videoContent.style.display = 'block';
            photoContent.style.display = 'none';
        });

        showPhotosButton.addEventListener('click', function() {
            allContent.style.display = 'none';
            videoContent.style.display = 'none';
            photoContent.style.display = 'block';
        });
    });

