## Getting Started with PHP MySQL Database Class

PHP MySQL Database Class allows you to write less and do more.
### Prerequisites


* PHP >= 5.5
* PHP extensions (mysqli)


### Installation

1. Prepare your MySQL database
2. Clone the repo
   ```sh
   git clone https://github.com/MimoudiX/PHP-MySQL-Database-Class.git
   ```

3. Enter your database informations in `config/config.php`
   ```php
   $database_connection->server = 'localhost';
   $database_connection->username = 'root';
   $database_connection->password = '';
   $database_connection->name = 'dbname';
   ```


### Usage
  Include `bootstrap.php` in your php file
   ```php
   include_once 'bootstrap.php';

   ```


 Let's pretend we have a table called  `pages`

  page_id |title | url | description
 ---|--- | --- | ---   
##### INSERT
The following PHP inserts a new record in `pages` table:
```php
insert($table, $data = [], $clean = true)
//$clean is true by default, turn it false if you want to avoid cleaning strings
````
```php
Database::insert('pages', ['title' => 'title here', 'url' => 'url here', 'description' => 'description here'], false);
````
The selection from the `pages` table will now look like this:
 page_id |title | url | description
 --- | --- | --- |---  
  1|title here| url here| description here
##### UPDATE


 The following PHP will update `title` value in `pages` table where `page_id` is `1`:
```php
update($what, $fields = [], $conditions = [])
````
```php
Database::update('pages', ['title' => 'new title here'], ['page_id' => '1']);
````
The selection from the `pages` table will now look like this:
 page_id |title | url | description
 --- | --- | --- |---  
  1|new title here| url here| description here

##### EXISTS

The following PHP will check if `page_id` exists in `pages` table where `title == some title`
```php
exists($what = [], $from, $conditions = [])
````
 ```php
if(Database::exists('page_id', 'pages', ['title' => 'some title'])) {
echo "page found";
} else {
echo "page not found";
}
```
##### SIMPLE GET

The following PHP will get `title` value where `page_id` is `1`
```php
simple_get($raw_what, $from, $conditions = [])
```
```php
$title = Database::simple_get('title', 'pages', ['page_id' => 1]);
echo $title;
//will print "new title here"
```
##### GET

The following PHP is the same but will be capable of getting multiple values
```php
get($what = [], $from, $conditions = [], $order = false, $clean = false)
```
```php
$data = Database::get(['title', 'description'], 'pages', ['page_id' => 4]);

echo $data->title . "\n" . $data->description;
//will print new title here description here
```
you can also try `*` to get all values

```php
$data = Database::get(['*'], 'pages', ['page_id' => 1]);
echo $data->page_id . $data->title . $data->url . $data->description;
```






## Contact

MimoudiX - [@MimoudiX](https://twitter.com/mimoudix) - mimoudix@icloud.com


