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
vendor/bin/pest                   # Run Pest tests (preferred)
vendor/bin/phpunit                # Run PHPUnit tests
./vendor/bin/paratest             # Run tests in parallel
```

Test suites are defined in `phpunit.xml`:
- Admin Feature Tests: `packages/Webkul/Admin/tests/Feature`
- Core Unit Tests: `packages/Webkul/Core/tests/Unit`
- DataGrid Unit Tests: `packages/Webkul/DataGrid/tests/Unit`
- Shop Feature Tests: `packages/Webkul/Shop/tests/Feature`

### Code Style
```bash
./vendor/bin/pint                 # Fix code style (Laravel Pint)
```

Configuration in `pint.json` uses Laravel preset with alignment rules.

## Architecture

### Package Structure

All domain logic lives in `packages/Webkul/`. Core packages:
- `Admin` - Admin panel interface
- `Shop` - Customer-facing storefront
- `Core` - Framework foundations

Each package follows this structure:
```
packages/Webkul/{PackageName}/src/
├── Http/           # Controllers, Middleware, Requests
├── Models/         # Eloquent models
├── Repositories/   # Data access layer (uses Prettus L5 Repository)
├── Services/       # Business logic
├── Database/       # Migrations and seeders
└── {Package}ServiceProvider.php
```

### Key Integrations
- **Konekt Concord** - Package management (config in `concord.php`)
- **Elasticsearch** - Product search (config in `elasticsearch.php`)
- **OpenAI** - AI features via MagicAI package (config in `openai.php`)
- **Laravel Octane** - High-performance request handling

### Frontend
- Vite with Laravel Vite Plugin
- Each package (Admin, Shop) has its own `vite.config.js` and `tailwind.config.js`
- Assets compile to `public/build/`

## Code Standards

- Follow PSR-2 coding standards and PSR-4 autoloading
- Use Laravel conventions
- PHPDoc comments with proper formatting
- Do NOT commit compiled assets (CSS/JS in `public/build/`)

## Environment

- Admin panel URL: configured via `APP_ADMIN_URL` (default: `admin`)
- Full page caching: `RESPONSE_CACHE_ENABLED` in `.env`
- Queue: defaults to `sync`, supports redis/database

## Development Guidelines (Gelistirici Kurallari)

### Iletisim Dili
- Kullanici ile iletisim: **Turkce** (Turkce karakterler oldugu gibi kullanilacak)
- Kod icindeki yorumlar: **Turkce**
- Degisken, fonksiyon, class isimleri: **Ingilizce**
- Commit mesajlari: **Turkce**

### Kod Prensipleri
Her gelistirmede asagidaki prensiplere uyulmalidir:
- **SOLID** - Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion
- **DRY** - Don't Repeat Yourself
- **KISS** - Keep It Simple, Stupid
- **YAGNI** - You Aren't Gonna Need It

### Calisma Yaklasimi
1. **Sorgulama**: Yanlis veya suboptimal istekler kabul edilmeden once sorgulanmali
2. **Analiz**: Her gorev oncesi mevcut kod ve yapi analiz edilmeli
3. **Danisma**: Kritik kararlarda kullaniciya CLI uzerinden secenekler sunulmali
4. **Dogrulama**: Yapilan degisiklikler oncesi/sonrasi dogrulanmali

### Yasak Uygulamalar
- Emoji kullanimi (kodda, yorumlarda, iletisimde)
- Gereksiz over-engineering
- Test edilmemis kod commit etme
- Mevcut mimariye uymayan yapilar olusturma

### Senior Developer Yaklasimi
- Her istek "neden" sorusuyla degerlendirilmeli
- En iyi pratikler onerilmeli
- Alternatif cozumler sunulmali
- Potansiyel sorunlar onceden belirtilmeli
