# Business Central for PHP

License: MIT  
This software is provided as is and without any warrenties of any kind.  
If you find a bug or have a feature request, please create an [issue](https://github.com/CoolRunner-dk/business-central-php/issues)

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

- `navigateTo(string $component, string $id = null) | to(string $component, string $id = null)` : `self`
  - Point the Builder towards a component

- `fetch()` : [EntityCollection](#entitycollection)
  - Fetch all entities at the pointer
  
##### Builder Pagination
  
- `limit(int $limit = null)` : `self`|`int`
  - Set the limit if `$limit` is set, else returns the current limit

- `page(int $page = null)` : `self`|`int`
  - Set the page if `$page` is set, else returns the current page
  
- `nextPage()` : `self`
  - Flip to the next page
  
- `prevPage()` : `self`
  - Flip to the previous page
  
##### Builder Sorting

- `orderBy($property, string $direction = 'asc')` : `self`
  - Sort the Builder by a specified property and $direction
  - The `$field` property can be an array containing multiple conditions ( ['property' => 'direction'] )

- `orderByAsc(string $property)` : `self`
  - Sort the Builder by a specified property ascending

- `orderByDesc(string $property)` : `self`
  - Sort the Builder by a specified property descending
  
##### Builder Expansion

OData Reference: [Reference](http://docs.oasis-open.org/odata/odata/v4.0/cs01/part1-protocol/odata-v4.0-cs01-part1-protocol.html#_System_Query_Option_6)

- `expand(array $relations)` : `self`
  - Expand selection
Expansion allows us to fetch multiple levels of entities in a single request.  
This allows us to minimize the amount of requests needed to get the entities needed.

###### Basic Usage

Example:
```php
$company->customers()->expand([
    'paymentMethod',
    'picture',
])->fetch();
```
The above will fetch a collection with all customers from a company _with_ their `paymentMethod` relation in one request.

###### Multilevel Expansion / Filtered Expansion

Utilizing closures it is possible to nest expansions and apply filters to the expansions at any level.

```php
$company->customers()->expand([
    'paymentMethod' => function(Builder $query) {
    	$query->where('code', '=', 'CR3D17C4RD')
	      ->expand(['nested_relation']);
    },
    'picture',
]);

// Query: companies(...)/customers?$expand=picture,paymentMethod($filter=code eq 'CR3D17C4RD';$expand=nested_relation;$count=true)&$top=40&$count=true
```

See [Filtering](#filtering)

Note: The nesting can be done indefinitely and as complex as you want, but keep in mind there still is a character limit to URLs.

##### Builder Filtering

OData reference: [Reference](http://docs.oasis-open.org/odata/odata/v4.0/cs01/part1-protocol/odata-v4.0-cs01-part1-protocol.html#_The_$filter_System)

Filtering allows us to more carefully select which entities we fetch from Business Central.  
This allows us to improve performance and exclude irrelevant models from our processing from the start.

A number of different filtering methods exists.  
For every filter method an "OR" version exists (eg. `whereDate(...)` -> `orWhereDate(...)`  
The `$before` argument is the boolean operator prepended to the query before every clause.  

- `where(string $property, $operator = null, $value = null, string $before = 'and')` : `self`
  - Basic where clause
  - Shorthand: `where('displayName', 'John Doe');` is the same as `where('displayName', '=', 'John Doe')`
  
- `whereIn(string $property, array $values, string $before = 'and')` : `self`
  - Where property in a group of values

- `whereDateTime(string $property, $operator, DateTime $value = null, string $before = 'and')` : `self`
  - Where property is a datetime (`Y-m-d\TH:i:s.v\Z`)

- `whereContains(string $property, $value, string $before = 'and')` : `self`
  - Where property contains the value - Same SQL `\`column\` like '%value%'`

- `whereStartsWith(string $property, $value, string $before = 'and')` : `self`
  - Where property starts with the value - Same SQL `\`column\` like 'value%'`

- `whereEndsWith(string $property, $value, string $before = 'and')` : `self`
  - Where property starts with the value - Same SQL `\`column\` like '%value'`
  
- `whereGroup(Closure $callback, string $before = 'and')` : `self`
  - Grouped where clause - Example `whereGroup(function(Builder $query) { $query->where('property', 'Foo')->orWhere('property', 'Bar'))`
  - This functionality can be shorthanded as `where(function(Builder $query) { ... })`
  
Operators:  
| Logical   | OData equiv |
| :-:       | :-:         |
| =         | eq          |
| !=        | ne          |
| >         | gt          |
| >=        | ge          |
| <         | lt          |
| <=        | le          |

###### Basic Usage
  
##### Builder Advanced
  
- `clone()` : `self`
  - Clone the current Builder instance with extentions (filters, expands, sorting etc.)
  
- `cloneWithoutExtentions()` : `self`
  - Clone the current Builder instance without extentions (filters, expands, sorting etc.)

---

# Contribution

This SDK is not a finished product. Input, additions and changes are very much encouraged - Fork the repo, make the changes/additions/fixed and create a pull request.

## What's needed?

A lot of entities on Business Central has read-only fields which are disguised as actual properties but are virtual 
(like currencyCode on customers is the value of the customer's currency's code property).

These properties needs to be found and flagged.  
Take a look in schema_overrides.json and follow the syntax for flagging a property as read-only.
