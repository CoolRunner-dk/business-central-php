<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Query\Contracts;


use BusinessCentral\Exceptions\Exception;
use BusinessCentral\Query\Builder;
use BusinessCentral\Schema;
use Closure;
use DateTime;

/**
 * Trait Filters
 *
 * @author  Morten K. Harders 🐢 <mh@coolrunner.dk>
 * @package BusinessCentral\Query
 *
 * @mixin Builder
 */
trait Filters
{
    protected $filters = [];

    public function whereRaw(string $raw, $before = 'and')
    {
        $this->filters[] = [
            'type'   => 'raw',
            'query'  => $raw,
            'before' => $before,
        ];

        return $this;
    }

    public function orWhereRaw(string $raw, $before = 'or')
    {
        return $this->whereRaw($raw, $before);
    }

    /**
     * Add a basic where clause to the query
     *
     * @param string|Closure $property
     * @param null $operator
     * @param null $value
     * @param string $before
     *
     * @return $this|Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see    http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html
     */
    public function where($property, $operator = null, $value = null, string $before = 'and')
    {
        if ($property instanceof Closure) {
            return $this->whereGroup($property);
        }

        if ($value === null) {
            $value    = $operator;
            $operator = '=';
        }

        $this->filters[] = [
            'type'     => 'where',
            'property' => $property,
            'operator' => $this->parseOperator($operator),
            'value'    => $value,
            'before'   => $before,
        ];

        /** @var Builder $this */
        return $this;
    }

    /**
     * Add a basic where clause to the query
     *
     * @param string|Closure $property
     * @param null $operator
     * @param null $value
     * @param string $before
     *
     * @return $this|Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see    http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html
     */
    public function orWhere($property, $operator = null, $value = null, string $before = 'or')
    {
        return $this->where($property, $operator, $value, $before);
    }

    /**
     * Add a where in clause to the query
     *
     * @param string $property
     * @param array|string[] $values
     * @param string $before
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see    http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#_Toc14103654
     */
    public function whereIn(string $property, array $values, string $before = 'and')
    {
        $this->filters[] = [
            'type'     => 'in',
            'property' => $property,
            'values'   => $values,
        ];

        return $this;
    }

    /**
     * Add a where in clause to the query
     *
     * @param string $property
     * @param array|string[] $values
     * @param string $before
     *
     * @return $this
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see    http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#_Toc14103654
     */
    public function orWhereIn(string $property, array $values, $before = 'or')
    {
        return $this->whereIn($property, $values, $before);
    }


    /**
     * Add a DateTime where clause to the query
     *
     * @param string $property
     * @param null $operator
     * @param DateTime $value
     * @param string $before
     *
     * @return $this|Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function whereDateTime(string $property, $operator, DateTime $value = null, string $before = 'and')
    {
        if ($value === null) {
            $value    = $operator;
            $operator = '=';
        }

        $this->filters[] = [
            'type'     => 'datetime',
            'property' => $property,
            'operator' => $this->parseOperator($operator),
            'value'    => $value,
            'before'   => $before,
        ];

        return $this;
    }

    /**
     * Add a DateTime where clause to the query
     *
     * @param string $property
     * @param null $operator
     * @param DateTime $value
     * @param string $before
     *
     * @return $this|Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function orWhereDateTime(string $property, $operator, DateTime $value = null, string $before = 'or')
    {
        return $this->whereDateTime($property, $operator, $value, $before);
    }

    /**
     * Add a where not clause to the query
     *
     * @param Closure $callback
     * @param string $before
     *
     * @return $this
     * @author     Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see        http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#_Toc14103652
     *
     * @deprecated Not currently supported by Business Central
     */
    public function whereNot(Closure $callback, string $before = 'and')
    {
        $this->filters[] = [
            'type'     => 'not',
            'callback' => $callback,
            'before'   => $before,
        ];

        return $this;
    }

    /**
     * Add a where not clause to the query
     *
     * @param Closure $callback
     * @param string $before
     *
     * @return $this
     * @author     Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see        http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#_Toc14103652
     *
     * @deprecated Not currently supported by Business Central
     */
    public function orWhereNot(Closure $callback, string $before = 'or')
    {
        return $this->whereNot($callback, $before);
    }

    /**
     * Add a grouped where clause to the query
     *
     * @param Closure $callback
     * @param string $before
     *
     * @return $this|Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function whereGroup(Closure $callback, string $before = 'and')
    {
        $this->filters[] = [
            'type'     => 'group',
            'callback' => $callback,
            'before'   => $before,
        ];

        return $this;
    }


    /**
     * Add a grouped where clause to the query
     *
     * @param Closure $callback
     * @param string $before
     *
     * @return $this|Builder
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function orWhereGroup(Closure $callback, string $before = 'or')
    {
        return $this->whereGroup($callback, $before);
    }

    /**
     * Add a where contains clause to the query
     *
     * @param string $property
     * @param string|int $value
     * @param string $before
     *
     * @return $this|Builder
     *
     * @see http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#sec_contains
     */
    public function whereContains(string $property, $value, string $before = 'and')
    {
        $this->filters[] = [
            'type'     => 'contains',
            'property' => $property,
            'value'    => $value,
            'before'   => $before,
        ];

        return $this;
    }


