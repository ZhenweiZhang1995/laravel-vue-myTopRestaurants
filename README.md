# Rate Restaurant
Rate Restaurant is an application for creating your own restaurant list.  It offers an easy way to create and edit personal restaurant list. With the help of Google Map API, user can easily know the location of these restaurants.

# Setup
* To start, set up Apache Server and MySQL server. Apache should be on port 8888 and MySQL on port 8889.
* Have a database called “app” in MySQL
```
# install dependencies
npm install

# run migration
php artisan migrate

# serve at localhost:8888
npm run dev
```

You can find the API documentation at  https://zhenweizhang1995.gitbooks.io/rate-restaurant-api/content/
