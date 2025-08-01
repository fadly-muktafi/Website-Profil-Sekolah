<?php
// kontak.php - Contact Page
$page_title = "Hubungi Kami";
$page_description = "Hubungi sekolah kami untuk informasi pendaftaran, program sekolah, atau pertanyaan lainnya. Tim kami siap membantu Anda dengan pelayanan terbaik.";
include 'inc/header.php';
?>

<section class="main-content">
    <div class="page-header">
        <h1 class="page-title">Hubungi Kami</h1>
        <p class="page-subtitle">Kami siap membantu menjawab pertanyaan dan memberikan informasi yang Anda butuhkan</p>
    </div>

    <!-- Contact Form and Info -->
    <div class="grid-2" style="max-width: 1200px; margin: 0 auto; gap: 40px;">
        <!-- Contact Form -->
        <div class="content-card contact-card">
            <h3 style="font-size: 1.8rem; margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-paper-plane" style="color: #60a5fa;"></i>
                Kirim Pesan
            </h3>
            
            <form id="contactForm" style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500;">
                        <i class="fas fa-user" style="margin-right: 8px; color: #fbbf24;"></i>Nama Lengkap *
                    </label>
                    <input type="text" id="name" name="name" required 
                           style="width: 100%; padding: 15px; border: none; border-radius: 10px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none; transition: all 0.3s ease;"
                           placeholder="Masukkan nama lengkap Anda">
                </div>

                <div>
                    <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">
                        <i class="fas fa-envelope" style="margin-right: 8px; color: #10b981;"></i>Email *
                    </label>
                    <input type="email" id="email" name="email" required 
                           style="width: 100%; padding: 15px; border: none; border-radius: 10px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none; transition: all 0.3s ease;"
                           placeholder="nama@email.com">
                </div>

                <div>
                    <label for="phone" style="display: block; margin-bottom: 8px; font-weight: 500;">
                        <i class="fas fa-phone" style="margin-right: 8px; color: #8b5cf6;"></i>Nomor Telepon
                    </label>
                    <input type="tel" id="phone" name="phone" 
                           style="width: 100%; padding: 15px; border: none; border-radius: 10px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none; transition: all 0.3s ease;"
                           placeholder="08xx-xxxx-xxxx">
                </div>

                <div>
                    <label for="subject" style="display: block; margin-bottom: 8px; font-weight: 500;">
                        <i class="fas fa-tag" style="margin-right: 8px; color: #f59e0b;"></i>Subjek *
                    </label>
                    <select id="subject" name="subject" required 
                            style="width: 100%; padding: 15px; border: none; border-radius: 10px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none; cursor: pointer;">
                        <option value="">Pilih subjek pesan</option>
                        <option value="pendaftaran">Informasi Pendaftaran</option>
                        <option value="program">Program Sekolah</option>
                        <option value="fasilitas">Fasilitas Sekolah</option>
                        <option value="biaya">Informasi Biaya</option>
                        <option value="kerjasama">Kerjasama</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div>
                    <label for="message" style="display: block; margin-bottom: 8px; font-weight: 500;">
                        <i class="fas fa-comment-alt" style="margin-right: 8px; color: #ec4899;"></i>Pesan *
                    </label>
                    <textarea id="message" name="message" required rows="6" 
                              style="width: 100%; padding: 15px; border: none; border-radius: 10px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none; resize: vertical; transition: all 0.3s ease;"
                              placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>

                <button type="submit" style="padding: 15px 30px; background: linear-gradient(45deg, #667eea, #764ba2); color: white; border: none; border-radius: 10px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <i class="fas fa-paper-plane"></i>
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="content-card contact-card">
            <h3 style="font-size: 1.8rem; margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-info-circle" style="color: #4ade80;"></i>
                Informasi Kontak
            </h3>

            <div style="display: flex; flex-direction: column; gap: 25px;">
                <div style="display: flex; align-items: flex-start; gap: 15px; padding: 20px; background: rgba(255, 255, 255, 0.1); border-radius: 15px; transition: all 0.3s ease;">
                    <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: #ef4444; margin-top: 2px;"></i>
                    <div>
                        <h4 style="margin-bottom: 8px; font-weight: 600;">Alamat Sekolah</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">
                            Jl. Mpok Nori, RT.9/RW.3<br>
                            Kel. Bambu Apus, Kec. Cipayung<br>
                            Jakarta Timur 13890<br>
                            DKI Jakarta, Indonesia
                        </p>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 15px; padding: 20px; background: rgba(255, 255, 255, 0.1); border-radius: 15px; transition: all 0.3s ease;">
                    <i class="fas fa-phone" style="font-size: 1.5rem; color: #10b981; margin-top: 2px;"></i>
                    <div>
                        <h4 style="margin-bottom: 8px; font-weight: 600;">Telepon</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">
                            <strong>Kantor:</strong> 08978891895 (Hilal)<br>
                            <strong>WhatsApp:</strong> 081212001521 (Agus)<br>
                        </p>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 15px; padding: 20px; background: rgba(255, 255, 255, 0.1); border-radius: 15px; transition: all 0.3s ease;">
                    <i class="fas fa-envelope" style="font-size: 1.5rem; color: #3b82f6; margin-top: 2px;"></i>
                    <div>
                        <h4 style="margin-bottom: 8px; font-weight: 600;">Email</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">
                            <strong>Umum:</strong> info@smkn64-jkt.sch.id<br>
                            <strong>Pendaftaran:</strong> ppdb@smkn64-jkt.sch.id<br>
                            <strong>Akademik:</strong> akademik@smkn64-jkt.sch.id
                        </p>
                    </div>
                </div>

                <div style="display: flex; align-items: flex-start; gap: 15px; padding: 20px; background: rgba(255, 255, 255, 0.1); border-radius: 15px; transition: all 0.3s ease;">
                    <i class="fas fa-clock" style="font-size: 1.5rem; color: #f59e0b; margin-top: 2px;"></i>
                    <div>
                        <h4 style="margin-bottom: 8px; font-weight: 600;">Jam Operasional</h4>
                        <p style="opacity: 0.9; line-height: 1.6;">
                            <strong>Senin - Jumat:</strong> 06:30 - 15:00<br>
                            <strong>Sabtu:</strong> 07:00 - 12:00<br>
                            <strong>Minggu:</strong> Tutup
                        </p>
                    </div>
                </div>
            </div>

            <!-- Social Media Links -->
            <div style="margin-top: 30px; text-align: center;">
                <h4 style="margin-bottom: 20px; font-weight: 600;">Ikuti Kami</h4>
                <div style="display: flex; justify-content: center; gap: 15px;">
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: rgba(59, 89, 152, 0.8); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2rem;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: rgba(29, 161, 242, 0.8); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2rem;">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: rgba(225, 48, 108, 0.8); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2rem;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: rgba(37, 211, 102, 0.8); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2rem;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: rgba(205, 32, 31, 0.8); color: white; text-decoration: none; border-radius: 50%; transition: all 0.3s ease; font-size: 1.2rem;">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="content-card" style="max-width: 1200px; margin: 40px auto 0; padding: 0; overflow: hidden;">
        <div style="padding: 30px 40px; background: rgba(255, 255, 255, 0.1);">
            <h3 style="font-size: 1.5rem; margin-bottom: 15px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <i class="fas fa-map" style="color: #ef4444;"></i>
                Lokasi Sekolah
            </h3>
            <p style="text-align: center; opacity: 0.9; margin-bottom: 20px;">Temukan lokasi sekolah kami dengan mudah</p>
        </div>
        
        <!-- Placeholder for Google Maps - replace with actual embed code -->
        <div style="height: 400px; background: linear-gradient(45deg, #667eea, #764ba2); display: flex; align-items: center; justify-content: center; color: white;">
            <div style="text-align: center;">
                <i class="fas fa-map-marker-alt" style="font-size: 4rem; margin-bottom: 20px; opacity: 0.7;"></i>
                <h4 style="margin-bottom: 10px;">Peta Lokasi Sekolah</h4>
                <p style="opacity: 0.8;">Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Cipayung, Jakarta Timur</p>
                <a href="https://maps.app.goo.gl/pbYUAeydggpksqRz5" target="_blank" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: rgba(255, 255, 255, 0.2); color: white; text-decoration: none; border-radius: 20px; transition: all 0.3s ease;">
                    Buka di Google Maps <i class="fas fa-external-link-alt" style="margin-left: 5px;"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="content-card" style="max-width: 1000px; margin: 40px auto 0;">
        <h3 style="font-size: 1.8rem; margin-bottom: 30px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px;">
            <i class="fas fa-question-circle" style="color: #8b5cf6;"></i>
            Pertanyaan yang Sering Diajukan
        </h3>

        <div class="faq-container">
            <div class="faq-item" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding: 20px 0;">
                <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-weight: 600; font-size: 1.1rem;">
                    <span>Bagaimana cara mendaftar sebagai siswa baru?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; padding-top: 0;">
                    <p style="opacity: 0.9; line-height: 1.6; padding-top: 15px;">Pendaftaran dapat dilakukan secara online melalui website kami atau datang langsung ke sekolah. Syarat dan prosedur lengkap dapat dilihat di halaman pendaftaran atau hubungi kami untuk informasi lebih detail.</p>
                </div>
            </div>

            <div class="faq-item" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding: 20px 0;">
                <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-weight: 600; font-size: 1.1rem;">
                    <span>Apakah tersedia program beasiswa?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; padding-top: 0;">
                    <p style="opacity: 0.9; line-height: 1.6; padding-top: 15px;">Ya, kami menyediakan berbagai program beasiswa untuk siswa berprestasi, kurang mampu, dan atlet berprestasi. Informasi lengkap tentang syarat dan cara pendaftaran beasiswa dapat ditanyakan langsung ke bagian administrasi.</p>
                </div>
            </div>

            <div class="faq-item" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding: 20px 0;">
                <div class="faq-question" style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-weight: 600; font-size: 1.1rem;">
                    <span>Apa saja fasilitas yang tersedia di sekolah?</span>
                    <i class="fas fa-chevron-down" style="transition: transform 0.3s ease;"></i>
                </div>
                <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; padding-top: 0;">
                    <p style="opacity: 0.9; line-height: 1.6; padding-top: 15px;">Sekolah kami dilengkapi dengan fasilitas modern seperti laboratorium sains, komputer, perpustakaan digital, studio musik, lapangan olahraga, kantin sehat, dan masih banyak lagi. Detail lengkap dapat dilihat di halaman profil sekolah.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact specific styles */
