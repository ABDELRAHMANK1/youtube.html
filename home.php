<!DOCTYPE html>
<html>

<head>
  <title>YouTube.com clone</title>
  <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="general.css">
</head>

<body>
  <div class="header">
    <div class="left-section">
      <img class="humburger-menue" src="thumbnails/hamburger-menu.svg">
      <img class="youtube-logo" src="thumbnails/youtube-logo.svg">
    </div>
    <div class="middle-section">
      <input class="search-bar" type="text" placeholder="Search">
      <button class="search-button">
        <img class="search-icon" src="thumbnails/search.svg">
      </button>
      <button class="voice-button">
        <img class="voice-search-icon" src="thumbnails/voice-search-icon.svg">
      </button>
    </div>
    <div class="right-section">
      <button class="upload-botton">
        <img class="upload-icon" src="thumbnails/upload.svg">
      </button>
      <button class="apps-buttun">
        <img class="apps-icon" src="thumbnails/youtube-apps.svg">
      </button>
      <button class="notification-button">
        <img class="notification-icon" src="thumbnails/notifications.svg">
      </button>
      <button class="sign-up-button">
        <a href="index.php" class="link">Sign up</a>
      </button>
    </div>
  </div>

  <div class="video-grid"></div>

  <script>
    const videos = [
      {
        thumbnail: "thumbnails/thumbnail-1.webp",
        channelPicture: "thumbnails/channel-1.jpeg",
        title: "Talking Tech and AI with Google CEO Sundar Pichai!",
        author: "Marques Brownlee",
        views: "3.4M views · 6 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-2.webp",
        channelPicture: "thumbnails/channel-2.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-3.webp",
        channelPicture: "thumbnails/channel-3.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-4.webp",
        channelPicture: "thumbnails/channel-4.jpeg",
        title: "Understanding Quantum Computing",
        author: "Kurzgesagt – In a Nutshell",
        views: "2M views · 1 year ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-5.webp",
        channelPicture: "thumbnails/channel-5.jpeg",
        title: "The Science Behind Artificial Intelligence",
        author: "TED-Ed",
        views: "7M views · 3 months ago"
      }, {
        thumbnail: "thumbnails/thumbnail-1.webp",
        channelPicture: "thumbnails/channel-1.jpeg",
        title: "Talking Tech and AI with Google CEO Sundar Pichai!",
        author: "Marques Brownlee",
        views: "3.4M views · 6 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-2.webp",
        channelPicture: "thumbnails/channel-2.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-3.webp",
        channelPicture: "thumbnails/channel-3.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-4.webp",
        channelPicture: "thumbnails/channel-4.jpeg",
        title: "Understanding Quantum Computing",
        author: "Kurzgesagt – In a Nutshell",
        views: "2M views · 1 year ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-5.webp",
        channelPicture: "thumbnails/channel-5.jpeg",
        title: "The Science Behind Artificial Intelligence",
        author: "TED-Ed",
        views: "7M views · 3 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-1.webp",
        channelPicture: "thumbnails/channel-1.jpeg",
        title: "Talking Tech and AI with Google CEO Sundar Pichai!",
        author: "Marques Brownlee",
        views: "3.4M views · 6 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-2.webp",
        channelPicture: "thumbnails/channel-2.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-3.webp",
        channelPicture: "thumbnails/channel-3.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-4.webp",
        channelPicture: "thumbnails/channel-4.jpeg",
        title: "Understanding Quantum Computing",
        author: "Kurzgesagt – In a Nutshell",
        views: "2M views · 1 year ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-5.webp",
        channelPicture: "thumbnails/channel-5.jpeg",
        title: "The Science Behind Artificial Intelligence",
        author: "TED-Ed",
        views: "7M views · 3 months ago"
      }, {
        thumbnail: "thumbnails/thumbnail-1.webp",
        channelPicture: "thumbnails/channel-1.jpeg",
        title: "Talking Tech and AI with Google CEO Sundar Pichai!",
        author: "Marques Brownlee",
        views: "3.4M views · 6 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-2.webp",
        channelPicture: "thumbnails/channel-2.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-3.webp",
        channelPicture: "thumbnails/channel-3.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-4.webp",
        channelPicture: "thumbnails/channel-4.jpeg",
        title: "Understanding Quantum Computing",
        author: "Kurzgesagt – In a Nutshell",
        views: "2M views · 1 year ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-5.webp",
        channelPicture: "thumbnails/channel-5.jpeg",
        title: "The Science Behind Artificial Intelligence",
        author: "TED-Ed",
        views: "7M views · 3 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-1.webp",
        channelPicture: "thumbnails/channel-1.jpeg",
        title: "Talking Tech and AI with Google CEO Sundar Pichai!",
        author: "Marques Brownlee",
        views: "3.4M views · 6 months ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-2.webp",
        channelPicture: "thumbnails/channel-2.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-3.webp",
        channelPicture: "thumbnails/channel-3.jpeg",
        title: "Try Not To Laugh Challenge #9",
        author: "Markiplier",
        views: "19M views · 4 years ago"
      },
      {
        thumbnail: "thumbnails/thumbnail-4.webp",
        channelPicture: "thumbnails/channel-4.jpeg",
        title: "Understanding Quantum Computing",
        author: "Kurzgesagt – In a Nutshell",
        views: "2M views · 1 year ago"
      }
    ];

    const videoGrid = document.querySelector('.video-grid');
    videos.forEach(video => {
      const videoPreview = document.createElement('div');
      videoPreview.classList.add('video-preview');
      videoPreview.innerHTML = `
        <div class="video-pecture">
          <img class="thumbnail" src="${video.thumbnail}">
        </div>
        <div class="video-info-grid">
          <div class="channel-pecture">
            <img class="profile-picture" src="${video.channelPicture}">
          </div>
          <div class="video-info">
            <p class="video-title">${video.title}</p>
            <p class="video-author">${video.author}</p>
            <p class="video-stats">${video.views}</p>
          </div>
        </div>
      `;
      videoGrid.appendChild(videoPreview);
    });
  </script>
</body>

</html>