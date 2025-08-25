<script>
        // Add interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMenuButton = document.getElementById('close-menu');
            const mobileMenu = document.getElementById('mobile-menu');
            const overlay = document.getElementById('overlay');
            
            function openMenu() {
                mobileMenu.classList.add('open');
                overlay.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
            
            function closeMenu() {
                mobileMenu.classList.remove('open');
                overlay.classList.remove('open');
                document.body.style.overflow = 'auto';
            }
            
            mobileMenuButton.addEventListener('click', openMenu);
            closeMenuButton.addEventListener('click', closeMenu);
            overlay.addEventListener('click', closeMenu);
            
            // Sidebar navigation
            const sidebarLinks = document.querySelectorAll('nav a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    sidebarLinks.forEach(l => l.classList.remove('sidebar-active'));
                    this.classList.add('sidebar-active');
                    
                    // Close mobile menu after selection
                    if (window.innerWidth < 1024) {
                        closeMenu();
                    }
                });
            });

            // Add hover effects to metric cards
            const metricCards = document.querySelectorAll('.metric-card');
            metricCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Table row interactions
            const tableRows = document.querySelectorAll('.table-row');
            tableRows.forEach(row => {
                row.addEventListener('click', function() {
                    // Simulate opening user details
                    console.log('Opening user details...');
                    this.style.background = 'rgba(59, 130, 246, 0.1)';
                    setTimeout(() => {
                        this.style.background = '';
                    }, 2000);
                });
            });

            // Quick action buttons
            const quickActions = document.querySelectorAll('.chart-container button');
            quickActions.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Add click animation
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });

            // Analytics period buttons
            const periodButtons = document.querySelectorAll('.chart-container .flex button');
            periodButtons.forEach(button => {
                button.addEventListener('click', function() {
                    periodButtons.forEach(btn => {
                        btn.classList.remove('bg-blue-600', 'text-white');
                        btn.classList.add('bg-gray-100', 'text-gray-600');
                    });
                    this.classList.remove('bg-gray-100', 'text-gray-600');
                    this.classList.add('bg-blue-600', 'text-white');
                });
            });

            // Simulate real-time updates
            setInterval(() => {
                const activeSessionsElement = document.querySelector('.metric-card:nth-child(3) .text-2xl, .metric-card:nth-child(3) .text-3xl');
                if (activeSessionsElement) {
                    const currentValue = parseInt(activeSessionsElement.textContent.replace(',', ''));
                    const newValue = currentValue + Math.floor(Math.random() * 10) - 5;
                    activeSessionsElement.textContent = newValue.toLocaleString();
                }
            }, 5000);

            // Add notification badge animation
            const notificationBadge = document.querySelector('.bg-red-500');
            if (notificationBadge) {
                setInterval(() => {
                    notificationBadge.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        notificationBadge.style.transform = 'scale(1)';
                    }, 200);
                }, 3000);
            }
        });
    </script>
</body>
</html>