    /**
     * Add a where contains clause to the query
     *
     * @param string $property
     * @param string|int $value
     * @param string $before
     *
     * @return $this|Builder
     *
     * @see http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#sec_contains
     */
    public function orWhereContains(string $property, $value, string $before = 'or')
    {
        return $this->whereContains($property, $value, $before);
    }

    /**
     *
     * Add a where starts with clause to the query
     *
     * @param string $property
     * @param string|int|float $value
     * @param string $before
     *
     * @return $this|Builder
     *
     * @see http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#sec_startswith
     */
    public function whereStartsWith(string $property, $value, string $before = 'and')
    {
        $this->filters[] = [
            'type'     => 'startswith',
            'property' => $property,
            'value'    => $value,
            'before'   => $before,
        ];

        return $this;
    }

    /**
     *
     * Add a where starts with clause to the query
     *
     * @param string $property
     * @param string|int|float $value
     * @param string $before
     *
     * @return $this|Builder
     *
     * @see http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#sec_startswith
     */
    public function orWhereStartsWith(string $property, $value, string $before = 'or')
    {
        return $this->whereStartsWith($property, $value, $before);
    }

    /**
     *
     * Add a where ends with clause to the query
     *
     * @param string $property
     * @param string|int|float $value
     * @param string $before
     *
     * @return $this|Builder
     *
     * @see http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#sec_endswith
     */
    public function whereEndsWith(string $property, $value, string $before = 'and')
    {
        $this->filters[] = [
            'type'     => 'endswith',
            'property' => $property,
            'value'    => $value,
            'before'   => $before,
        ];

        return $this;
    }

    /**
     *
     * Add a where ends with clause to the query
     *
     * @param string $property
     * @param string|int|float $value
     * @param string $before
     *
     * @return $this|Builder
     *
     * @see http://docs.oasis-open.org/odata/odata/v4.01/csprd05/part2-url-conventions/odata-v4.01-csprd05-part2-url-conventions.html#sec_endswith
     */
    public function orWhereEndsWith(string $property, $value, string $before = 'or')
    {
        return $this->whereEndsWith($property, $value, $before);
    }

    /**
     * Render the filter string for use in the HTTP query string
     *
     * @param bool $with_prefix
     *
     * @return string|null
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getFiltersString($with_prefix = true)
    {
        if (empty($this->filters)) {
            return null;
        }

        $filters = [];
        foreach ($this->filters as $i => $filter) {
            if ($i !== 0) {
                $filters[] = $filter['before'];
            }
            switch ($filter['type']) {
                case 'where':
                    $filters[] = "$filter[property] $filter[operator] {$this->formatValue($filter['value'])}";
                    break;

                case 'datetime':
                    $filters[] = "$filter[property] $filter[operator] {$filter['value']->format('Y-m-d\TH:i:s.v\Z')}";
                    break;

                case 'group':
                    $group_query = $this->sdk->query();
                    $filter['callback']($group_query);
                    $filters[] = "( {$group_query->getFiltersString(false)} )";
                    break;

                case 'startswith':
                case 'endswith':
                case 'contains':
                    $filters[] = "$filter[type]($filter[property], {$this->formatValue($filter['value'])})";
                    break;

                case 'in':
                    $values = implode(', ', array_map([$this, 'formatValue'], $filter['values']));

                    $filters[] = "$filter[property] in ( $values )";
                    break;

                case 'not':
                    $group_query = $this->sdk->query();
                    $filter['callback']($group_query);
                    $filters[] = "not ( {$group_query->getFiltersString(false)} )";
                    break;

                case 'raw':
                    $filters[] = $filter['query'];
            }
        }

        return ($with_prefix ? '$filter=' : '') . implode(' ', $filters);
    }

    /**
     * Converts the value into a usable state for $filter
     *
     * @param      $value
     * @param bool $for_query
     *
     * @return string
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    protected function formatValue($value, $for_query = true)
    {
        if (is_string($value)) {
            if (preg_match(Schema::GUID_FORMAT, $value)) {
                return $value; // Edm.Guid
            } elseif (is_int($value) || is_float($value) || is_double($value)) {
                return $value;
            } elseif ($for_query) {
                return sprintf("'%s'", urlencode($value));
            } else {
                return sprintf("'%s'", $value);
            }
        }

        return $value;
    }

    /**
     * Parse standard logical operators to OData variants
     *
     * @param $operator
     *
     * @return mixed|string
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    protected function parseOperator($operator)
    {
        return ['=' => 'eq', '!=' => 'ne', '>' => 'gt', '>=' => 'ge', '<' => 'lt', '<=' => 'le',][$operator] ?? $operator;
    }

    /**
     * Get all filters
     *
     * @return array
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Set filters for query
     *
     * @param array $filters
     *
     * @return $this|Builder
     */
    public function setFilters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * Remove filters from the query
     *
     * @return Builder|Filters
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function withoutFilters()
    {
        return $this->setFilters([]);
    }
}
