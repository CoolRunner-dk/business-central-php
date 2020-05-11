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

### Entity
Class for Entity fetched from Business Central

#### Entity Properties / Relations

Check the individual entity types under [Entities Overview](entities.md)

##### Fetch Relation

You can fetch relations from a given entity by calling the name of the relation as a property or method:
```php
// Returns a collection of entities if the relation is a collection,
// else returns the single instance of the related entity or if none is found
$customers = $entity->relation;
// Returns a query builder pointing at the relation - Use this if you have further filters (See [Builer/Filters](#builderfilters))
$customers = $entity->relation();
```

If the relations isn't pointing at a collection, then only the single related entity will be returned.

Check [Entities Overview](entities.md) to see if the relation is a collection type or not.

#### Entity Methods

- `fill(array $attributes)` : [Entity](#entity)
  - Update/set multiple properties as once - Only fillable properties will be set 
  - Check the individual entity type on [Entities Overview](entities.md)

- `save()` : `bool`
  - Save the entity to Business Central

- `validate()` : `bool`
  - Validate the entity against the rules set by Business Central (this method is also called during `save()`

- `getEntityType`: [EntityType](#entitytype)
  - Get the entity's EntityType

- `query()` : [Builder](#builder)
  - Get a query pointing to the entity

- `toArray()` : `array`
  - Get the entity as an associative array

### EntityCollection

Container class for Entities fetched from Business Central

#### EntityCollection Properties

None

#### EntityCollection Methods

- `find(string $id, $default = null)` : [Entity](#entity) | `null`
  - Finds and returns an entity from the collection with the given id or `$default` on failure

- `create(array $attributes)` : [Entity](#entity)
  - Creates and returns a new Entity with the given attributes

- `update(string $id, array $attributes)` : [Entity](#entity)
  - Updates and returns an existing Entity with the given attributes

- `delete(string $id)` : `bool`
  - Deletes en entity from the collection with the given id - Returns true/false on success/failure

- `first($default = null)` : [Entity](#class-entity) | `null` | `mixed`
  - Returns the first index of the collection or `$default` is empty

- `count()` : `int`
  - Returns the amount of entities in the collection
 
- `all()` : `array`
  - Get the collection as an array

- `getEntitySet`: [EntitySet](#entityset)
  - Get the collections EntitySet
  
- `query()` : [Builder](#builder)
  - Get a query pointing to the collection (includes extentions)
  
- `toArray()` : `array`
  - Get the collection as an array (converts all entities within also)

### Builder

Query builder used to fetch and update entities on Business Central

Note: All EntityCollection method calls can be performed on the Builder instance itself,  
due to an internal call to `$collection->fetch()` before the method call.

#### Builder Properties

None

#### Builder Methods

##### Builder Navigation

- `navigateTo(string $component, string $id = null) | to(string $component, string $id = null)` : `$this`
  - Point the Builder towards a component

- `fetch()` : [EntityCollection](#entitycollection)
  - Fetch all entities at the pointer
  
##### Builder Pagination
  
- `limit(int $limit = null)` : `$this`|`int`
  - Set the limit if `$limit` is set, else returns the current limit

- `page(int $page = null)` : `$this`|`int`
  - Set the page if `$page` is set, else returns the current limit
  
- `nextPage()` : `$this`
  - Flip to the next page
  
- `prevPage()` : `$this`
  - Flip to the previous page
  
##### Builder Sorting

- `orderBy($property, string $direction = 'asc')` : `$this`
  - Sort the Builder by a specified property and $direction
  - The `$field` property can be an array containing multiple conditions ( ['property' => 'direction'] )

- `orderByAsc(string $property)` : `$this`
  - Sort the Builder by a specified property ascending

- `orderByDesc(string $property)` : `$this`
  - Sort the Builder by a specified property descending
  
##### Builder Expansion

See [Expansions](#expansions)
  
##### Builder Advanced
  
- `clone()` : `$this`
  - Clone the current Builder instance with extentions (filters, expands, sorting etc.)
  
- `cloneWithoutExtentions()` : `$this`
  - Clone the current Builder instance without extentions (filters, expands, sorting etc.)
