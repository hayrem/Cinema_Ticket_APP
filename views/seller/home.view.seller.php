<?php
    require "views/partials/head.php";
?>
  <div class="app-container">
    <div class="sidebar">
      <div class="sidebar-header">
        <div class="app-icon">

        </div>
      </div>
      <ul class="sidebar-list">
        <li class="sidebar-list-item active">
          <a href="/seller">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
            <span>Movie list</span>
          </a>
        </li>
        <li class="sidebar-list-item ">
          <a href="/setting">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <path d="M16 10a4 4 0 0 1-8 0" />
            </svg>
            <span>Theater sitting</span>
          </a>
        </li>
        <li class="sidebar-list-item">
                <a href="/create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span>Add new movie</span>
                </a>
         </li>
      </ul>
    </div>


    <div class="app-content">
      <div class="app-content-actions">
        <input class="search-bar" placeholder="Search..." type="text">
      </div>
      <div class="products-area-wrapper tableView">
        <div class="products-header">
            <h3>Movie list</h3>
        </div>
    </div>

        <!--  -->
    <div class="container-movecards">
        <div class="movie-cards">
          <div class="poster">
            <img src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg">
          </div>
          <div class="details">
            <h2>Star Wars: Episode V (1980)
              <br><span>Directed by Irvin Kershner</span>
            </h2>
            <div class="rating">
              <span>4/5</span>
            </div>
            <div class="tags">
              <span class="fantasy">BOOKING</span>
              <span class="mystery">MOEW INFOE</span>
            </div>
          </div>
        </div>
        <div class="movie-cards">
          <div class="poster">
            <img src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg">
          </div>
          <div class="details">
            <h2>Star Wars: Episode V (1980)
              <br><span>Directed by Irvin Kershner</span>
            </h2>
            <div class="rating">
              <span>4/5</span>
            </div>
            <div class="tags">
              <span class="fantasy">BOOKING</span>
              <span class="mystery">MOEW INFOE</span>
            </div>
          </div>
        </div>
        <div class="movie-cards">
          <div class="poster">
            <img src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg">
          </div>
          <div class="details">
            <h2>Star Wars: Episode V (1980)
              <br><span>Directed by Irvin Kershner</span>
            </h2>
            <div class="rating">
              <span>4/5</span>
            </div>
            <div class="tags">
              <span class="fantasy">BOOKING</span>
              <span class="mystery">MOEW INFOE</span>
            </div>
          </div>
        </div>
        <div class="movie-cards">
          <div class="poster">
            <img src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg">
          </div>
          <div class="details">
            <h2>Star Wars: Episode V (1980)
              <br><span>Directed by Irvin Kershner</span>
            </h2>
            <div class="rating">
              <span>4/5</span>
            </div>
            <div class="tags">
              <span class="fantasy">BOOKING</span>
              <span class="mystery">MOEW INFOE</span>
            </div>
          </div>
        </div>
        <div class="movie-cards">
          <div class="poster">
            <img src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg">
          </div>
          <div class="details">
            <h2>Star Wars: Episode V (1980)
              <br><span>Directed by Irvin Kershner</span>
            </h2>
            <div class="rating">
              <span>4/5</span>
            </div>
            <div class="tags">
              <span class="fantasy">BOOKING</span>
              <span class="mystery">MOEW INFOE</span>
            </div>
          </div>
        </div>
        <div class="movie-cards">
          <div class="poster">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_4ha5Xbh2zqx8jV-X8TDPdFU-KjvNQMNGlSivG21GLbwLhljeSQ7ccAQEFOOdFSivd84&usqp=CAU">
          </div>
          <div class="details">
            <h2>Star Wars: Episode V (1980)
              <br><span>Directed by Irvin Kershner</span>
            </h2>
            <div class="rating">
              <span>4/5</span>
            </div>
            <div class="tags">
              <span class="fantasy">BOOKING</span>
              <span class="mystery">MOEW INFOE</span>
            </div>
          </div>
        </div>
    </div>

  </div>

</body>
</html>