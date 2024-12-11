<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Reels</title>
  <style>
   
  
  .header {
    text-align: center;
    padding: 20px;
  }
  .reels-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
    justify-content: center;
  }
  .reel {
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background: #fff;
  }
  .reel img,
  .reel video {
    width: 100%;
    height: auto;
  }
  .see_all {
    text-align: center;
    margin: 20px 0;
  }
  .see_all button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .see_all button:hover {
    background-color: #0056b3;
  }

  </style>
</head>
<body>
  <div class="header">
    <h1>All Reels</h1>
  </div>

  <div class="reels-container" id="reels-container">
    <!-- Reels will be dynamically loaded here -->
  </div>

  <script>
    const REELS_CONTAINER = document.getElementById("reels-container");

    function displayReels(reels) {
      reels.forEach((reel) => {
        const reelElement = document.createElement("div");
        reelElement.classList.add("reel");
        reelElement.innerHTML = `
          <video controls>
            <source src="${reel.media_url}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        `;
        REELS_CONTAINER.appendChild(reelElement);
      });
    }

    // Load remaining reels from localStorage
    const remainingReels = JSON.parse(localStorage.getItem("remainingReels"));
    if (remainingReels) {
      displayReels(remainingReels);
    } else {
      REELS_CONTAINER.innerHTML = "<p>No more reels to display.</p>";
    }
  </script>
</body>
</html>
