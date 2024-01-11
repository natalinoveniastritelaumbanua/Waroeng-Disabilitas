<nav class="navbar navbar-expand-lg navbar-light bg-white py-4 mb-4 ">
    <div class="container">
        <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="#">
            <img src="foto/20220717_214516_0001.ico" alt="site icon" style="width: 70px; height: auto;">
            <img src="foto/pertamina.png" alt="site icon" style="width: 80px; height: auto;">
            
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="order-lg-2 nav-btns">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <script>
    function searchProducts() {
        var searchInput = document.getElementById('searchInput').value;
        // Send the search query to the server
        fetch('/search.php?q=' + encodeURIComponent(searchInput))
            .then(response => response.json())
            .then(data => {
                // Handle the response data (e.g., update the UI with search results)
                console.log(data);
            })
            .catch(error => console.error('Error:', error));
    }
</script>

        <div class="collapse navbar-collapse order-lg-1" id="navMenu">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="index.php">Home</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="Product.php">Product</a>
                </li>
               
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="About.php">About Us</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "login.php">Admin</a>
                </li>
            </ul>
        </div>


    </div>
</nav>