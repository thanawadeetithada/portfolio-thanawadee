<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Thanawadee Tithada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: {
                        dark: '#0f172a',
                        text: '#1e293b',
                        muted: '#64748b',
                        bg: '#f8fafc'
                    }
                },
                fontFamily: {
                    sans: ['Outfit', 'sans-serif'],
                }
            }
        }
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Outfit', sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
    }
    </style>
</head>

<body class="bg-white">

    <nav class="grid grid-cols-3 items-center py-6 px-6 md:px-12 lg:px-24 border-b border-slate-100">
        <div class="text-xl md:text-2xl font-light text-brand-text">
            Portfolio
        </div>

        <div class="flex justify-center space-x-10 text-sm font-medium text-brand-muted">
            <a href="index.php" class="hover:text-brand-dark transition-colors">Home</a>
            <a href="contact.php" class="text-brand-dark font-semibold">Contact</a>
        </div>

        <div class="flex justify-end space-x-5 text-brand-text text-lg">
        </div>
    </nav>

    <section class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 pt-20 pb-12">
        <div class="text-center max-w-2xl mx-auto">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-brand-text mb-6">
                Get in touch
            </h1>
            <p class="text-brand-muted text-base md:text-lg">
                Currently open for new opportunities. Let's discuss how I can add value to your team.
            </p>
        </div>
    </section>

    <section class="max-w-[1000px] mx-auto px-6 md:px-12 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

            <div
                class="bg-brand-bg rounded-[24px] p-10 flex flex-col items-center justify-center text-center transition-transform hover:-translate-y-1 duration-300">
                <div
                    class="w-16 h-16 bg-brand-dark rounded-full flex items-center justify-center text-white text-2xl mb-6 shadow-sm">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <h2 class="font-semibold text-brand-text text-lg mb-2">Email</h2>
                <a href="mailto:thanawadeetit@gmail.com"
                    class="text-brand-muted hover:text-brand-dark transition-colors text-sm md:text-base">
                    thanawadeetit@gmail.com
                </a>
            </div>

            <div
                class="bg-brand-bg rounded-[24px] p-10 flex flex-col items-center justify-center text-center transition-transform hover:-translate-y-1 duration-300">
                <div
                    class="w-16 h-16 bg-brand-dark rounded-full flex items-center justify-center text-white text-2xl mb-6 shadow-sm">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <h2 class="font-semibold text-brand-text text-lg mb-2">Phone</h2>
                <a href="tel:0847346327"
                    class="text-brand-muted hover:text-brand-dark transition-colors text-sm md:text-base">
                    084-734-6327
                </a>
            </div>

            <div
                class="bg-brand-bg rounded-[24px] p-10 flex flex-col items-center justify-center text-center transition-transform hover:-translate-y-1 duration-300">
                <div
                    class="w-16 h-16 bg-brand-dark rounded-full flex items-center justify-center text-white text-2xl mb-6 shadow-sm">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <h2 class="font-semibold text-brand-text text-lg mb-2">Location</h2>
                <p class="text-brand-muted text-sm md:text-base">
                    Bangkok, Thailand
                </p>
            </div>

        </div>
    </section>
    <footer class="bg-brand-bg pt-16 pb-8 mt-12 md:mt-20">
        <div
            class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8 mb-16">
            <div class="text-center md:text-left">
                <div class="text-xl md:text-2xl font-light text-brand-text mb-4">Portfolio</div>
                <p class="text-sm text-brand-muted lg:pr-4">Hi, I'm Thanawadee Tithada<br>(Baifern)</p>
            </div>
            <div class="text-center md:text-left">
                <h3 class="text-xs font-bold text-brand-text mb-5 tracking-[0.15em] uppercase">PAGES</h3>
                <ul class="space-y-3 text-sm text-brand-muted">
                    <li><a href="index.php" class="hover:text-brand-dark transition-colors">Home</a></li>
                    <li><a href="cv.php" class="hover:text-brand-dark transition-colors hidden">CV</a></li>
                    <li><a href="contact.php" class="hover:text-brand-dark transition-colors">Contact</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left">
                <h3 class="text-xs font-bold text-brand-text mb-5 tracking-[0.15em] uppercase">SERVICES</h3>
                <ul class="space-y-3 text-sm text-brand-muted">
                    <li><a href="#" class="hover:text-brand-dark transition-colors">React / Angular / Vue</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">Flutter</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">UI/UX Design</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">Node.js / PHP</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left">
                <h3 class="text-xs font-bold text-brand-text mb-5 tracking-[0.15em] uppercase">Contact</h3>
                <ul class="space-y-3 text-sm text-brand-muted">
                    <li><a href="mailto:thanawadeetit@gmail.com"
                            class="hover:text-brand-dark transition-colors">thanawadeetit@gmail.com</a></li>
                    <li><a href="tel:0847346327" class="hover:text-brand-dark transition-colors">084-734-6327</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">Bangkok, Thailand</a></li>
                </ul>
            </div>
        </div>

        <div
            class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 pt-8 border-t border-slate-200/60 text-center text-xs text-brand-muted">
            &copy; 2026 Thanawadee Tithada. All rights reserved.
        </div>
    </footer>
</body>

</html>