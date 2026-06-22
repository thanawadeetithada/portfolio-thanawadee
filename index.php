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
                class="text-4xl md:text-5xl lg:text-[54px] font-light text-brand-text leading-[1.1] mb-6 tracking-tight">
                <br class="hidden lg:block"> Hi, I'm Thanawadee (Baifern)
            </h1>
            <p class="text-brand-muted text-base md:text-lg mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                I build websites that don't just look stunning, but perform flawlessly. Bridging the gap between
                beautiful UI and seamless UX.
            </p>
        </div>

        <div class="order-1 lg:order-2 flex justify-center items-center w-full">
            <?php include 'codeui.php'; ?>
        </div>

    </section>

    <section class="max-w-[1400px] mx-auto px-6 md:px-12 lg:px-24 py-16 md:py-24" style="padding-top: 0px;">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-light text-brand-text mb-3">Performance</h2>
            <p class="text-brand-muted text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                Transforming static layouts into living, interactive experiences that adapt to your users in real-time.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-6">
            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บไซต์จองคิว</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/book.png"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="http://booking-appointment.gt.tc/" target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/bookad.png" alt="แอดมิน"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="http://booking-appointment.gt.tc/data.php" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                แอดมิน
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บไซต์จองที่พัก</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/pha.png" alt="Google Sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://hotel.xo.je/login.php?email=thanawadeetit@gmail.com&password=12345"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/pha.png"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://hotel.xo.je/login.php?email=baifern24260@gmail.com&password=12345"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-1 rounded-xl transition-colors truncate">
                                แอดมิน
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บไซต์ติดตามสถานะเอกสาร</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/track.png"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://document-tracking.xo.je?email=baifern24260@gmail.com&password=12345"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/track.png"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://document-tracking.xo.je?email=thanawadee.titha@gmail.com&password=12345"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                แอดมิน
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-6">
            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บไซต์สแกนสั่งอาหาร</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/QRCode.png" alt="QR Code โต๊ะ"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://scan-order.xo.je?username=user&password=12345" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                QR Code โต๊ะ
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/Scan.png" alt="แอดมิน"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://scan-order.xo.je?username=user&password=12345" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                แอดมิน
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บเก็บข้อมูล</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/premiumn.png" alt="Google Sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="http://app-premium.xo.je/" target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/premiumnad.png" alt="หน้าบันทึกข้อมูล"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="http://app-premium.xo.je/login.php?username=admin&password=123" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-1 rounded-xl transition-colors truncate">
                                แอดมิน
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บแสดงสินค้า-บริษัท/ร้านค้า
                </h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/1product2.png" alt="ระบบงานที่ 1"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://compay-web.xo.je/" target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/product2.png" alt="ระบบงานที่ 2"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://compay-web.xo.je/login.php?email=thanawadeetest@gmail.com&password=123"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                แอดมิน
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-6">
            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เช็คสถานะสินค้า</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/googlesheet.png" alt="google sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://docs.google.com/spreadsheets/d/1AlfMbBLtSQ1MCrW8RDfpSqVDkjcgbSG1zKRMaAPInCA/edit?gid=1316353460#gid=1316353460"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                google sheet
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/googlesheet1.png" alt="ลูกค้า"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://script.google.com/macros/s/AKfycbw89HHxNQkqmc2xrQbJtbhq7wDfrK4pS6z7R6AC-bgyF_eNumxZMNB8jRSD2IGB_vqT/exec"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">CRUD + Google Sheet</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/Scan2.png" alt="Google Sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://docs.google.com/spreadsheets/d/1NIqS49gu6uiEIaSuJhnTifvQd-eQvmkO4PwEZjdBLkY/edit?gid=0#gid=0"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                Google Sheet
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/Scan1.png" alt="หน้าบันทึกข้อมูล"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://script.google.com/macros/s/AKfycbxaakyPZVe7Q4bQJ2_Ciel66uA1jBloRIAsaDMNRnMsItyCv79RsLIHQ7ReA4Qz0OtH/exec"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-1 rounded-xl transition-colors truncate"
                                title="หน้าบันทึกข้อมูล">
                                บันทึกข้อมูล
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เช็คสถานะสินค้า</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/googlesheet.png" alt="Google Sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://docs.google.com/spreadsheets/d/1ZIJEN5x1iS0G93Q8CrR5L-PhV323nMfik-yIN7u4dK4/edit?gid=1316353460#gid=1316353460"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                google sheet
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/googlesheet2.png" alt="หน้าบันทึกข้อมูล"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://script.google.com/macros/s/AKfycbw2ZifJ_diKOHcdMfsagC3qQkfgfMyyIUWIQuX1vuJp1rXzpRtp0Lf0hWT9HbEZgZvCFA/exec"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-1 rounded-xl transition-colors truncate">
                                ลูกค้า
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-6">
            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บไซต์รายรับ-รายจ่าย</h3>
                <div class="flex justify-center">
                    <div
                        class="w-full max-w-[180px] group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/Income.png" alt="google sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://finance-web.xo.je/finance-main/" target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                รายรับ-รายจ่าย
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">เว็บไซต์เช็คสต๊อก</h3>
                <div class="flex justify-center">
                    <div
                        class="w-full max-w-[180px] group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/stock.png" alt="เว็บไซต์เช็คสต๊อก"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://02-web-stock.liveblog365.com?username=admin&password=12345" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                เช็คสต๊อก
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">
                    เว็บไซต์บันทึกคะแนน/เกรดแต่ละวิชา</h3>
                <div class="flex justify-center">
                    <div
                        class="w-full max-w-[180px] group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/record_stu.png" alt="Google Sheet"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://registrar-web.xo.je/" target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                บันทึกข้อมูล
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-6">
            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">สต๊อกสินค้า</h3>
                <div class="grid grid-cols-2 gap-3 sm:gap-4">
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/glide.png" alt="Glide APP"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://readystock-c99w.glide.page" target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                Gilde APP
                            </a>
                        </div>
                    </div>
                    <div
                        class="group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/app.png" alt="APP SHEET"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://www.appsheet.com/start/74592dfd-6940-4939-aab8-f5973de50ed6"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-1 rounded-xl transition-colors truncate"
                                title="APP SHEET">
                                APP SHEET
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-200 shadow-sm p-4 sm:p-5"
                style=" background-color: #a9b5dfc2;border: 10px solid #a9b5dfc2;">
                <h3 class="text-base sm:text-lg font-bold text-gray-800 text-center mb-4">DAILY PLANNER</h3>
                <div class="flex justify-center">
                    <div
                        class="w-full max-w-[180px] group flex flex-col overflow-hidden rounded-[16px] bg-gray-50 hover:shadow-md transition-shadow">
                        <div class="overflow-hidden">
                            <img src="img-web/daliy.png" alt="DAILY PLANNER"
                                class="w-full h-20 sm:h-24 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-2 flex flex-col flex-grow">
                            <a href="https://script.google.com/macros/s/AKfycbxY1bU7bUY94DjtOem9RPNpx5GSRTm2Yu4Ft1y4tgW7uCnd9fpwe5BI-gqoN4Bkllr8/exec"
                                target="_blank" rel="noopener noreferrer"
                                class="mt-auto block text-center w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium py-1.5 px-2 rounded-xl transition-colors">
                                DAILY PLANNER
                            </a>
                        </div>
                    </div>
                </div>
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
                <h4 class="text-xs font-bold text-brand-text mb-5 tracking-[0.15em] uppercase">PAGES</h4>
                <ul class="space-y-3 text-sm text-brand-muted">
                    <li><a href="index.php" class="hover:text-brand-dark transition-colors">Home</a></li>
                    <li><a href="cv.php" class="hover:text-brand-dark transition-colors hidden">CV</a></li>
                    <li><a href="contact.php" class="hover:text-brand-dark transition-colors">Contact</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left">
                <h4 class="text-xs font-bold text-brand-text mb-5 tracking-[0.15em] uppercase">SERVICES</h4>
                <ul class="space-y-3 text-sm text-brand-muted">
                    <li><a href="#" class="hover:text-brand-dark transition-colors">React / Angular / Vue</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">Flutter</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">UI/UX Design</a></li>
                    <li><a href="#" class="hover:text-brand-dark transition-colors">Node.js / PHP</a></li>
                </ul>
            </div>
            <div class="text-center md:text-left">
                <h4 class="text-xs font-bold text-brand-text mb-5 tracking-[0.15em] uppercase">Contact</h4>
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