# Rent A Car API

Bu proje, Laravel 12 kullanılarak geliştirilen basit bir Rent A Car API uygulamasıdır. API, araçların listelenmesi, eklenmesi, güncellenmesi ve silinmesini sağlar.

## 🚀 Kurulum

### 1️⃣ Laravel Projesini Klonlayın
```sh
git clone <repo-link>
cd rentacar
```

### 2️⃣ Bağımlılıkları Yükleyin
```sh
composer install
```

### 3️⃣ Çevre Değişkenlerini Ayarlayın
```sh
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Veritabanını Kurun
**SQLite Kullanıyorsanız:**
```sh
touch database/database.sqlite
```
**.env Dosyanızda Şu Ayarları Yapın:**
```ini
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```
**Migration Çalıştırın:**
```sh
php artisan migrate
```

### 5️⃣ Sunucuyu Çalıştırın
```sh
php artisan serve
```

---

## 📌 API Kullanımı

| HTTP Method | Endpoint      | Açıklama               |
|------------|--------------|------------------------|
| GET        | /api/cars    | Tüm araçları listeler  |
| GET        | /api/cars/{id} | Belirli bir aracı getir |
| POST       | /api/cars    | Yeni bir araç ekler   |
| PUT        | /api/cars/{id} | Mevcut bir aracı günceller |
| DELETE     | /api/cars/{id} | Bir aracı siler |

### 🛠 Örnek API İstekleri
**Araç Listesi Al**
```sh
curl -X GET http://localhost/api/cars
```

**Yeni Araç Ekle**
```sh
curl -X POST http://localhost/api/cars \
     -H "Content-Type: application/json" \
     -d '{"brand": "Toyota", "model": "Corolla", "year": 2022}'
```

**Araç Güncelle**
```sh
curl -X PUT http://localhost/api/cars/1 \
     -H "Content-Type: application/json" \
     -d '{"brand": "Honda"}'
```

**Araç Sil**
```sh
curl -X DELETE http://localhost/api/cars/1
```

---

## ✅ Testler
Bu projede **PestPHP** ile testler yazılmıştır.

Testleri çalıştırmak için şu komutu kullanın:
```sh
php artisan test
```

---

## 📌 Teknolojiler
- Laravel 12
- SQLite
- PestPHP (Testler)
- Laravel Sanctum (Kimlik Doğrulama - gelecek)

---

## 📌 Geliştirme Planı
- ✅ Araç CRUD İşlemleri
- 🚧 Kiralama Sistemi (Geliştiriliyor)
- 🔜 Kullanıcı Kimlik Doğrulama
- 🔜 Admin Paneli

---

### 📢 Katkıda Bulunmak
Katkıda bulunmak isterseniz **pull request** açabilirsiniz.

🔥 **İyi kodlamalar Tosbik!** 😎

