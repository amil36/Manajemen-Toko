<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Manajemen Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.4s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: 0 },
                            '100%': { opacity: 1 },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: 0 },
                            '100%': { transform: 'translateY(0)', opacity: 1 },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .sidebar-item {
            transition: all 0.2s ease;
        }
        .sidebar-item:hover {
            transform: translateX(5px);
        }
        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #e2e8f0;
        }
        .stat-card:hover {
            border-color: #93c5fd;
        }
        .glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.1);
        }
        .glow:hover {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.2);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-primary-800 to-primary-900 text-white shadow-2xl">
            <div class="p-6 border-b border-primary-700">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-boxes text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold">Manajemen Barang</h1>
                        <p class="text-primary-300 text-sm">Inventory System</p>
                    </div>
                </div>
            </div>
            <nav class="mt-6 px-4">
                <a href="#" class="flex items-center px-4 py-3 mb-2 bg-white/10 rounded-lg sidebar-item glow">
                    <i class="fas fa-tachometer-alt mr-3 text-primary-300"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 mb-2 text-primary-200 hover:bg-white/10 hover:text-white rounded-lg sidebar-item transition">
                    <i class="fas fa-box mr-3"></i>
                    <span>Manajemen Inventori</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 mb-2 text-primary-200 hover:bg-white/10 hover:text-white rounded-lg sidebar-item transition">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    <span>Pengadaan Barang</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 mb-2 text-primary-200 hover:bg-white/10 hover:text-white rounded-lg sidebar-item transition">
                    <i class="fas fa-warehouse mr-3"></i>
                    <span>Pengelolaan Stok</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 mb-2 text-primary-200 hover:bg-white/10 hover:text-white rounded-lg sidebar-item transition">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span>Laporan</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 mb-2 text-primary-200 hover:bg-white/10 hover:text-white rounded-lg sidebar-item transition">
                    <i class="fas fa-cog mr-3"></i>
                    <span>Pengaturan</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-200 sticky top-0 z-10">
                <div class="flex justify-between items-center p-4">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none lg:hidden mr-4">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">Dashboard Manajemen Barang</h2>
                            <p class="text-sm text-gray-500">Monitor dan kelola inventori Anda</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-primary-600 transition">
                            <i class="fas fa-bell text-lg"></i>
                            <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
                        </button>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-blue-600 flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-user"></i>
                            </div>
                            <span class="text-gray-700 font-medium">Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="stat-card p-6 rounded-2xl shadow-sm card-hover glow animate-fade-in">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Total Produk</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1">1,248</p>
                                <p class="text-green-500 text-xs mt-2 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 12% dari bulan lalu
                                </p>
                            </div>
                            <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600">
                                <i class="fas fa-boxes text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card p-6 rounded-2xl shadow-sm card-hover glow animate-fade-in" style="animation-delay: 0.1s;">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Stok Tersedia</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1">8,450</p>
                                <p class="text-green-500 text-xs mt-2 flex items-center">
                                    <i class="fas fa-check-circle mr-1"></i> Aman
                                </p>
                            </div>
                            <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-green-600">
                                <i class="fas fa-warehouse text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card p-6 rounded-2xl shadow-sm card-hover glow animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Stok Rendah</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1">24</p>
                                <p class="text-yellow-500 text-xs mt-2 flex items-center">
                                    <i class="fas fa-exclamation-triangle mr-1"></i> Perlu perhatian
                                </p>
                            </div>
                            <div class="w-14 h-14 bg-yellow-100 rounded-xl flex items-center justify-center text-yellow-600">
                                <i class="fas fa-exclamation-triangle text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card p-6 rounded-2xl shadow-sm card-hover glow animate-fade-in" style="animation-delay: 0.3s;">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm font-medium">Pesanan Masuk</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1">42</p>
                                <p class="text-blue-500 text-xs mt-2 flex items-center">
                                    <i class="fas fa-spinner mr-1"></i> Proses
                                </p>
                            </div>
                            <div class="w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center text-red-600">
                                <i class="fas fa-truck text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Features Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Manajemen Inventori -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover glow animate-slide-up">
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-5 text-white">
                            <h3 class="font-semibold text-lg flex items-center">
                                <i class="fas fa-box mr-3"></i>
                                Manajemen Inventori
                            </h3>
                            <p class="text-blue-100 text-sm mt-1">Kelola produk dan kategori</p>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-box text-blue-500 mr-2 text-sm"></i>
                                        Master Produk
                                    </span>
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">1,248 item</span>
                                </div>
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-tags text-blue-500 mr-2 text-sm"></i>
                                        Kategori Produk
                                    </span>
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">4 kategori</span>
                                </div>
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-exclamation-triangle text-yellow-500 mr-2 text-sm"></i>
                                        Stok Minimum
                                    </span>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">24 item</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-warehouse text-green-500 mr-2 text-sm"></i>
                                        Multi-Gudang
                                    </span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3 gudang</span>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition flex items-center">
                                    <i class="fas fa-plus mr-2"></i> Tambah Produk
                                </button>
                                <button class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-lg text-sm font-medium transition">
                                    <i class="fas fa-list mr-1"></i> Lihat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Pengadaan Barang -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover glow animate-slide-up" style="animation-delay: 0.1s;">
                        <div class="bg-gradient-to-r from-green-600 to-green-700 p-5 text-white">
                            <h3 class="font-semibold text-lg flex items-center">
                                <i class="fas fa-shopping-cart mr-3"></i>
                                Pengadaan Barang
                            </h3>
                            <p class="text-green-100 text-sm mt-1">Kelola pesanan dan pemasok</p>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-file-invoice text-green-500 mr-2 text-sm"></i>
                                        Purchase Order
                                    </span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">15 aktif</span>
                                </div>
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-truck text-green-500 mr-2 text-sm"></i>
                                        Pemasok
                                    </span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">28 aktif</span>
                                </div>
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-box-open text-green-500 mr-2 text-sm"></i>
                                        Penerimaan Barang
                                    </span>
                                    <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">42 bulan ini</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-dollar-sign text-green-500 mr-2 text-sm"></i>
                                        Nilai Pengadaan
                                    </span>
                                    <span class="text-green-600 font-semibold">Rp 2.45M</span>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition flex items-center">
                                    <i class="fas fa-plus mr-2"></i> Buat PO
                                </button>
                                <button class="border border-green-600 text-green-600 hover:bg-green-50 px-4 py-2 rounded-lg text-sm font-medium transition">
                                    <i class="fas fa-truck mr-1"></i> Terima
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Pengelolaan Stok -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover glow animate-slide-up" style="animation-delay: 0.2s;">
                        <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                            <h3 class="font-semibold text-lg flex items-center">
                                <i class="fas fa-warehouse mr-3"></i>
                                Pengelolaan Stok
                            </h3>
                            <p class="text-purple-100 text-sm mt-1">Transfer dan mutasi stok</p>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4 mb-6">
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-sync text-purple-500 mr-2 text-sm"></i>
                                        Stok Opname
                                    </span>
                                    <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">3 gudang</span>
                                </div>
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-exchange-alt text-purple-500 mr-2 text-sm"></i>
                                        Transfer Antar Gudang
                                    </span>
                                    <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">18 bulan ini</span>
                                </div>
                                <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-undo text-purple-500 mr-2 text-sm"></i>
                                        Retur ke Supplier
                                    </span>
                                    <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">5 bulan ini</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700 flex items-center">
                                        <i class="fas fa-arrows-alt text-purple-500 mr-2 text-sm"></i>
                                        Mutasi Stok
                                    </span>
                                    <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">156 bulan ini</span>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition flex items-center">
                                    <i class="fas fa-sync mr-2"></i> Stok Opname
                                </button>
                                <button class="border border-purple-600 text-purple-600 hover:bg-purple-50 px-4 py-2 rounded-lg text-sm font-medium transition">
                                    <i class="fas fa-exchange-alt mr-1"></i> Transfer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-2xl shadow-lg p-6 card-hover glow">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-semibold text-lg text-gray-800">Aktivitas Terbaru</h3>
                        <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                            <i class="fas fa-sync mr-1"></i> Segarkan
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-4">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">Penambahan produk baru</p>
                                <p class="text-sm text-gray-500">Intel Core i7-12700K ditambahkan ke inventori</p>
                            </div>
                            <span class="text-xs text-gray-400">2 jam yang lalu</span>
                        </div>
                        <div class="flex items-center p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">Penerimaan barang</p>
                                <p class="text-sm text-gray-500">120 unit monitor dari supplier ABC</p>
                            </div>
                            <span class="text-xs text-gray-400">4 jam yang lalu</span>
                        </div>
                        <div class="flex items-center p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 mr-4">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">Peringatan stok minimum</p>
                                <p class="text-sm text-gray-500">Mouse Logitech MX518 stok tinggal 2 unit</p>
                            </div>
                            <span class="text-xs text-gray-400">6 jam yang lalu</span>
                        </div>
                        <div class="flex items-center p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 mr-4">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-800">Transfer stok</p>
                                <p class="text-sm text-gray-500">50 unit keyboard dipindahkan ke gudang B</p>
                            </div>
                            <span class="text-xs text-gray-400">8 jam yang lalu</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>