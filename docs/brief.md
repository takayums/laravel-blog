# Brief Project Laravel Blog

### 1. About

Nama Project: Laravel Blog
Jenis Project: Web Application / Content Management System (CMS)
Platform: Web
Framework: Laravel
Target Pengguna: Admin, Author/Editor, dan Visitor
Status: Development

### 2. Latar Belakang

Project ini bertujuan untuk membangun platform blog yang memungkinkan pengguna mengakses dan membaca artikel, sementara admin atau author dapat mengelola konten secara terstruktur.

Sistem diharapkan memiliki tampilan yang responsif, performa yang baik, pengelolaan konten yang mudah, serta struktur aplikasi yang dapat dikembangkan di masa mendatang.

### 3. Tujuan Project

#### a. Tujuan Utama

- Membuat platform blog yang mudah digunakan.
- Memungkinkan admin mengelola artikel secara terpusat.
- Menyediakan pengalaman membaca yang nyaman bagi visitor.
- Menerapkan autentikasi dan authorization berbasis role.
- Membuat sistem yang SEO-friendly.
- Membuat arsitektur aplikasi yang mudah dikembangkan dan dipelihara.

#### b. Sukses Kriteria

- Visitor dapat menemukan dan membaca artikel dengan mudah.
- Admin dapat melakukan CRUD artikel.
- Artikel dapat dikelompokkan berdasarkan kategori dan tag.
- Sistem autentikasi berjalan dengan baik.
- Website responsive pada desktop dan mobile.
- URL artikel SEO-friendly.
- Data terlindungi melalui authentication, authorization, validation, dan security best practices.
- Aplikasi dapat di-deploy ke production.

### 4. Scope Project

#### a. In Scope

- Fitur yang termasuk dalam versi awal:
- Homepage
- Daftar artikel
- Detail artikel
- Search artikel
- Kategori
- Tag
- Author
- Authentication
- Dashboard admin
- CRUD artikel
- CRUD kategori
- CRUD tag
- Manajemen user
- Draft dan published article
- Featured article
- Pagination
- SEO metadata
- Responsive UI
- Image upload
- Comment system
- Basic analytics/statistics

#### b. Out of Scope

Fitur berikut tidak termasuk dalam MVP dan dapat dikembangkan pada fase berikutnya:

- Mobile application
- Subscription berbayar
- Membership/premium content
- Payment gateway
- Newsletter automation
- Advanced recommendation system
- AI-generated content
- Multi-language system
- Advanced analytics seperti Google Analytics dashboard internal

### 5. User Roles

#### a.Visitor

Visitor dapat:

- Melihat homepage.
- Melihat daftar artikel.
- Membaca artikel.
- Melihat kategori.
- Melihat tag.
- Melihat profil author.
- Melakukan pencarian.
- Memberikan komentar jika sistem mengharuskannya login.

#### b.Author

Author dapat:

- Login.
- Melihat dashboard.
- Membuat artikel.
- Mengedit artikel miliknya.
- Menyimpan artikel sebagai draft.
- Mengirim artikel untuk review.
- Melihat status artikel.

#### c. Editor

Editor dapat:

- Mengelola artikel.
- Mengedit artikel author.
- Melakukan review artikel.
- Publish/unpublish artikel.
- Mengelola kategori dan tag.

#### d. Admin

Admin memiliki akses penuh untuk:

- Mengelola user.
- Mengelola role.
- Mengelola artikel.
- Mengelola kategori.
- Mengelola tag.
- Mengelola komentar.
- Mengelola pengaturan website.
- Melihat statistik.

### 6. Fitur Utama

#### a. Homepage

- Homepage minimal memiliki:
- Hero section / featured article.
- Latest articles.
- Popular articles.
- Category navigation.
- Search.
- Author information.
- Newsletter section jika diperlukan.
- Footer.

#### b. Article Listing

Halaman daftar artikel harus menyediakan:

- Thumbnail.
- Judul artikel.
- Excerpt.
- Author.
- Published date.
- Category.
- Reading time.
- Pagination.
- Filter berdasarkan kategori/tag.
- Contoh URL:/blog, /blog?page=2

#### c. Article Detail

Halaman artikel minimal memiliki:

