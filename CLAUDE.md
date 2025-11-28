# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Bagisto is a Laravel 11-based open source e-commerce framework. It uses a modular package architecture with 33 packages in `packages/Webkul/`.

**Documentation:** https://devdocs.bagisto.com/

## Common Commands

### Development
```bash
composer install && npm install   # Install dependencies
php artisan serve                 # Start Laravel dev server
npm run dev                       # Start Vite dev server (run alongside artisan serve)
npm run build                     # Build frontend assets for production
```

### Testing
```bash
vendor/bin/pest                                    # Run all Pest tests (preferred)
vendor/bin/phpunit                                 # Run all PHPUnit tests
./vendor/bin/paratest                              # Run tests in parallel

# Run specific test suites
vendor/bin/phpunit --testsuite "Admin Feature Test"
vendor/bin/phpunit --testsuite "Core Unit Test"
vendor/bin/phpunit --testsuite "DataGrid Unit Test"
vendor/bin/phpunit --testsuite "Shop Feature Test"

# Run specific test file
vendor/bin/pest packages/Webkul/Admin/tests/Feature/ExampleTest.php
```

Test suites are defined in `phpunit.xml`:
- Admin Feature Tests: `packages/Webkul/Admin/tests/Feature`
- Core Unit Tests: `packages/Webkul/Core/tests/Unit`
- DataGrid Unit Tests: `packages/Webkul/DataGrid/tests/Unit`
- Shop Feature Tests: `packages/Webkul/Shop/tests/Feature`

### Code Style
```bash
./vendor/bin/pint                        # Fix code style (Laravel Pint)
./vendor/bin/pint --test                 # Check code style without fixing
./vendor/bin/pint app/                   # Fix specific directory
./vendor/bin/pint app/Http/MyFile.php    # Fix specific file
```

Configuration in `pint.json` uses Laravel preset with alignment rules for `=>` operators.

### Database
```bash
php artisan migrate                      # Run migrations
php artisan migrate:fresh --seed         # Reset database and seed
php artisan db:seed                      # Run seeders only
```

### Cache & Optimization
```bash
php artisan optimize:clear               # Clear all caches
php artisan config:cache                 # Cache config files
php artisan route:cache                  # Cache routes
php artisan view:cache                   # Cache views
```

### Installation
```bash
composer install && npm install          # Install all dependencies
php artisan storage:link                 # Create storage symlink
php artisan vendor:publish --all         # Publish vendor assets
npm run build                            # Build frontend assets
```

## Architecture

### Package Structure

All domain logic lives in `packages/Webkul/`. The framework uses **Konekt Concord** for modular package management - all modules must be registered in `config/concord.php`.

**Core packages:**
- `Admin` - Admin panel interface
- `Shop` - Customer-facing storefront
- `Core` - Framework foundations, base models, repositories, helpers

**Key domain packages:**
- `Product`, `Category`, `Attribute` - Catalog management
- `Customer`, `User` - Authentication and user management
- `Checkout`, `Cart`, `Sales` - Order processing
- `Payment`, `Shipping`, `Tax` - Commerce operations
- `Inventory` - Stock management
- `Marketing`, `CMS`, `Notification` - Marketing features
- `DataGrid` - Reusable grid component system
- `MagicAI` - OpenAI integration

Each package follows this structure:
```
packages/Webkul/{PackageName}/src/
├── Http/           # Controllers, Middleware, Requests
├── Models/         # Eloquent models
├── Repositories/   # Data access layer (uses Prettus L5 Repository pattern)
├── Services/       # Business logic layer
├── Database/       # Migrations and seeders
├── Resources/      # Views, lang files, assets
└── Providers/
    └── ModuleServiceProvider.php  # Package registration
```

**Repository Pattern:** All data access goes through repositories (Prettus L5 Repository). Never query models directly in controllers - use repositories for consistency and maintainability.

### Key Integrations
- **Konekt Concord** - Package management (config in `concord.php`)
- **Elasticsearch** - Product search (config in `elasticsearch.php`)
- **OpenAI** - AI features via MagicAI package (config in `openai.php`)
- **Laravel Octane** - High-performance request handling

