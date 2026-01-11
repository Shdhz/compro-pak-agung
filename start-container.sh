#!/bin/bash

# Beritahu kita di Logs kalau proses mulai
echo "--- Memulai Proses Deployment ---"

# Jalankan Migrasi Fresh & Seed (Hati-hati: Data lama terhapus!)
# Kita pakai --force karena di mode Production
echo "--- Menjalankan Migrate Fresh & Seed ---"
php artisan migrate:fresh --seed --force

# Bersihkan cache biar settingan update
echo "--- Membersihkan Cache ---"
php artisan config:clear
php artisan route:clear

# Jalankan Apache (Agar web tetap nyala)
echo "--- Menjalankan Apache Server ---"
apache2-foreground