- Judul.
- Featured image.
- Author.
- Published date.
- Updated date.
- Category.
- Tags.
- Reading time.
- Article content.
- Share button.
- Related articles.
- Previous/next article.
- Comment section.
- Contoh URL:/blog/mengenal-laravel-untuk-pemula, Slug harus unik dan SEO-friendly.

### 7. Management

#### a. Blog

Admin/author dapat membuat artikel dengan field:

- Title
- Slug
- Excerpt
- Content
- Featured image
- Category
- Tags
- Author
- Status
- Published at
- SEO title
- SEO description
- SEO keywords
- Canonical URL
- Featured flag
- Article Status

Minimal terdapat:

- Draft
- Pending Review
- Published
- Archived

#### b. Category

Setiap artikel dapat memiliki satu kategori utama.

Field kategori:

- Name
- Slug
- Description
- Image/icon jika diperlukan
- Status

Contoh: Technology, Laravel, Programming, Design, Business

#### c. Tag

Artikel dapat memiliki banyak tag.

Field:

- Name
- Slug

Contoh: Laravel, PHP, MySQL, Backend, Web Development
Relasi: Article belongsToMany Tag

#### d. User

User memiliki data:

- Name
- Email
- Password
- Avatar
- Bio
- Role
- Status
- Role: Admin, Editor, Visitor

Halaman author: /author/{username}
Menampilkan:

- Avatar
- Nama
- Bio
- Social links
- Daftar artikel author

### 8. Authentication

Authentication minimal meliputi:

- Login
- Logout
- Register jika diperlukan
- Forgot password
- Reset password
- Email verification jika diperlukan
- Remember me
- Authorization menggunakan role/permission.

### 9. Search

Search harus dapat mencari artikel berdasarkan:

- Title
- Content
- Excerpt
- Tags
- Category
- Contoh: /search?q=laravel

### 10. Admin Dashboard

Dashboard menampilkan statistik seperti:

- Total articles
- Published articles
- Draft articles
- Total users
- Total comments
- Views
- Popular articles

### 11. Databases Design

Entity Utama

- User
- Role
- Post
- Category
- Tag

### 12. Relasi Databases

#### a. User

- hasMany Article

#### b. Article

- belongsTo User
- belongsTo Category
- belongsToMany Tags

#### c. Category

- hasMany Article

#### d. Tag

- belongsToMany Article

### 13. Stack

- Laravel
- PHP
- MYSQL
- Laravel Eloquent
- Laravel Validation
- Laravel Blade
- Laravel Gate

### 14. MVP

Untuk mempercepat development, MVP dapat dibatasi menjadi:

a. Public

- Homepage.
- Article listing.
- Article detail.
- Category.
- Tag.
- Search.
- Author page.

b. Admin

- Login.
- Dashboard.
- Article CRUD.
- Category CRUD.
- Tag CRUD.
- User management.
- Publish/draft.

c. Technical

- Authentication.
- Authorization.
- Validation.
- Responsive UI.
- SEO basic.
- Pagination.
- Testing dasar.
- Comment system, analytics lanjutan, notification, dan fitur tambahan dapat dimasukkan ke fase berikutnya.

### 15. Pertanyaan2

Sebelum coding dimulai, beberapa keputusan berikut perlu ditetapkan:

- Siapa target audience blog?
- Apakah blog hanya memiliki satu author atau multi-author?
- Apakah visitor harus login untuk berkomentar?
- Apakah komentar membutuhkan moderation?
- Apakah author dapat langsung publish?
- Apakah diperlukan Editor?
- Apakah artikel dapat dijadwalkan?
- Apakah diperlukan autosave?
- Apakah blog membutuhkan API?
- Apakah menggunakan Blade, Livewire, atau Inertia?
- Apakah menggunakan MySQL atau PostgreSQL?
- Di mana image akan disimpan?
- Apakah membutuhkan CDN?
- Apakah membutuhkan newsletter?
- Apakah SEO menjadi requirement utama?
- Apakah diperlukan analytics?
- Berapa estimasi jumlah artikel dan visitor?
- Apakah ada kebutuhan multi-language?
- Apa target hosting/infrastructure?
- Apa target deadline?
- Siapa yang bertanggung jawab atas content?
- Siapa yang melakukan QA dan approval?
