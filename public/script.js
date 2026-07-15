/**
 * Ruang Tumbuh - Interactive JavaScript
 * Handles navigation, animations, and user interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initNavigation();
    initSmoothScroll();
    initScrollAnimations();
    initCounterAnimation();
    initGalleryFilter();
    initGalleryToggle();
    initMobileMenu();
    initTeamModal();
});

/**
 * Navigation - Scroll effect and active state
 */
function initNavigation() {
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    // Scroll effect for navbar
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Update active nav link
        updateActiveNavLink(sections, navLinks);
    });
}

/**
 * Update active navigation link based on scroll position
 */
function updateActiveNavLink(sections, navLinks) {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 150;
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
}

/**
 * Smooth scrolling for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');

            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Close mobile menu if open
                const navMenu = document.getElementById('navMenu');
                const navToggle = document.getElementById('navToggle');
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');

                // Smooth scroll to target
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Scroll-triggered animations
 */
function initScrollAnimations() {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');

                // Add staggered animation for children
                const children = entry.target.querySelectorAll('.mission-item, .program-card, .team-card, .gallery-item');
                children.forEach((child, index) => {
                    child.style.opacity = '0';
                    child.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        child.style.transition = 'all 0.5s ease';
                        child.style.opacity = '1';
                        child.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }
        });
    }, observerOptions);

    // Observe sections and cards
    document.querySelectorAll('.section').forEach(section => {
        section.classList.add('fade-in');
        observer.observe(section);
    });

    // Observe individual cards
    document.querySelectorAll('.mission-item, .program-card, .team-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
    });
}

/**
 * Counter animation for statistics
 */
function initCounterAnimation() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(() => animateCounter(counter), 10);
        } else {
            counter.innerText = target.toLocaleString() + '+';
        }
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                if (!counter.classList.contains('animated')) {
                    counter.classList.add('animated');
                    animateCounter(counter);
                }
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

/**
 * Get currently active tab filter
 */
function getActiveFilter() {
    const activeTab = document.querySelector('.tab-btn.active');
    return activeTab ? activeTab.getAttribute('data-tab') : 'all';
}

/**
 * Gallery filter functionality
 */
function initGalleryFilter() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active tab
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-tab');

            // Filter gallery items
            galleryItems.forEach(item => {
                const type = item.getAttribute('data-type');

                if (filter === 'all' || type === filter) {
                    // For non-extra items, always show them if they match the filter
                    // For extra items, only show if toggle is active AND matches filter
                    if (!item.classList.contains('gallery-extra')) {
                        item.classList.remove('hidden');
                        requestAnimationFrame(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        });
                    } else {
                        // Extra items: keep hidden unless toggle is active
                        const toggleBtn = document.getElementById('galleryToggleBtn');
                        if (toggleBtn && toggleBtn.classList.contains('active')) {
                            item.classList.remove('hidden');
                            requestAnimationFrame(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            });
                        } else {
                            item.classList.add('hidden');
                        }
                    }
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        item.classList.add('hidden');
                    }, 200);
                }
            });

            // Reset "Lainnya" button state when switching tabs
            const toggleBtn = document.getElementById('galleryToggleBtn');
            if (toggleBtn) {
                toggleBtn.innerHTML = '<span class="btn-text">Lainnya</span> <i class="fas fa-chevron-down"></i>';
                toggleBtn.classList.remove('active');
            }
        });
    });

    // Add transition styles
    galleryItems.forEach(item => {
        item.style.transition = 'all 0.3s ease';
    });
}

/**
 * Gallery "Lainnya" toggle button
 */
function initGalleryToggle() {
    const toggleBtn = document.getElementById('galleryToggleBtn');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            const isActive = toggleBtn.classList.contains('active');
            const filter = getActiveFilter();
            const extraItems = document.querySelectorAll('.gallery-item.gallery-extra');

            if (isActive) {
                // Hide extra items
                extraItems.forEach(item => {
                    item.classList.add('hidden');
                });
                toggleBtn.innerHTML = '<span class="btn-text">Lainnya</span> <i class="fas fa-chevron-down"></i>';
                toggleBtn.classList.remove('active');
            } else {
                // Show extra items that match the current filter
                extraItems.forEach(item => {
                    const type = item.getAttribute('data-type');
                    if (filter === 'all' || type === filter) {
                        item.classList.remove('hidden');
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.9)';
                        requestAnimationFrame(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        });
                    }
                });
                toggleBtn.innerHTML = '<span class="btn-text">Tampilkan Lebih Sedikit</span> <i class="fas fa-chevron-up"></i>';
                toggleBtn.classList.add('active');
            }
        });
    }
}

