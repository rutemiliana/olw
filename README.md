<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# About project
1.  ./vendor/bin/sail artisan make:migration create_addresses_table
2. ./vendor/bin/sail artisan make:migration create_companies_table
3. ./vendor/bin/sail artisan make:migration create_clients_table
4. ./vendor/bin/sail artisan make:migration create_sellers_table
5. ./vendor/bin/sail artisan make:migration create_sales_commission_view
6. ./vendor/bin/sail artisan make:model Address
7. ./vendor/bin/sail artisan make:model Company
8. ./vendor/bin/sail artisan make:model Client
9. ./vendor/bin/sail artisan make:model Seller
10. ./vendor/bin/sail artisan make:model Sale
11. ./vendor/bin/sail artisan make:factory AddressFactory
12. ./vendor/bin/sail artisan make:factory ClientFactory
13. ./vendor/bin/sail artisan make:factory CompanyFactory
14. ./vendor/bin/sail artisan make:factory SaleFactory,
15. ./vendor/bin/sail artisan make:factory SellerFactory
16. ./vendor/bin/sail artisan make:seeder AddressSeeder
17. ./vendor/bin/sail artisan make:seeder CompanySeeder
18. ./vendor/bin/sail artisan make:seeder UserSeeder
19. ./vendor/bin/sail artisan db:seed