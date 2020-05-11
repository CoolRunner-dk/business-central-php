# Business Central for PHP

License: MIT

## Install using Composer
`composer require coolrunner/business-central-sdk`

#### Getting Started

 - [Register](https://dynamics.microsoft.com/en-us/business-central/overview/) for a set of Business Central credentials
   - The SDK uses Basic Authentication
 - Install the library into your application
 - Load the SDK

#### Connecting to Business Central

Business Central for PHP uses a singleton pattern for SDK instances.

Once an instance has been initiallized it will fetch the schema from your Business Central. (Standard entities are included).

```php
$sdk = SDK::instance('my-tenant-id.onmicrosoft.com', [
	// Basic auth username [Required]
    'username' => 'username',
    
    // Basic auth token [Required]
    'token'    => 'VGhpcyBpc24ndCBhIHJlYWwgdG9rZW4gLSBOaWNlIHRyeSB0aG91Z2g=',
    
    // Default collection size [Optional]
    // Amount of entities to load initially and per page per collection
    // Can be changed on the fly on any collection instance
    'default_collection_size' => 20,
    
    // Default environment [Optional - 'production' by default]
    'environment' => 'dev'
]);
```

#### Fetching Entities Manually

Business Central for PHP uses an internal query builder to navigate and fetch entities.

##### Accessing the query
```php
$query = $sdk->query();
```

##### Navigating using the query
```php
$query = $sdk->query();

// Navigate using navigateTo(...) (or shorthand ->to(...)
$query->to('companies','companyId')->to('customers') // Equivalent of fetching from 'companies(companyId)/customers'
```

##### Fetching results
```php
$collection = $query->fetch(); // Fetches the results of the query as a collection

// Fetches the first result of the query 
$entity = $query->first(); // equivalent of $query->fetch()->first()
```

#### Fetching Entities

```php
// Fetch a single company
$company = $sdk->company('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx');
// Fetch all companies available to the authorized user
$companies = $sdk->companies();
```

## Class Reference

### EntityCollection

#### Properties
None

#### Methods

- `find(string $id, $default = null) : Entity|null`
  - Finds and returns an entity from the collection with the given id or `$default` on failure

- `create(array $attributes) : Entity`
  - Creates and returns a new Entity with the given attributes

- `update(string $id, array $attributes) : Entity`
  - Updates and returns an existing Entity with the given attributes

- `delete(string $id) : bool`
  - Deletes en entity from the collection with the given id - Returns true/false on success/failure