/**
 * Mobile menu toggle
 */
function initMobileMenu() {
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });

        // Close menu when pressing Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }
}

/**
 * Parallax effect for hero section
 */
window.addEventListener('scroll', () => {
    const hero = document.querySelector('.hero');
    if (hero) {
        const scrolled = window.scrollY;
        hero.style.backgroundPositionY = `${scrolled * 0.5}px`;
    }
});

/**
 * Add loading animation to page
 */
window.addEventListener('load', () => {
    document.body.classList.add('loaded');

    // Initialize hero animation
    const heroContent = document.querySelector('.hero-content');
    if (heroContent) {
        heroContent.style.opacity = '0';
        heroContent.style.transform = 'translateY(30px)';
        setTimeout(() => {
            heroContent.style.transition = 'all 0.8s ease';
            heroContent.style.opacity = '1';
            heroContent.style.transform = 'translateY(0)';
        }, 200);
    }
});

/**
 * Video modal functionality (for gallery)
 */
document.querySelectorAll('.video-play-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const galleryItem = btn.closest('.gallery-item');
        const title = galleryItem.querySelector('.gallery-title').textContent;
        const videoEl = galleryItem.querySelector('video.gallery-media');
        const videoSource = videoEl ? videoEl.querySelector('source') : null;
        const videoSrc = videoSource ? videoSource.getAttribute('src') : null;


        // Create video modal
        const modal = document.createElement('div');
        modal.className = 'video-modal';
        modal.innerHTML = `
            <div class="video-modal-overlay"></div>
            <div class="video-modal-content">
                <div class="video-modal-header">
                    <h3>${title}</h3>
                    <button class="video-modal-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="video-placeholder">
                    <i class="fas fa-play-circle"></i>
                    <p>Konten akan segera ditambahkan</p>
                </div>
                <div class="video-actual" style="display:none; position: relative; background:#000; width:100%;">
                    <video id="videoEl" style="width:100%; height:100%; max-height:75vh; display:block; object-fit:contain; background:#000;" controls playsinline preload="metadata">
                        <source id="videoSourceEl" src="${videoSrc || ''}" type="video/mp4" />
                    </video>
                </div>
            </div>
            <button class="video-modal-close-ext" aria-label="Tutup" style="position:fixed;top:12px;right:12px;background:rgba(0,0,0,0.4);border:none;color:#fff;font-size:0.7rem;cursor:pointer;width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;z-index:10001;transition:background 0.2s;">
                <i class="fas fa-times"></i>
            </button>
        `;

        // Add modal styles
        modal.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        `;

        const overlay = modal.querySelector('.video-modal-overlay');
        overlay.style.cssText = `
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
        `;

        const content = modal.querySelector('.video-modal-content');
        content.style.cssText = `
            position: relative;
            background: #FDF8F0;
            border-radius: 16px;
            max-width: 800px;
            width: 90%;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
        `;

        const header = modal.querySelector('.video-modal-header');
        header.style.cssText = `
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            border-bottom: 1px solid #EDE3D0;
        `;
        header.querySelector('h3').style.cssText = `
            font-family: 'Playfair Display', serif;
            color: #1B4332;
            margin: 0;
        `;

        const closeBtn = modal.querySelector('.video-modal-close');
        closeBtn.style.cssText = `
            background: none;
            border: none;
            font-size: 1.25rem;
            color: #4A4A4A;
            cursor: pointer;
            padding: 8px;
        `;

        const placeholder = modal.querySelector('.video-placeholder');
        const videoActual = modal.querySelector('.video-actual');
        const videoElModal = modal.querySelector('#videoEl');

        placeholder.style.cssText = `
            padding: 80px 40px;
            text-align: center;
        `;
        placeholder.querySelector('i').style.cssText = `
            font-size: 4rem;
            color: #74C69D;
            margin-bottom: 20px;
        `;
        placeholder.querySelector('p').style.cssText = `
            color: #6B6B6B;
            font-size: 1rem;
        `;

        // If we have real video src, show video element (not empty src)
        const hasRealVideo = videoSrc && videoSrc.trim() !== '';
        if (hasRealVideo && videoElModal) {
            placeholder.style.display = 'none';
            if (videoActual) videoActual.style.display = 'block';

            // Ensure source is set (some browsers ignore <source> inner injection)
            const videoSourceEl = modal.querySelector('#videoSourceEl');
            if (videoSourceEl) {
                videoSourceEl.setAttribute('src', videoSrc);
            }

            // Start playing from the beginning when modal opens
            try {
                videoElModal.currentTime = 0;
            } catch (e) {}

            videoElModal.load();

            // Autoplay might be blocked; user can press play
            try {
                videoElModal.play().catch(() => {});
            } catch (e) {}
        }


        // Add close functionality
        const closeModal = () => modal.remove();
        overlay.addEventListener('click', closeModal);
        closeBtn.addEventListener('click', closeModal);
        const extCloseBtn = modal.querySelector('.video-modal-close-ext');
        if (extCloseBtn) {
            extCloseBtn.addEventListener('click', closeModal);
            extCloseBtn.addEventListener('mouseenter', () => extCloseBtn.style.background = 'rgba(0,0,0,0.7)');
            extCloseBtn.addEventListener('mouseleave', () => extCloseBtn.style.background = 'rgba(0,0,0,0.5)');
        }

        // Add fadeIn animation
        const style = document.createElement('style');
        style.textContent = `@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }`;
        document.head.appendChild(style);

        document.body.appendChild(modal);
    });
});

/**
 * Gallery item click to enlarge
 */
document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', () => {
        const title = item.querySelector('.gallery-title').textContent;
        const type = item.querySelector('.gallery-type').textContent;
        const photoEl = item.querySelector('img.gallery-media');
        const videoEl = item.querySelector('video.gallery-media');
        const photoSrc = photoEl ? photoEl.getAttribute('src') : null;
        const videoSource = videoEl ? videoEl.querySelector('source') : null;
        const videoSrc = videoSource ? videoSource.getAttribute('src') : null;


        // Create lightbox
        const lightbox = document.createElement('div');
        lightbox.className = 'gallery-lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-overlay"></div>
            <div class="lightbox-content">
                <div class="lightbox-placeholder">
                    <button class="lightbox-placeholder-close" aria-label="Tutup">
                        <i class="fas fa-times"></i>
                    </button>
                    <i class="fas ${type.includes('Foto') ? 'fa-image' : 'fa-play-circle'}"></i>
                    <h3>${title}</h3>
                    <p>Konten akan segera ditambahkan</p>
                </div>
                <div class="lightbox-actual" style="display:none; position: relative; background:#000;">
                    <div style="display:flex; flex-direction:column; background:#FDF8F0; border-radius:16px; overflow:hidden;">
                        <div style="display:flex; justify-content:space-between; align-items:center; padding:20px 24px; border-bottom:1px solid #EDE3D0;">
                            <h3 style="font-family:'Playfair Display',serif; color:#1B4332; margin:0; font-size:1.25rem;">${title}</h3>
                            <button class="lightbox-close-inner" style="background:none; border:none; font-size:1.25rem; color:#4A4A4A; cursor:pointer; padding:8px;"><i class="fas fa-times"></i></button>
                        </div>
                        <div style="background:#000;">
                            ${type.includes('Foto')
                                ? `<div style="display:flex;align-items:center;justify-content:center;min-height:200px;max-height:75vh;background:#000;overflow:hidden;">
                                    <img src="${photoSrc || ''}" alt="${title}" style="max-width:100%;max-height:75vh;width:auto;height:auto;display:block;object-fit:contain;" />
                                   </div>`
                                : `<video controls playsinline preload="metadata" style="width:100%; height:100%; max-height:75vh; display:block; object-fit:contain; background:#000;">
                                    <source src="${videoSrc || ''}" type="video/mp4" />
                                </video>`}
                        </div>
                    </div>
                </div>
            </div>
        `;

        lightbox.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.9);
        `;

        const content = lightbox.querySelector('.lightbox-content');
        content.style.cssText = `
            position: relative;
            max-width: 900px;
            width: 90%;
        `;

        const placeholder = lightbox.querySelector('.lightbox-placeholder');
        placeholder.style.cssText = `
            background: #FDF8F0;
            border-radius: 16px;
            padding: 80px 40px;
            text-align: center;
            position: relative;
        `;
        placeholder.querySelector('i').style.cssText = `
            font-size: 5rem;
            color: #74C69D;
            margin-bottom: 24px;
        `;
        placeholder.querySelector('h3').style.cssText = `
            font-family: 'Playfair Display', serif;
            color: #1B4332;
            margin-bottom: 12px;
        `;
        placeholder.querySelector('p').style.cssText = `
            color: #6B6B6B;
        `;

        // Style the placeholder close button
        const placeholderCloseStyle = placeholder.querySelector('.lightbox-placeholder-close');
        if (placeholderCloseStyle) {
            placeholderCloseStyle.style.cssText = `
                position: absolute;
                top: 0;
                right: 0;
                background: none;
                border: none;
                font-size: 0.7rem;
                color: #aaa;
                cursor: pointer;
                padding: 4px 6px;
                z-index: 1;
                opacity: 0.5;
                transition: opacity 0.2s;
            `;
            placeholderCloseStyle.addEventListener('mouseenter', () => placeholderCloseStyle.style.opacity = '1');
            placeholderCloseStyle.addEventListener('mouseleave', () => placeholderCloseStyle.style.opacity = '0.5');
        }

        const lightboxActual = lightbox.querySelector('.lightbox-actual');
        const hasPhoto = type.includes('Foto') && photoSrc;
        const hasVideo = !type.includes('Foto') && videoSrc;

        if (hasPhoto || hasVideo) {
            placeholder.style.display = 'none';
            if (lightboxActual) lightboxActual.style.display = 'block';
        }


        const closeLightbox = () => lightbox.remove();
        lightbox.querySelector('.lightbox-overlay').addEventListener('click', closeLightbox);

        // Close via placeholder close button
        const placeholderCloseBtn = lightbox.querySelector('.lightbox-placeholder-close');
        if (placeholderCloseBtn) {
            placeholderCloseBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                closeLightbox();
            });
        }

        // Close via inner close button
        const innerCloseBtn = lightbox.querySelector('.lightbox-close-inner');
        if (innerCloseBtn) {
            innerCloseBtn.addEventListener('click', closeLightbox);
        }

        document.body.appendChild(lightbox);
    });
});

/**
 * Team Modal functionality
 */
function initTeamModal() {
    const teamCards = document.querySelectorAll('.team-card');
    const modal = document.getElementById('teamModal');
    const modalOverlay = modal.querySelector('.team-modal-overlay');
    const modalCloseBtn = modal.querySelector('.team-modal-close');

    // Team member data with local asset photos
    const teamMembers = {
        1: {
            name: 'Muhammad Satria Gigih Alyuri',
            role: 'Founder',
            photo: 'Aset/Satria.jpeg',
            description: 'Founder Ruang Tumbuh yang menginisiasi lahirnya komunitas ini dengan visi membangun ekosistem pengembangan diri bagi generasi muda Indonesia. Dengan latar belakang pendidikan dan pengalaman dalam pengembangan sumber daya manusia, Satria percaya bahwa setiap anak muda memiliki potensi luar biasa yang hanya menunggu ruang yang tepat untuk berkembang.',
            social: [
                { icon: 'fab fa-instagram', url: 'https://www.instagram.com/satriaalyuri/', target: '_blank' },
                { icon: 'fab fa-whatsapp', url: 'https://wa.me/6285147303364', target: '_blank' },
            ],
            quote: 'Setiap anak muda adalah benih unggul yang hanya membutuhkan tanah subur untuk tumbuh. Ruang Tumbuh hadir untuk menjadi tanah tersebut.'
        },
        2: {
            name: 'Theresia Cahayani Lambok Sibarani',
            role: 'Co-Founder',
            photo: 'Aset/Rere.jpeg',
            description: 'Berpengalaman dalam mengembangkan strategi organisasi, membangun kolaborasi, serta memastikan setiap program memberikan pengalaman yang bermakna bagi peserta. Teresia memiliki passion dalam membangun sistem yang berkelanjutan dan menciptakan dampak jangka panjang bagi komunitas.',
            social: [
                { icon: 'fab fa-instagram', url: 'https://www.instagram.com/teresibaraniii/', target: '_blank' },
                { icon: 'fab fa-whatsapp', url: 'https://wa.me/6282114976525', target: '_blank' },
            ],
            quote: 'Kolaborasi adalah kunci. Ketika kita bekerja bersama, dampak yang kita ciptakan menjadi jauh lebih besar daripada jumlah bagian-bagiannya.'
        },
        3: {
            name: 'Syifa Salsabila Nadhifah',
            role: 'Co-Founder',
            photo: 'Aset/Nad.jpeg',
            description: 'Berpengalaman dalam memperkuat pengembangan program dan komunitas, serta menciptakan lingkungan yang inklusif untuk belajar dan bertumbuh. Salsabila memastikan bahwa setiap program Ruang Tumbuh dirancang dengan pendekatan yang manusiawi dan berpusat pada kebutuhan peserta.',
            social: [
                { icon: 'fab fa-instagram', url: 'https://www.instagram.com/sslsabilazz9/', target: '_blank' },
                { icon: 'fab fa-whatsapp', url: 'https://wa.me/6285810817104', target: '_blank' },
                { icon: 'fab fa-linkedin', url: 'https://www.linkedin.com/in/syifasalsabilanadhifah/', target: '_blank' }
            ],
            quote: 'Lingkungan yang aman dan suportif adalah fondasi dari setiap proses belajar yang bermakna. Di sinilah keberanian untuk tumbuh dimulai.'
        },
        4: {
            name: 'Muhammad Nazriel Sofiuloh',
            role: 'Co-Founder',
            photo: 'Aset/Nazriel.jpeg',
            description: 'Berpengalaman dalam mendukung pengembangan organisasi, memperluas jejaring kemitraan, dan mendorong keberlanjutan Ruang Tumbuh. Nazriel berperan penting dalam membangun hubungan strategis dengan berbagai pihak untuk memastikan Ruang Tumbuh dapat terus berkembang dan memberikan dampak yang lebih luas.',
            social: [
                { icon: 'fab fa-instagram', url: 'https://www.instagram.com/nazriel_sof/' },
                { icon: 'fab fa-whatsapp', url: 'https://wa.me/6289521244039' },
                { icon: 'fas fa-envelope', url: 'mnazriel04@gmail.com' }
            ],
            quote: 'Keberlanjutan sebuah gerakan ditentukan oleh kemampuan kita membangun jembatan antara visi dan aksi, antara mimpi dan realitas.'
        }
    };

    // Open modal when team card is clicked (but not when clicking social links)
    teamCards.forEach(card => {
        // Prevent social links from triggering the modal
        const socialLinks = card.querySelectorAll('.team-social a');
        socialLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        card.addEventListener('click', function() {
            const memberId = this.getAttribute('data-member');
            const member = teamMembers[memberId];

            if (member) {
                // Populate modal with member data
                document.getElementById('modalImage').src = member.photo;
                document.getElementById('modalImage').alt = member.name;
                document.getElementById('modalRole').textContent = member.role;
                document.getElementById('modalName').textContent = member.name;
                document.getElementById('modalDescription').textContent = member.description;

                // Populate social links
                const socialContainer = document.getElementById('modalSocial');
                socialContainer.innerHTML = '';
                member.social.forEach(social => {
                    const link = document.createElement('a');
                    link.href = social.url;
                    link.target = '_blank';
                    link.innerHTML = `<i class="${social.icon}"></i>`;
                    link.setAttribute('aria-label', social.icon.split('-')[1] || 'Social');
                    socialContainer.appendChild(link);
                });

                // Populate quote
                document.getElementById('modalQuote').querySelector('span').textContent = member.quote;

                // Show modal
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // Close modal functions
    const closeModal = () => {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    };

    modalOverlay.addEventListener('click', closeModal);
    modalCloseBtn.addEventListener('click', closeModal);

    // Close modal on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
}