### Frontend Architecture
- **Build tool:** Vite with Laravel Vite Plugin
- **Package-specific builds:** Admin and Shop packages have separate `vite.config.js` and `tailwind.config.js`
- **Output:** Compiled assets go to `public/build/`
- **Development:** Run `npm run dev` for hot module replacement (HMR) alongside `php artisan serve`
- **Production:** Run `npm run build` before deployment

**Important:** Do NOT commit compiled assets (`public/build/`) to git - they are generated during deployment.

## Code Standards

- **Coding style:** PSR-2 (enforced via Laravel Pint)
- **Autoloading:** PSR-4
- **Framework conventions:** Follow Laravel best practices
- **Documentation:** PHPDoc comments for all public methods
- **Version control:** Never commit compiled assets or `.env` files

## Environment Configuration

- **Admin URL:** `APP_ADMIN_URL` in `.env` (default: `admin`)
- **Full page caching:** `RESPONSE_CACHE_ENABLED` (default: `true`)
- **Queue driver:** Defaults to `sync`, supports `redis`, `database`
- **Locale:** Configured via `APP_LOCALE` (this project uses `tr` for Turkish)
- **Currency:** `APP_CURRENCY` (this project uses `TRY`)
- **Timezone:** `APP_TIMEZONE` (this project uses `Europe/Istanbul`)

## Requirements

- **PHP:** 8.2 or higher
- **PHP Extensions:** calendar, curl, intl, mbstring, openssl, pdo, pdo_mysql, tokenizer
- **Database:** MySQL 5.7+ or MariaDB 10.3+
- **Node.js:** For asset compilation (Vite)

## Development Guidelines (Geliştirici Kuralları)

### İletişim Dili
- Kullanıcı ile iletişim: **Türkçe** (Türkçe karakterler olduğu gibi kullanılacak - ş, ğ, ü, ö, ç, ı, İ)
- Kod içindeki yorumlar: **Türkçe**
- Değişken, fonksiyon, class isimleri: **İngilizce** (global standart)
- Commit mesajları: **Türkçe**

**UYARI:** Türkçe karakterleri ASLA ASCII karakterlerine çevirme!

### Kod Prensipleri
Her geliştirmede aşağıdaki prensiplere uyulmalıdır:
- **SOLID** - Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion
- **DRY** - Don't Repeat Yourself
- **KISS** - Keep It Simple, Stupid
- **YAGNI** - You Aren't Gonna Need It

### Senior Developer Çalışma Yaklaşımı

**KRİTİK:** Bir Sr Developer gibi davran! Her istekte aşağıdaki adımları izle:

1. **Sorgulama ve Analiz**
   - Gelen isteği tarafsızca değerlendir
   - Yanlış veya suboptimal istekleri kabul etme
   - Mevcut kod ve mimariyi analiz et
   - SOLID, DRY, KISS, YAGNI prensipleri açısından değerlendir

2. **Danışma (AskUserQuestion tool kullan)**
   - CLI üzerinden seçenekler sun
   - Analiz sonuçlarını paylaş
   - Alternatif çözümleri öner
   - "Doğru yaklaşım X olmalı, ama Y istediniz. Nasıl ilerleyelim?" yaklaşımı
   - Kritik kararlarda mutlaka kullanıcıya danış

3. **Uygulama**
   - Onaydan sonra uygula
   - Her adımı TodoWrite ile takip et
   - Doğrulama yap (testler, linter, vb.)

4. **Doğrulama ve Raporlama**
   - Yapılan değişiklikleri doğrula
   - Sonuçları raporla

### Yasak Uygulamalar
- **Emoji kullanımı** (kodda, yorumlarda, iletişimde, commit mesajlarında)
- Gereksiz over-engineering
- Test edilmemiş kod commit etme
- Mevcut mimariye uymayan yapılar oluşturma
- Türkçe karakterleri ASCII'ye çevirme
- Kullanıcıya danışmadan kritik kararlar alma
- İstekleri körü körüne kabul etme

### Senior Developer Öncelikleri
- **Kod kalitesi > Hız:** Doğru yazmak, hızlı yazmaktan önemli
- **Sorgulamak zorunludur:** Her istek "neden?" sorusuyla başlar
- **Mimari tutarlılık:** Mevcut yapıya uygun geliştirme
- **Proaktif yaklaşım:** Potansiyel sorunları önceden tespit et ve bildir
- **Alternatif sunma:** Birden fazla çözüm yolu sun ve tartış
