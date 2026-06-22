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
                        dark: '#0f172a', // สีน้ำเงินเข้มเกือบดำแบบปุ่มในรูป
                        text: '#1e293b', // สีตัวอักษร Heading
                        muted: '#64748b', // สีตัวอักษรรายละเอียด
                        bg: '#f8fafc' // สีพื้นหลัง Footer
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

    .bg-white {
        padding: 16px;
    }
    </style>
</head>

<body class="bg-white">

    <nav class="grid grid-cols-3 items-center py-6 px-6 md:px-12 lg:px-24 border-b border-slate-100">
        <div class="text-xl md:text-2xl font-light text-brand-text">
            Portfolio
        </div>

        <div class="flex justify-center space-x-10 text-sm font-medium text-brand-muted">
            <a href="index.php" class="text-brand-dark font-semibold">Home</a>
            <a href="contact.php" class="hover:text-brand-dark transition-colors">Contact</a>
        </div>

        <div class="flex justify-end space-x-5 text-brand-text text-lg">
        </div>
    </nav>

    <section
        class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 py-12 md:py-20 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div class="order-2 lg:order-1 text-center lg:text-left">
            <h1
                class="text-4xl md:text-6xl lg:text-[64px] font-light text-brand-text leading-[1.1] mb-6 tracking-tight">
                <br class="hidden lg:block"> home decor
            </h1>
            <p class="text-brand-muted text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                Curated vintage and retro home decor from Berlin, bringing timeless design and character to your space.
            </p>
        </div>
        <div class="order-1 lg:order-2 grid grid-cols-2 gap-4 h-[400px] md:h-[500px]">
            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=600&q=80"
                alt="Living room" class="w-full h-full object-cover rounded-3xl row-span-2">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80"
                alt="Chair detail" class="w-full h-full object-cover rounded-3xl">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=400&q=80"
                alt="Lamp detail" class="w-full h-full object-cover rounded-3xl">
        </div>
    </section>

    <section class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 py-16 md:py-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-light text-brand-text mb-3">Performance</h2>
            <p class="text-brand-muted text-sm md:text-base">Handpicked vintage and retro pieces to elevate your space
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group cursor-pointer overflow-hidden rounded-[24px]">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=400&q=80"
                    alt="Fireplace"
                    class="w-full h-72 md:h-80 object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="group cursor-pointer overflow-hidden rounded-[24px]">
                <img src="https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?auto=format&fit=crop&w=400&q=80"
                    alt="Desk"
                    class="w-full h-72 md:h-80 object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="group cursor-pointer overflow-hidden rounded-[24px]">
                <img src="https://images.unsplash.com/photo-1540574163026-643ea20ade25?auto=format&fit=crop&w=400&q=80"
                    alt="Sofa"
                    class="w-full h-72 md:h-80 object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="group cursor-pointer overflow-hidden rounded-[24px]">
                <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?auto=format&fit=crop&w=400&q=80"
                    alt="Cabinet"
                    class="w-full h-72 md:h-80 object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </section>

    <section
        class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div class="order-2 lg:order-1">
            <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?auto=format&fit=crop&w=800&q=80"
                alt="Wooden Cabinet" class="w-full h-[350px] md:h-[450px] object-cover rounded-[24px]">
        </div>
        <div class="order-1 lg:order-2 text-center lg:text-left">
            <h2 class="text-3xl md:text-4xl font-light text-brand-text mb-6">Curated with care</h2>
            <p class="text-brand-muted mb-5 leading-relaxed text-base md:text-lg">
                Every piece in our collection is carefully selected for its unique character, quality craftsmanship, and
                timeless design. We believe in bringing the warmth and authenticity of vintage decor into modern homes.
            </p>
            <p class="text-brand-muted mb-8 leading-relaxed text-base md:text-lg">
                Based in Berlin, we source authentic midcentury modern, vintage, and retro pieces that tell a story and
                add personality to your space.
            </p>
            <a href="#"
                class="inline-flex items-center justify-center bg-brand-dark text-white px-8 py-3.5 rounded-full font-medium hover:bg-slate-800 transition-all duration-300 shadow-md hover:shadow-lg">
                Learn More About Us <i class="fa-solid fa-arrow-right ml-3 text-sm"></i>
            </a>
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