.contact-card:hover {
    transform: translateY(-8px);
}

#contactForm input:focus,
#contactForm select:focus,
#contactForm textarea:focus {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.3);
}

#contactForm button:hover {
    background: linear-gradient(45deg, #5a67d8, #6b46c1);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.contact-card > div > div:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateX(5px);
}

.contact-card a:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.faq-question:hover {
    color: #fbbf24;
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-item.active .faq-answer {
    max-height: 200px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all FAQ items
            faqItems.forEach(faq => {
                faq.classList.remove('active');
                faq.querySelector('.faq-answer').style.maxHeight = '0';
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });

    // Enhanced form validation
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input, select, textarea');
    
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearValidation);
    });
    
    function validateField(e) {
        const field = e.target;
        const value = field.value.trim();
        
        // Remove existing validation styles
        field.style.borderColor = '';
        
        if (field.hasAttribute('required') && !value) {
            field.style.borderColor = '#ef4444';
            return false;
        }
        
        if (field.type === 'email' && value && !isValidEmail(value)) {
            field.style.borderColor = '#ef4444';
            return false;
        }
        
        field.style.borderColor = '#10b981';
        return true;
    }
    
    function clearValidation(e) {
        e.target.style.borderColor = '';
    }
});
</script>

<?php include 'inc/footer.php'; ?>