<?php
/**
 * @package   business-central-sdk
 * @author    Morten Harders 🐢
 * @copyright 2020
 */

namespace BusinessCentral\Exceptions;


use BusinessCentral\Query\Builder;
use Throwable;

class QueryException extends \Exception
{
    protected $query;
    protected $error_code;
    protected $error_message;

    public function __construct(Builder $query, array $response, Throwable $previous = null)
    {
        $this->query         = $query;
        $this->error_code    = $response['error']['code'];
        $this->error_message = $response['error']['message'];

        parent::__construct(implode(' | ', [$response['error']['code'], $response['error']['message']]), 0, $previous);
    }

    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Get error code
     *
     * @return string
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Get error message
     *
     * @return string
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * Test if the QueryException is of a specific type
     *
     * @param string $error_code
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     *
     * @see    https://docs.microsoft.com/en-us/dynamics-nav/api-reference/v1.0/dynamics_error_codes
     */
    public function is(string $error_code)
    {
        return $this->error_code === $error_code;

        /**
         * This allows PhpStorm's DeepAssoc plugin to index all possible inputs
         *
         * @noinspection PhpUnreachableStatementInspection
         */
        static::$error_codes[$error_code];
    }

    /**
     * Will typically be an error in the forming of the request or an error accessing the service.
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function isBadRequest()
    {
        return !!preg_match('/^BadRequest_.+$/', $this->error_code);
    }

    /**
     * An error authenticating to the service.
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function isAuthentication()
    {
        return !!preg_match('/^Authentication_.+$/', $this->error_code);
    }

    /**
     * The authenticated identity does not have the correct permissions.
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function isAuthorization()
    {
        return !!preg_match('/^Authorization_.+$/', $this->error_code);
    }

    /**
     * Typically this is an internal error in the application on the server or data integrity issue.
     * For example, the Dynamics NAV instance cannot communicate with the SQL Server.
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function isInternal()
    {
        return !!preg_match('/^Internal_.+$/', $this->error_code);
    }

    /**
     * Typically an application logic error.
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function isApplication()
    {
        return !!preg_match('/^Application_.+$/', $this->error_code);
    }

    /**
     * Who knows! ¯\_(ツ)_/¯
     *
     * @return bool
     * @author Morten K. Harders 🐢 <mh@coolrunner.dk>
     */
    public function isUnknown()
    {
        return $this->error_code === 'Unknown';
    }

    protected static $error_codes = [
        'BadRequest_InvalidRequestUrl'         => null,
        'BadRequest_NotFound'                  => null,
        'BadRequest_ResourceNotFound'          => null,
        'BadRequest_InvalidOperation'          => null,
        'BadRequest'                           => null,
        'BadRequest_InvalidToken'              => null,
        'BadRequest_RequiredParamNotProvided'  => null,
        'Request_EntityChanged'                => null,
        'BadRequest_MethodNotAllowed'          => null,
        'BadRequest_MethodNotImplemented'      => null,
        'Internal_DataNotFoundFilter'          => null,
        'Internal_RecordNotFound'              => null,
        'Internal_InvalidTableRelation'        => null,
        'Internal_ServerError'                 => null,
        'Internal_EntityWithSameKeyExists'     => null,
        'Internal_CompanyNotFound'             => null,
        'Internal_TenantUnavailable'           => null,
        'Application_DialogException'          => null,
        'Application_EvaluateException'        => null,
        'Application_StringExceededLength'     => null,
        'Application_InvalidGUID'              => null,
        'Application_CallbackNotAllowed'       => null,
        'Application_FilterErrorException'     => null,
        'Application_FieldValidationException' => null,
        'Authentication_InvalidCredentials'    => null,
        'Unknown'                              => null,
    ];
}