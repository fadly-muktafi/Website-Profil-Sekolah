<?php
// header.php - Header Component

// Get current page for active navigation
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>Profil Sekolah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Website resmi profil sekolah dengan informasi lengkap tentang fasilitas, berita, dan kontak.'; ?>">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        
        <?php if(isset($additional_css)): ?>
            <?php foreach($additional_css as $css): ?>
                <link rel="stylesheet" href="<?php echo $css; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>
    <body>  
        <!-- Scroll Progress Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-progress" id="scrollProgress"></div>
        </div>
            
        <!-- Modern Navigation -->
        <nav class="modern-nav">
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">
                        <i class="fas fa-home"></i>
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="profil.php" class="nav-link <?php echo ($current_page == 'profil.php') ? 'active' : ''; ?>">
                        <i class="fas fa-school"></i>
                        Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="berita.php" class="nav-link <?php echo ($current_page == 'berita.php') ? 'active' : ''; ?>">
                        <i class="fas fa-newspaper"></i>
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kontak.php" class="nav-link <?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>">
                        <i class="fas fa-envelope"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </nav>
    </body>
</html>