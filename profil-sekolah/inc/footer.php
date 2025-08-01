<!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="index.php" class="footer-link">
                    <i class="fas fa-home"></i> Beranda
                </a>
                <a href="profil.php" class="footer-link">
                    <i class="fas fa-school"></i> Profil
                </a>
                <a href="berita.php" class="footer-link">
                    <i class="fas fa-newspaper"></i> Berita
                </a>
                <a href="kontak.php" class="footer-link">
                    <i class="fas fa-envelope"></i> Kontak
                </a>
            </div>
            <div class="footer-info">
                <p><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123, Jakarta, Indonesia</p>
                <p><i class="fas fa-phone"></i> (021) 1234-5678 | <i class="fas fa-envelope"></i> info@sekolahkami.sch.id</p>
                <p style="margin-top: 20px; opacity: 0.7;">
                    &copy; <?php echo date('Y'); ?> Sekolah Kami. Semua hak dilindungi undang-undang.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    
    <?php if(isset($additional_js)): ?>
        <?php foreach($additional_js as $js): ?>
            <script src="<?php echo $js; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>