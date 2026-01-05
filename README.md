# 🛍️ E-Commerce Website

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Blade](https://img.shields.io/badge/Blade-66.2%25-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com/docs/blade)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A full-featured e-commerce platform built with **Laravel 12** featuring custom authentication, Blade templating (66.2% of codebase), and real-time Toastr.js notifications. This project demonstrates modern web development practices with Laravel framework.

## 📋 Table of Contents

- [About](#about)
- [Demo](#demo)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Stats](#project-stats)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Custom Authentication](#custom-authentication)
- [Notification System](#notification-system)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## 🎯 About

This e-commerce platform is a comprehensive web application developed with **Laravel 12** as a practice project to master modern web development concepts. The application showcases:

- **Custom-built authentication system** (no Breeze/Jetstream)
- **Blade templating** as the primary view layer (66.2% of codebase)
- **MySQL database** for data persistence
- **Toastr.js** for elegant user notifications
- **Clean MVC architecture** following Laravel best practices

The project allows users to browse products, manage shopping carts, and complete purchases while administrators can manage products, orders, and users through a dedicated admin panel.

## 🚀 Demo

- **Live Demo:** [Coming Soon]
- **Repository:** [github.com/HASIBULALAMH/e-commerce](https://github.com/HASIBULALAMH/e-commerce)
- **Total Commits:** 17

## ✨ Features

### 🛒 Customer Features

- 🔐 **Custom User Authentication** (Login & Registration)
- 🛍️ Product Browsing with Category Filter
- 🔍 Advanced Product Search
- 🛒 Shopping Cart Management
- 💳 Secure Checkout Process
- 📱 Fully Responsive Blade Templates
- 🔔 Real-time Toast Notifications (Toastr.js)
- 👤 User Profile Management
- 📜 Order History & Tracking
- ⭐ Product Reviews & Ratings

### 👨‍💼 Admin Features

- 📊 Admin Dashboard with Analytics
- 📦 Complete Product Management (CRUD)
- 👥 User Management System
- 📝 Order Management & Status Updates
- 📈 Sales Reports & Statistics
- 🏷️ Category Management
- 🖼️ Product Image Upload & Gallery

### 🎨 UI/UX Features

- 📱 Mobile-First Responsive Design
- 🎯 Clean & Modern Interface
- 🔔 Toast Notifications for User Actions
- ⚡ Fast Page Load Times
- 🎨 Consistent Design Language

## 🛠️ Tech Stack

### Backend
- **Framework:** Laravel 12.x
- **Language:** PHP 8.3+
- **Database:** MySQL 8.0
- **ORM:** Eloquent
- **Authentication:** Custom Implementation
- **Session:** Database Driver

### Frontend
- **Template Engine:** Blade (66.2% of codebase)
- **JavaScript:** Vanilla JS / jQuery (6.6%)
- **Styling:** Bootstrap 5 / Custom CSS
- **Notifications:** Toastr.js
- **Icons:** Font Awesome / Bootstrap Icons

### Development Tools
- **Package Managers:** Composer, NPM
- **Version Control:** Git
- **Testing:** PHPUnit
- **Build Tool:** Vite

## 📊 Project Stats

Based on GitHub repository analysis:

```
Languages Used:
├── Blade       66.2%  (Primary view layer)
├── PHP         26.1%  (Backend logic)
├── JavaScript   6.6%  (Frontend interactivity)
└── Other        1.1%  (Config & assets)

Total Files: 100+
Total Commits: 17
Branches: main
Stars: 1
Watchers: 1
```

## 📦 Prerequisites

Ensure you have the following installed on your system:

- **PHP** >= 8.3
- **Composer** >= 2.0
- **Node.js** >= 18.x
- **NPM** >= 9.x
- **MySQL** >= 8.0 or **MariaDB** >= 10.6
- **Git**

**Optional but Recommended:**
- PHP Extensions: `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`
- **Apache** or **Nginx** web server (for production)

## 🚀 Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/HASIBULALAMH/e-commerce.git
cd e-commerce
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

If you encounter any issues:
```bash
composer install --ignore-platform-reqs
```

### Step 3: Install Node Dependencies

```bash
npm install
```

### Step 4: Environment Setup

Copy the example environment file:
```bash
cp .env.example .env
```

Generate a new application key:
```bash
php artisan key:generate
```

## ⚙️ Configuration

### Database Configuration

Edit your `.env` file with database credentials:

```env
APP_NAME="E-Commerce"
APP_ENV=local
APP_KEY=base64:your-generated-key-here
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Settings
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=your_password

# Session Configuration
SESSION_DRIVER=database
SESSION_LIFETIME=120

# Cache Configuration
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

### File Storage Configuration

Ensure storage directory has proper permissions:
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

## 💾 Database Setup

### Step 1: Create Database

Create a new MySQL database:
```sql
CREATE DATABASE ecommerce_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### Step 2: Run Migrations

Execute database migrations to create tables:
```bash
php artisan migrate
```

### Step 3: Seed Database (Optional)

Populate with sample data:
```bash
php artisan db:seed
```

Or seed specific tables:
```bash
php artisan db:seed --class=AdminSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=ProductSeeder
```

### Step 4: Storage Link

Create symbolic link for file uploads:
```bash
php artisan storage:link
```

## 🎮 Usage

### Development Environment

**Method 1: Laravel Development Server**

Start the server:
```bash
php artisan serve
```

Access at: **http://localhost:8000**

**Method 2: Using Vite for Asset Compilation**

In a separate terminal, run:
```bash
npm run dev
```

### Production Build

Compile and optimize assets:
```bash
npm run build
```

Optimize Laravel application:
```bash
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Default Admin Credentials

After seeding, use these credentials:
```
Email: admin@ecommerce.com
Password: admin123
```

### Clear Application Cache

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 📁 Project Structure

```
e-commerce/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   │   ├── LoginController.php
│   │   │   │   └── RegisterController.php
│   │   │   ├── ProductController.php        # Product operations
│   │   │   ├── CartController.php          # Cart management
│   │   │   ├── OrderController.php         # Order processing
│   │   │   └── Admin/
│   │   │       ├── DashboardController.php
│   │   │       ├── ProductController.php
│   │   │       └── OrderController.php
│   │   ├── Middleware/
│   │   │   ├── Authenticate.php
│   │   │   └── IsAdmin.php
│   │   └── Requests/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Category.php
│   │   ├── Order.php
│   │   ├── OrderItem.php
│   │   └── Cart.php
│   └── Services/
│       └── CartService.php
├── bootstrap/
│   └── app.php
├── config/
│   ├── app.php
│   ├── database.php
│   └── session.php
├── database/
│   ├── migrations/
│   │   ├── 2024_create_users_table.php
│   │   ├── 2024_create_products_table.php
│   │   ├── 2024_create_categories_table.php
│   │   ├── 2024_create_orders_table.php
│   │   └── 2024_create_sessions_table.php
│   ├── seeders/
│   │   ├── DatabaseSeeder.php
│   │   ├── AdminSeeder.php
│   │   ├── CategorySeeder.php
│   │   └── ProductSeeder.php
│   └── factories/
│       ├── ProductFactory.php
│       └── UserFactory.php
├── public/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   ├── images/
│   ├── uploads/
│   │   └── products/
│   └── index.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   ├── header.blade.php
│   │   │   └── footer.blade.php
│   │   ├── auth/
│   │   │   ├── login.blade.php
│   │   │   └── register.blade.php
│   │   ├── home/
│   │   │   └── index.blade.php
│   │   ├── products/
│   │   │   ├── index.blade.php
│   │   │   ├── show.blade.php
│   │   │   └── category.blade.php
│   │   ├── cart/
│   │   │   ├── index.blade.php
│   │   │   └── checkout.blade.php
│   │   ├── orders/
│   │   │   ├── index.blade.php
│   │   │   └── show.blade.php
│   │   ├── admin/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── products/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── create.blade.php
│   │   │   │   └── edit.blade.php
│   │   │   └── orders/
│   │   │       └── index.blade.php
│   │   └── components/
│   │       ├── product-card.blade.php
│   │       └── notification.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       ├── app.js
│       └── notification.js
├── routes/
│   ├── web.php
│   ├── api.php
│   └── console.php
├── storage/
│   ├── app/
│   │   └── public/
│   ├── framework/
│   │   ├── cache/
│   │   ├── sessions/
│   │   └── views/
│   └── logs/
│       └── laravel.log
├── tests/
│   ├── Feature/
│   │   ├── AuthTest.php
│   │   ├── ProductTest.php
│   │   └── CartTest.php
│   └── Unit/
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── phpunit.xml
├── ProductController.php     # Root level controller
└── README.md
```

## 🔐 Custom Authentication System

This project implements a **custom authentication system** built from scratch without using Laravel's built-in packages (Breeze/Jetstream/Fortify).

### Authentication Features

✅ **User Registration** with validation  
✅ **Secure Login** with remember me  
✅ **Session Management** (database-driven)  
✅ **Custom Middleware** for route protection  
✅ **Role-based Access** (User/Admin)  
✅ **Logout Functionality**

### Implementation Example

**LoginController.php**
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            
            return redirect()
                ->intended('/dashboard')
                ->with('success', 'Welcome back!');
        }

        return back()
            ->withErrors(['email' => 'Invalid credentials'])
            ->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')
            ->with('success', 'Logged out successfully!');
    }
}
```

### Protected Routes

**web.php**
```php
// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products');

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
    Route::post('/register', [RegisterController::class, 'register']);
});

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('cart', CartController::class);
    Route::resource('orders', OrderController::class);
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [Admin\DashboardController::class, 'index']);
    Route::resource('products', Admin\ProductController::class);
    Route::resource('orders', Admin\OrderController::class);
});
```

### Custom Middleware

**IsAdmin.php**
```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            return redirect('/')
                ->with('error', 'Unauthorized access!');
        }

        return $next($request);
    }
}
```

## 🔔 Notification System with Toastr.js

This project uses **Toastr.js** for displaying beautiful, non-intrusive toast notifications.

### Installation & Setup

**Include in Layout (app.blade.php)**
```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - E-Commerce</title>
    
    <!-- Toastr CSS -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    @yield('content')
    
    <!-- jQuery (required for Toastr) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <!-- Toastr Configuration & Session Messages -->
    <script>
        // Toastr Options
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        
        // Display session messages
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
        
        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        
        @if(session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
        
        @if(session('info'))
            toastr.info("{{ session('info') }}");
        @endif
        
        // Display validation errors
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
</body>
</html>
```

### Usage in Controllers

```php
// Success notification
return redirect()->route('products.index')
    ->with('success', 'Product added to cart successfully!');

// Error notification
return back()->with('error', 'Failed to process your request.');

// Warning notification
return redirect()->back()
    ->with('warning', 'Your cart will expire in 10 minutes.');

// Info notification
return redirect()->route('orders.show', $order)
    ->with('info', 'Your order is being processed.');

// Multiple notifications
return redirect()->route('dashboard')
    ->with('success', 'Profile updated!')
    ->with('info', 'Please verify your email.');
```

### JavaScript Notifications

For AJAX requests and dynamic interactions:

```javascript
// Success
function addToCart(productId) {
    // ... AJAX call
    toastr.success('Product added to cart!');
}

// Error
function handleError() {
    toastr.error('Something went wrong. Please try again.');
}

// Warning
function checkStock() {
    toastr.warning('Only 3 items left in stock!');
}

// Info
function processOrder() {
    toastr.info('Processing your order...');
}

// Custom options per notification
toastr.options.timeOut = 3000;
toastr.success('Quick message!');

toastr.options.timeOut = 10000;
toastr.error('Important error message!');
```

## 🧪 Testing

### Run All Tests

```bash
php artisan test
```

### Run Specific Test Suites

```bash
# Feature tests
php artisan test --testsuite=Feature

# Unit tests
php artisan test --testsuite=Unit

# Run specific test file
php artisan test tests/Feature/AuthTest.php

# Run with coverage (requires Xdebug)
php artisan test --coverage
```

### Example Test

```php
<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class AuthTest extends TestCase
{
    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }
}
```

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

### How to Contribute

1. **Fork the Repository**
   ```bash
   # Click the 'Fork' button on GitHub
   ```

2. **Clone Your Fork**
   ```bash
   git clone https://github.com/YOUR_USERNAME/e-commerce.git
   cd e-commerce
   ```

3. **Create a Feature Branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```

4. **Make Your Changes**
   - Write clean, documented code
   - Follow PSR-12 coding standards
   - Add tests for new features

5. **Commit Your Changes**
   ```bash
   git add .
   git commit -m "Add amazing feature"
   ```

6. **Push to Your Fork**
   ```bash
   git push origin feature/amazing-feature
   ```

7. **Open a Pull Request**
   - Go to the original repository
   - Click "New Pull Request"
   - Describe your changes

### Coding Standards

- ✅ Follow **PSR-12** coding standards
- ✅ Write **meaningful commit messages**
- ✅ Add **tests** for new features
- ✅ Update **documentation**
- ✅ Use **Blade** for all views
- ✅ Follow **Laravel best practices**

### Development Guidelines

- Use Eloquent ORM for database operations
- Leverage Blade components for reusable UI
- Implement proper validation in Form Requests
- Use Service classes for complex business logic
- Follow RESTful routing conventions

## 🐛 Known Issues

- [ ] Cart persistence on long session timeout
- [ ] Image upload size validation needs improvement
- [ ] Mobile menu animations

## 🔜 Future Enhancements

### Short Term
- [ ] Implement email notification system
- [ ] Add password reset functionality
- [ ] Product image zoom feature
- [ ] Invoice PDF generation
- [ ] Order tracking with status timeline

### Medium Term
- [ ] Wishlist functionality
- [ ] Product comparison feature
- [ ] Advanced search filters
- [ ] Multi-currency support
- [ ] Payment gateway integration (Stripe/PayPal)

### Long Term
- [ ] Social media authentication
- [ ] Mobile app (Flutter/React Native)
- [ ] AI-powered product recommendations
- [ ] Multi-language support
- [ ] Advanced analytics dashboard
- [ ] Real-time inventory management
- [ ] Vendor/Multi-store support

## 📝 License

This project is licensed under the **MIT License**.

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
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

## 👨‍💻 Developer

**HASIBUL ALAM**

- 🐙 GitHub: [@HASIBULALAMH](https://github.com/HASIBULALAMH)
- 📧 Email: [Add your email]
- 🌐 Portfolio: [Add your portfolio link]
- 💼 LinkedIn: [Add your LinkedIn]

**Project Information**

- 📦 Repository: [github.com/HASIBULALAMH/e-commerce](https://github.com/HASIBULALAMH/e-commerce)
- 🌟 Stars: 1
- 👁️ Watchers: 1
- 🔱 Forks: 0
- 📝 Total Commits: 17
- 🔄 Last Updated: 2025

## 🙏 Acknowledgments

- [Laravel Documentation](https://laravel.com/docs/12.x) - Comprehensive framework docs
- [Blade Templates](https://laravel.com/docs/12.x/blade) - Laravel's templating engine
- [Toastr.js](https://github.com/CodeSeven/toastr) - Beautiful notification library
- [Bootstrap](https://getbootstrap.com/) - Responsive CSS framework
- [Font Awesome](https://fontawesome.com/) - Icon library
- Laravel Community - For continuous support and resources

### Learning Resources

- [Laracasts](https://laracasts.com/) - Laravel video tutorials
- [Laravel News](https://laravel-news.com/) - Latest Laravel updates
- [Laravel Daily](https://laraveldaily.com/) - Daily Laravel tips

## 📸 Screenshots

### 🏠 Homepage
![Homepage](screenshots/homepage.png)
*Clean and modern homepage with featured products and categories*

### 📦 Product Listing
![Product Listing](screenshots/products.png)
*Grid view of products with filtering and sorting options*

### 🔍 Product Details
![Product Details](screenshots/product-detail.png)
*Detailed product view with image gallery and specifications*

### 🛒 Shopping Cart
![Shopping Cart](screenshots/cart.png)
*Easy-to-use shopping cart with quantity controls*

### 💳 Checkout
![Checkout](screenshots/checkout.png)
*Streamlined checkout process with order summary*

### 📊 Admin Dashboard
![Admin Dashboard](screenshots/admin-dashboard.png)
*Comprehensive admin panel with sales analytics*

### 🔔 Toastr Notifications
![Notifications](screenshots/toastr-demo.png)
*Beautiful toast notifications for user feedback*

---

## 🎯 Project Goals

This project was developed as a **learning exercise** to:

✅ Master Laravel 12 framework  
✅ Build custom authentication from scratch  
✅ Work extensively with Blade templates  
✅ Implement real-world e-commerce features  
✅ Practice MVC architecture  
✅ Understand database relationships  
✅ Integrate third-party libraries  
✅ Follow coding best practices

---

## 📈 Version History

### v1.0.0 - Current Version
**Released:** [Date]

**Core Features:**
- ✅ Laravel 12.x implementation
- ✅ Custom authentication system
- ✅ Blade template engine (66.2% of codebase)
- ✅ MySQL database with migrations
- ✅ Toastr.js notification system
- ✅ Product CRUD operations
- ✅ Shopping cart functionality
- ✅ Order management system
- ✅ Admin dashboard
- ✅ Responsive design
- ✅ Session-based authentication
- ✅ Role-based access control

**Statistics:**
- Total Commits: 17
- Files: 100+
- Lines of Code: [TBD]

---

<div align="center">

### ⭐ Star this repository if you find it helpful! ⭐

### 🤝 Contributions are always welcome! 🤝

---

**Built with ❤️ using Laravel 12 by [HASIBUL ALAM](https://github.com/HASIBULALAMH)**

*Practice makes perfect! This project is a stepping stone in mastering modern web development.*

</div>

---

## 🔗 Quick Links

- [Laravel 12 Documentation](https://laravel.com/docs/12.x)
- [Blade Templates Guide](https://laravel.com/docs/12.x/blade)
- [Eloquent ORM](https://laravel.com/docs/12.x/eloquent)
- [Toastr.js Documentation](https://github.com/CodeSeven/toastr)
- [PHP 8.3 Documentation](https://www.php.net/docs.php)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [Composer Documentation](https://getcomposer.org/doc/)
- [NPM Documentation](https://docs.npmjs.com/)

---

## 💡 Tips for Developers

### Running in Production

1. Set `APP_DEBUG=false` in `.env`
2. Run `composer install --optimize-autoloader --no-dev`
3. Run `php artisan config:cache`
4. Run `php artisan route:cache`
5. Run `php artisan view:cache`
6. Set up proper file permissions
7. Configure web server (Apache/Nginx)
8. Enable HTTPS with SSL certificate

### Performance Optimization

- Use Laravel's built-in caching
- Implement queue for heavy tasks
- Optimize database queries
- Minimize asset file sizes
- Use CDN for static assets
- Enable OPcache for PHP

### Security Best Practices

- Keep Laravel updated
- Use CSRF protection
- Validate all user inputs
- Sanitize database queries
- Use prepared statements
- Implement rate limiting
- Enable HTTPS
- Secure sensitive data

---

**Happy Coding! 💻**