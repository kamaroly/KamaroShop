## Kamaro Point Of Sale
Affordable, complete platform for running a shop. it manages sales, prints receipts, processes payments,manages inventory, reports, and customers without extra hardware.

## What's new
After 3 years of working on the point of sales system which is built on CodeIgniter, I decided to revamp the entire platform and
write a new platform  using Laravel framework which is total powered by API. this will allow the total flexibility and extension of the platform .

## Official dicumentation

Documentation for the entire system can be found on the [Kamaro Lambert Website](http://kamaroly.com/support/#/).

## Installation

> [First install rydurham/Sentinel ](https://github.com/rydurham/Sentinel)


### Run migrations
Begin by running migration 

`` php 
php artisan migrate --bench=kamaro/sentinel
y
php artisan db:seed --class="SentinelDatabaseSeeder"
y
php artisan migrate --bench="kamaro/contracts" 
y 
``
### service providers
``php
        /////////////////////////////////////////
        // Added other thirdparty dependencies //
        /////////////////////////////////////////
         'Sentinel\SentinelServiceProvider',  
	//////////////////////////////////////////////
	// Kamaro Point of Sale service providers //
	//////////////////////////////////////////////
         'Kamaro\Customers\CustomersServiceProvider',
         'Kamaro\Templates\TemplatesServiceProvider',
         'Kamaro\Items\ItemsServiceProvider',
         'Kamaro\Sales\SalesServiceProvider',
         'Kamaro\Settings\SettingsServiceProvider',

        /////////////////////////////////////////
        // Added other thirdparty dependencies //
        /////////////////////////////////////////
         'Sentinel\SentinelServiceProvider',  
         'Laracasts\Flash\FlashServiceProvider',

        //////////////////////////////////////////////
        // Kamaro Point of Sale service providers //
        //////////////////////////////////////////////
         'Kamaro\Customers\CustomersServiceProvider',
         'Kamaro\Templates\TemplatesServiceProvider',
         'Kamaro\Items\ItemsServiceProvider',
         'Kamaro\Sales\SalesServiceProvider',
         'Kamaro\Settings\SettingsServiceProvider',
         'Kamaro\Suppliers\SuppliersServiceProvider',
         'Kamaro\People\PeopleServiceProvider',
         'Kamaro\Receivings\ReceivingsServiceProvider',
         'Kamaro\Reports\ReportsServiceProvider',
         'Kamaro\Locations\LocationsServiceProvider',

        ////////////////////////////////////
        // Third party alias added here  //
        /////////////////////////////////////
        'Flash'             => 'Laracasts\Flash\Flash',

        //////////////////////////////
        // Kamaro Facades           //
        //////////////////////////////
        'Cart'             => 'Kamaro\Sales\Cart',


### Contributing To KPOS

**All issues and pull requests should be filed on the [Kamaro Point of Sale](http://github.com/kamaroly/kpos3) repository.**

### LICENCE
The Kamaro Point of Sale software is licensed under the [MIT license](http://opensource.org/licenses/MIT)