<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Web Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        'school-green': '#134E4A', // Hijau identitas
                        'school-yellow': '#FFC400', // Kuning aksen
                        'school-dark': '#0f3f3c',
                    }
                }
            }
        }
    </script>
</head>
<body class="h-screen w-full flex overflow-hidden bg-gray-50">

    <div class="hidden lg:flex w-1/2 bg-school-green relative flex-col justify-between p-16 text-white overflow-hidden">
        
        <div class="absolute inset-0 bg-gradient-to-b from-school-green to-school-dark opacity-90"></div>
        
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 32px 32px;"></div>

        <div class="z-10 flex items-center gap-3">
            <div class="w-10 h-10 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg flex items-center justify-center text-school-yellow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <span class="font-bold text-lg tracking-wide text-white/90">ADMIN PANEL</span>
        </div>

        <div class="z-10 mb-8">
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-5">
                Kelola Website <br>
                <span class="text-school-yellow">SD Negeri 1</span>
            </h1>
            <p class="text-gray-300 text-lg font-light leading-relaxed max-w-md">
                Dashboard pengelolaan profil sekolah, berita kegiatan, dan galeri prestasi dalam satu sistem terpusat.
            </p>
        </div>
        
        <div class="z-10 flex items-center gap-2 text-xs text-gray-400 font-medium">
            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
            System Operational
        </div>
    </div>

    <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
        <div class="w-full max-w-[400px] bg-white p-10 rounded-2xl shadow-xl border border-gray-100">
            
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Login Administrator</h2>
                <p class="text-gray-500 text-sm mt-2">Masuk untuk mulai mengelola konten.</p>
            </div>

            <form class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5" for="email">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-school-green focus:border-transparent focus:bg-white transition-all duration-200" 
                        placeholder="admin@sdnegeri1.sch.id"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5" for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        class="block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-gray-900 text-sm focus:outline-none focus:ring-2 focus:ring-school-green focus:border-transparent focus:bg-white transition-all duration-200" 
                        placeholder="••••••••"
                    >
                </div>

                <button 
                    type="submit" 
                    class="w-full mt-2 bg-school-green text-white font-bold text-sm py-3.5 px-4 rounded-lg hover:bg-school-dark hover:shadow-lg transform active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-2"
                >
                    MASUK DASHBOARD
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                 <p class="text-xs text-gray-400">&copy; 2026 CMS Sekolah v1.0</p>
            </div>

        </div>
    </div>

</body>
</html>