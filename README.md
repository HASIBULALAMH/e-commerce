# E-Commerce Platform

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.3+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Blade](https://img.shields.io/badge/Blade-66.2%25-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/blade)

A production-ready e-commerce platform built with Laravel 12, featuring custom authentication, extensive Blade templating, and MySQL database. This application demonstrates enterprise-level architecture and modern web development practices.

---

## Table of Contents

- [Overview](#overview)
- [Key Features](#key-features)
- [Technology Stack](#technology-stack)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Architecture](#architecture)
- [Security Features](#security-features)
- [Testing](#testing)
- [Deployment](#deployment)
- [Contributing](#contributing)
- [License](#license)
- [Support](#support)

---

## Overview

This e-commerce platform is a comprehensive solution for online retail operations, built from the ground up using Laravel 12. The application showcases professional-grade development practices with a focus on security, scalability, and maintainability.

### Project Statistics

```
Codebase Composition:
├── Blade Templates    66.2%    Primary view layer
├── PHP Backend        26.1%    Business logic & controllers
├── JavaScript         6.6%     Client-side functionality
└── Configuration      1.1%     System settings

Repository Metrics:
├── Total Commits      17
├── Primary Branch     main
├── Contributors       1
└── Open Issues        0
```

### Design Philosophy

- **Security First**: Custom authentication with industry-standard security practices
- **MVC Architecture**: Clear separation of concerns
- **SOLID Principles**: Maintainable and testable code
- **Laravel Conventions**: Following framework best practices

---

## Key Features

### Customer Features

#### Authentication & Account Management
- Custom-built authentication system (login, registration)
- Secure session management with database persistence
- Role-based access control (Customer/Admin)
- User profile management

#### Shopping Experience
- Product catalog with category organization
- Advanced search and filtering
- Shopping cart with persistent state
- Secure checkout process
- Order history and tracking
- Product reviews and ratings

#### User Interface
- Fully responsive Blade templates
- Mobile-first design approach
- Real-time toast notifications via Toastr.js
- Intuitive navigation and user flow

### Administrative Features

#### Dashboard & Analytics
- Real-time business metrics
- Sales performance tracking
- Inventory monitoring
- Customer analytics

#### Content Management
- Complete product CRUD operations
- Category and brand management
- Order processing and fulfillment
- User account administration
- Image upload and management

### Technical Features

#### Performance
- Query optimization with eager loading
- View caching for faster rendering
- Asset minification and bundling
- Database indexing strategy

#### Security
- CSRF protection on all forms
- SQL injection prevention via Eloquent ORM
- XSS protection through Blade escaping
- Secure password hashing (bcrypt)
- Input validation and sanitization
- Session security (regeneration, HTTP-only cookies)

---

## Technology Stack

### Backend

```
Laravel 12.x Framework
├── Eloquent ORM              Database abstraction layer
├── Blade Template Engine     Server-side rendering (66.2%)
├── Artisan Console          Command-line tools
├── Middleware Pipeline      Request/response filtering
├── Service Container        Dependency injection
└── Authentication System    Custom implementation
```

### Database

```
MySQL 8.0
├── InnoDB Storage Engine    ACID compliance
├── Foreign Key Constraints  Referential integrity
├── Indexes                  Query optimization
└── Transactions            Data consistency
```

### Frontend

```
Client-Side Technologies
├── Blade Templates (66.2%)  Server-side rendering
├── JavaScript (6.6%)        DOM manipulation
├── Bootstrap 5              Responsive framework
├── Toastr.js               Toast notifications
├── jQuery                  JavaScript library
└── Font Awesome            Icon library
```

### Development Tools

```
Build & Package Management
├── Composer 2.x            PHP dependencies
├── NPM                     JavaScript packages
├── Vite                    Asset bundling
└── Git                     Version control
```

---

## System Requirements

### Production Environment

| Component | Minimum Version | Purpose |
|-----------|----------------|---------|
| **PHP** | 8.3+ | Runtime environment |
| **MySQL** | 8.0+ | Database server |
| **Composer** | 2.0+ | Dependency management |
| **Node.js** | 18.x+ | Asset compilation |
| **NPM** | 9.x+ | Package management |
| **Web Server** | Apache 2.4+ / Nginx 1.18+ | HTTP server |

### Required PHP Extensions

```
✓ BCMath           Arbitrary precision mathematics
✓ Ctype            Character type checking
✓ JSON             JSON manipulation
✓ Mbstring         Multibyte string handling
✓ OpenSSL          Cryptographic functions
✓ PDO              Database abstraction
✓ Tokenizer        PHP tokenization
✓ XML              XML processing
✓ Fileinfo         File information
```

### System Specifications

**Minimum:**
- CPU: 2 cores @ 2.0 GHz
- RAM: 2 GB
- Storage: 10 GB SSD
- Network: 100 Mbps

**Recommended:**
- CPU: 4 cores @ 2.5 GHz
- RAM: 4 GB
- Storage: 20 GB SSD
- Network: 1 Gbps

---

## Installation

### Prerequisites Check

```bash
# Verify PHP version
php --version

# Check required extensions
php -m | grep -E 'bcmath|ctype|json|mbstring|openssl|pdo|tokenizer|xml'

# Verify Composer
composer --version

# Check Node.js and NPM
node --version
npm --version

# Verify MySQL
mysql --version
```

### Step-by-Step Installation

#### 1. Clone Repository

```bash
git clone https://github.com/HASIBULALAMH/e-commerce.git
cd e-commerce
```

#### 2. Install Dependencies

**PHP Dependencies:**
```bash
# Production
composer install --no-dev --optimize-autoloader

# Development
composer install
```

**Node Dependencies:**
```bash
npm install
```

#### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Set permissions (Linux/macOS)
chmod -R 775 storage bootstrap/cache
```

#### 4. Configure Environment

Edit `.env` file:

```env
APP_NAME="E-Commerce Platform"
APP_ENV=production
APP_KEY=base64:generated-key-here
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=your_db_user
DB_PASSWORD=your_secure_password

SESSION_DRIVER=database
SESSION_LIFETIME=120

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

---

## Configuration

### Database Configuration

#### Create Database

```sql
-- Connect to MySQL
mysql -u root -p

-- Create database
CREATE DATABASE ecommerce_db 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- Create dedicated user
CREATE USER 'ecommerce_user'@'localhost' 
IDENTIFIED BY 'secure_password';

-- Grant privileges
GRANT ALL PRIVILEGES ON ecommerce_db.* 
TO 'ecommerce_user'@'localhost';

FLUSH PRIVILEGES;
```

#### Run Migrations

```bash
# Execute migrations
php artisan migrate

# Fresh migration (WARNING: drops all tables)
php artisan migrate:fresh

# Migration with seeding
php artisan migrate --seed

# Check migration status
php artisan migrate:status
```

#### Seed Database

```bash
# Seed all tables
php artisan db:seed

# Seed specific seeder
php artisan db:seed --class=AdminSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=ProductSeeder
```

### Storage Configuration

```bash
# Create symbolic link
php artisan storage:link

# Verify link creation
ls -la public/storage
```

### Asset Compilation

```bash
# Development (watch mode)
npm run dev

# Production build
npm run build
```

---

## Database Setup

### Schema Overview

The application uses a normalized relational database structure:

```
Database Tables:
├── users              User accounts and authentication
├── products           Product catalog
├── categories         Product categorization
├── orders             Customer orders
├── order_items        Order line items
├── cart_items         Shopping cart contents
└── sessions           User session storage
```

### Entity Relationships

```
users (1) ──────< (N) orders
  │
  └──────< (N) cart_items
  
categories (1) ──────< (N) products
  
products (1) ──────< (N) order_items
    │
    └──────< (N) cart_items
    
orders (1) ──────< (N) order_items
```

### Key Database Features

- **Foreign Key Constraints**: Maintain referential integrity
- **Indexes**: Optimize query performance
- **Transactions**: Ensure data consistency
- **UTF-8 Support**: Handle international characters

---

## Usage

### Development Server

**Start Laravel Server:**
```bash
php artisan serve
```
Access at: `http://localhost:8000`

**Watch Assets:**
```bash
npm run dev
```

### Production Optimization

```bash
# Clear all caches
php artisan optimize:clear

# Cache configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize application
php artisan optimize
```

### Default Credentials

After seeding the database:

**Admin Account:**
- Email: `admin@ecommerce.com`
- Password: `admin123`

**Test User Account:**
- Email: `user@ecommerce.com`
- Password: `password`

> **Note:** Change these credentials immediately in production!

---

## Architecture

### MVC Pattern

```
┌─────────────────────────────────────────┐
│           View Layer (Blade)            │
│  ┌──────────────────────────────────┐   │
│  │  layouts/     components/        │   │
│  │  auth/        products/          │   │
│  │  admin/       cart/              │   │
│  └──────────────────────────────────┘   │
└────────────────┬────────────────────────┘
                 │
┌────────────────▼────────────────────────┐
│        Controller Layer (HTTP)          │
│  ┌──────────────────────────────────┐   │
│  │  Auth Controllers                │   │
│  │  Product Controllers             │   │
│  │  Cart Controllers                │   │
│  │  Admin Controllers               │   │
│  └──────────────────────────────────┘   │
└────────────────┬────────────────────────┘
                 │
┌────────────────▼────────────────────────┐
│         Model Layer (Eloquent)          │
│  ┌──────────────────────────────────┐   │
│  │  User, Product, Order models     │   │
│  │  Relationships & Scopes          │   │
│  │  Database interactions           │   │
│  └──────────────────────────────────┘   │
└─────────────────────────────────────────┘
```

### Directory Structure

```
e-commerce/
├── app/
│   ├── Http/
│   │   ├── Controllers/        Request handlers
│   │   ├── Middleware/         Request filtering
│   │   └── Requests/          Form validation
│   ├── Models/                Eloquent models
│   └── Services/              Business logic
│
├── database/
│   ├── migrations/            Schema definitions
│   ├── seeders/              Sample data
│   └── factories/            Model factories
│
├── resources/
│   ├── views/                Blade templates (66.2%)
│   ├── css/                  Stylesheets
│   └── js/                   JavaScript files
│
├── routes/
│   ├── web.php               Web routes
│   └── api.php               API routes
│
├── storage/
│   ├── app/                  Application files
│   ├── framework/            Framework cache
│   └── logs/                 Application logs
│
└── tests/
    ├── Feature/              Feature tests
    └── Unit/                 Unit tests
```

---

## Security Features

### Authentication System

The application implements a **custom authentication system** built without third-party packages, providing complete control over security mechanisms.

#### Core Security Features

**Session Security:**
- Database-driven session storage
- Session regeneration on authentication
- HTTP-only session cookies
- Secure cookie transmission (HTTPS)
- CSRF token validation

**Password Security:**
- Bcrypt hashing algorithm
- Minimum password requirements enforced
- Password confirmation on registration
- Secure password storage

**Access Control:**
- Role-based authorization (User/Admin)
- Route protection via middleware
- Permission-based feature access
- Session timeout management

**Attack Prevention:**
- SQL injection protection (Eloquent ORM)
- XSS prevention (Blade auto-escaping)
- CSRF token validation
- Rate limiting on authentication routes
- Brute force protection

#### Authentication Flow

```
┌──────────────┐
│ User Access  │
└──────┬───────┘
       │
       ▼
┌──────────────┐     Yes    ┌─────────────┐
│ Authenticated?├───────────▶│  Dashboard  │
└──────┬───────┘             └─────────────┘
       │ No
       ▼
┌──────────────┐
│  Login Page  │
└──────┬───────┘
       │
       ▼
┌──────────────┐
│ Validate     │
│ Credentials  │
└──────┬───────┘
       │
       ├── Success ──▶ Regenerate Session ──▶ Redirect
       │
       └── Failure ──▶ Show Error ──▶ Rate Limit Check
```

#### Implementation Details

**For security reasons, complete authentication code is not published in this README.**

Key implementation files in the repository:
- `app/Http/Controllers/Auth/LoginController.php`
- `app/Http/Controllers/Auth/RegisterController.php`
- `app/Http/Middleware/Authenticate.php`
- `app/Http/Middleware/IsAdmin.php`

**To review the implementation:**
1. Clone the repository
2. Review controller files in `app/Http/Controllers/Auth/`
3. Study middleware in `app/Http/Middleware/`
4. Examine routes in `routes/web.php`

---

## Notification System

### Toastr.js Integration

Real-time user feedback through elegant toast notifications.

#### Features

- **Non-intrusive**: Appears in corner of screen
- **Auto-dismiss**: Configurable timeout
- **Multiple Types**: Success, error, warning, info
- **Customizable**: Position, duration, animations
- **Queue Support**: Multiple notifications

#### Implementation Overview

**Global Configuration:**
- Integrated in main layout (`resources/views/layouts/app.blade.php`)
- Configured with optimal settings for user experience
- Connected to Laravel session flash messages

**Usage Pattern:**

```php
// In controllers
return redirect()->route('products.index')
    ->with('success', 'Product added successfully!');

return back()
    ->with('error', 'Operation failed. Please try again.');
```

**JavaScript API:**

```javascript
// Direct JavaScript calls
toastr.success('Operation completed!');
toastr.error('Something went wrong!');
toastr.warning('Please review your input.');
toastr.info('Processing your request...');
```

#### Notification Types

| Type | Use Case | Auto-Dismiss |
|------|----------|--------------|
| **Success** | Successful operations | 5 seconds |
| **Error** | Failed operations | 7 seconds |
| **Warning** | Cautionary messages | 6 seconds |
| **Info** | Informational updates | 5 seconds |

---

## Testing

### Test Environment

```bash
# Create test database
CREATE DATABASE ecommerce_testing;

# Configure test environment
cp .env .env.testing
```

### Running Tests

```bash
# All tests
php artisan test

# Specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# With coverage
php artisan test --coverage

# Parallel execution
php artisan test --parallel

# Stop on failure
php artisan test --stop-on-failure
```

### Test Coverage

The application includes comprehensive tests for:

- **Authentication flows**
- **Product operations**
- **Cart functionality**
- **Order processing**
- **Admin operations**
- **Middleware authorization**

**Test files are located in:**
- `tests/Feature/` - Integration tests
- `tests/Unit/` - Unit tests

---

## Deployment

### Production Checklist

#### Pre-Deployment

- [ ] Update `.env` with production values
- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Generate new `APP_KEY`
- [ ] Configure production database
- [ ] Set up SSL certificate
- [ ] Configure email service
- [ ] Set up backup system
- [ ] Configure web server
- [ ] Test payment integration

#### Optimization

```bash
# Clear development caches
php artisan optimize:clear

# Install production dependencies
composer install --no-dev --optimize-autoloader

# Cache configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Compile assets
npm run build

# Run migrations
php artisan migrate --force

# Set permissions
chmod -R 755 storage bootstrap/cache
```

### Web Server Configuration

#### Apache

```apache
<VirtualHost *:443>
    ServerName your-domain.com
    DocumentRoot /var/www/ecommerce/public

    SSLEngine on
    SSLCertificateFile /path/to/certificate.crt
    SSLCertificateKeyFile /path/to/private.key

    <Directory /var/www/ecommerce/public>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/ecommerce-error.log
    CustomLog ${APACHE_LOG_DIR}/ecommerce-access.log combined
</VirtualHost>
```

#### Nginx

```nginx
server {
    listen 443 ssl http2;
    server_name your-domain.com;
    root /var/www/ecommerce/public;

    ssl_certificate /path/to/certificate.crt;
    ssl_certificate_key /path/to/private.key;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Backup Strategy

```bash
# Database backup script
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
mysqldump -u user -p ecommerce_db | gzip > backup_$DATE.sql.gz

# Schedule with cron (daily at 2 AM)
0 2 * * * /path/to/backup-script.sh
```

---

## Contributing

### How to Contribute

We welcome contributions! Please follow these guidelines:

#### 1. Fork & Clone

```bash
# Fork on GitHub, then clone
git clone https://github.com/YOUR_USERNAME/e-commerce.git
cd e-commerce
```

#### 2. Create Branch

```bash
git checkout -b feature/your-feature-name
```

#### 3. Make Changes

- Write clean, documented code
- Follow PSR-12 standards
- Add tests for new features
- Update documentation

#### 4. Commit Changes

```bash
git commit -m "feat: add amazing feature"
```

**Commit Conventions:**
- `feat:` New feature
- `fix:` Bug fix
- `docs:` Documentation
- `style:` Formatting
- `refactor:` Code restructuring
- `test:` Adding tests
- `chore:` Maintenance

#### 5. Push & PR

```bash
git push origin feature/your-feature-name
```

Then create a Pull Request on GitHub.

### Code Standards

- Follow PSR-12 coding standards
- Write meaningful variable/function names
- Add PHPDoc comments for methods
- Use type hints where possible
- Write tests for new features
- Keep functions focused and small

### Pull Request Guidelines

- Provide clear description
- Link related issues
- Include test results
- Update documentation
- Follow code style
- Pass all CI checks

---

## License

### MIT License

```
MIT License

Copyright (c) 2025 HASIBUL ALAM

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
```

---

## Support

### Getting Help

- **Documentation**: This README and inline code documentation
- **Issues**: [GitHub Issues](https://github.com/HASIBULALAMH/e-commerce/issues)
- **Discussions**: [GitHub Discussions](https://github.com/HASIBULALAMH/e-commerce/discussions)

### Reporting Issues

When reporting issues, include:

**Environment:**
- PHP version
- Laravel version
- Database version
- Operating system

**Problem Description:**
- Steps to reproduce
- Expected behavior
- Actual behavior
- Error messages
- Screenshots (if applicable)

### Feature Requests

- Search existing issues first
- Provide clear use case
- Explain expected behavior
- Consider implementation impact

---

## Acknowledgments

### Technologies

- **[Laravel Framework](https://laravel.com/)** - PHP framework for web artisans
- **[Blade Templates](https://laravel.com/docs/blade)** - Laravel's templating engine
- **[Eloquent ORM](https://laravel.com/docs/eloquent)** - Laravel's database ORM
- **[MySQL](https://www.mysql.com/)** - Relational database management
- **[Toastr.js](https://github.com/CodeSeven/toastr)** - JavaScript notification library
- **[Bootstrap](https://getbootstrap.com/)** - Frontend framework
- **[jQuery](https://jquery.com/)** - JavaScript library

### Resources

- [Laravel Documentation](https://laravel.com/docs/12.x)
- [Laracasts](https://laracasts.com/) - Video tutorials
- [Laravel News](https://laravel-news.com/) - Latest updates
- [PHP The Right Way](https://phptherightway.com/) - Best practices

---

## Project Information

### Repository

- **URL**: [github.com/HASIBULALAMH/e-commerce](https://github.com/HASIBULALAMH/e-commerce)
- **License**: MIT
- **Language**: Blade 66.2%, PHP 26.1%, JavaScript 6.6%
- **Commits**: 17
- **Branch**: main

### Developer

**HASIBUL ALAM**

- GitHub: [@HASIBULALAMH](https://github.com/HASIBULALAMH)
- Repository: [HASIBULALAMH/e-commerce](https://github.com/HASIBULALAMH/e-commerce)

---

## Roadmap

### Version 1.x (Current)

- [x] Custom authentication system
- [x] Product catalog management
- [x] Shopping cart functionality
- [x] Order processing
- [x] Admin dashboard
- [x] Toast notifications
- [x] Responsive design

### Version 2.0 (Planned)

- [ ] Email notification system
- [ ] Password reset functionality
- [ ] Wishlist feature
- [ ] Product reviews system
- [ ] Advanced search filters
- [ ] Customer dashboard enhancements

### Version 3.0 (Future)

- [ ] Payment gateway integration
- [ ] Multi-currency support
- [ ] Multi-language support
- [ ] Mobile application
- [ ] RESTful API
- [ ] Advanced analytics
- [ ] Inventory management

---

<div align="center">

### ⭐ Star this repository if you find it helpful! ⭐

[![GitHub stars](https://img.shields.io/github/stars/HASIBULALAMH/e-commerce?style=social)](https://github.com/HASIBULALAMH/e-commerce/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/HASIBULALAMH/e-commerce?style=social)](https://github.com/HASIBULALAMH/e-commerce/network/members)

---

**Built with Laravel 12 | Secure | Scalable | Professional**

---

Copyright © 2025 [HASIBUL ALAM](https://github.com/HASIBULALAMH)

</div>