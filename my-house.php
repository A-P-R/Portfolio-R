<?php
// House Information Associative Array
$house_info = array(
    "Bedrooms" => 3,
    "Bathrooms" => 2,
    "Address" => "Sunwal 11 Nawalparasi, Nepal",
    "SquareFootage" => 1800,
    "YearBuilt" => 1977,
    "Type" => "House",
    "Amenities" => "Livestock shelter, Organic garden space",
    "Neighborhood" => "Bardaghat, Nawalparasi"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAYUSH PANDEY | My House</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Netflix-style loader (CSS-only) -->
    <div class="netflix-loader">
        <div class="netflix-loader-container">
            <div class="netflix-loader-logo">AAYUSH PANDEY</div>
            <div class="netflix-loader-spinner"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <a href="index.html" class="logo">AAYUSH PANDEY</a>
        <nav class="navigation">
            <input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-toggle">
            <label for="mobile-menu-toggle" class="mobile-menu-label">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <ul class="nav-links">
                <li><a href="my-study.html">My Study</a></li>
                <li><a href="my-hobbies.html">My Hobbies</a></li>
                <li><a href="my-music.html">My Music</a></li>
                <li><a href="my-house.php">My House</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero/Billboard -->
    <section class="hero-container" style="background-image: url('images/hero/house-bg.jpg'); background-size: cover; background-position: center;">
        <div class="hero-content">
            <h1 class="hero-title">My House</h1>
            <h2 class="hero-subtitle">Details About Where I Live</h2>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <!-- House Information Section -->
        <section class="content-row" style="padding-top: 100px;">
            <div class="row-container">
                <h2 class="section-header">House Information</h2>
                <p style="margin-left: 15px; margin-bottom: 20px;">Welcome to my home! Below you'll find details about my living space. I've created this section using PHP to demonstrate my backend programming skills.</p>
                
                <div class="bio-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Loop through the house_info array to display each property
                            foreach($house_info as $property => $detail) {
                                echo "<tr>";
                                echo "<td><strong>$property</strong></td>";
                                echo "<td>$detail</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- House Gallery Section -->
        <section class="content-row">
            <div class="row-container">
                <h2 class="section-header">House Gallery</h2>
                <div class="grid">
                    <div class="card">
                        <img src="images/house/living-room.jpg" alt="Living Room" class="card-img">
                        <div class="card-content">
                            <h3 class="card-title">Living Room</h3>
                            <p class="card-text">Modern and cozy living space with natural lighting.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/house/kitchen.jpg" alt="Kitchen" class="card-img">
                        <div class="card-content">
                            <h3 class="card-title">Kitchen</h3>
                            <p class="card-text">Fully equipped kitchen with stainless steel appliances.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/house/bedroom.jpg" alt="Bedroom" class="card-img">
                        <div class="card-content">
                            <h3 class="card-title">Master Bedroom</h3>
                            <p class="card-text">Spacious bedroom with large windows and walk-in closet.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/house/bathroom.jpg" alt="Bathroom" class="card-img">
                        <div class="card-content">
                            <h3 class="card-title">Bathroom</h3>
                            <p class="card-text">Modern bathroom with shower and bathtub.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li>Email: aayushp309@gmail.com</li>
                        <li>Phone: +61 234 567 890</li>
                        <li>Location: Sydney, Australia</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Social</h3>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/aayush-pandey-49b903283?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/A-P-R" target="_blank">GitHub</a></li>
                        <li><a href="https://www.instagram.com/_aayush_rem/" target="_blank">Instagram</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="my-study.html">My Study</a></li>
                        <li><a href="my-hobbies.html">My Hobbies</a></li>
                        <li><a href="my-music.html">My Music</a></li>
                        <li><a href="my-house.php">My House</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023-2025 Aayush Pandey. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html> 
 