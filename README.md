# Ammil Microfinace Website

Company Website

# How to install dev
1. Install Symfony binary, composer and node
1. Clone repo
1. Clone repo
2. Create `.env.local` with your env vars
3. `composer install`
## Run migrations and setup indexes
1. `php bin/console do:mi:di`
2. `php bin/console do:mi:mi`
## Install node modules
3. `npm install`
## Compile assets
4. `yarn watch` or `npm run watch`
## Clear cache 
1. `php bin/console cache:clear`
1. `php bin/console cache:pool:clear cache.global_clearer`
2. `composer clearcache`

# How to use

1. Run `symfony server:start`
1. Register an admin at `/register`
1. Login  at `/loginjyfisybfiys`
1. Populate services at `/admin`