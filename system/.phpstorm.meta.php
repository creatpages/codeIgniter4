<?php

namespace PHPSTORM_META {

    //config() - override
    override(\config(),map([
        '' => '\Config\@',
        'App' => \Config\App::class,
        'Autoload' => \Config\Autoload::class,
        'Cache' => \Config\Cache::class,
        'ContentSecurityPolicy' => \Config\ContentSecurityPolicy::class,
        'DocTypes' => \Config\DocTypes::class,
        'Database' => \Config\Database::class,
        'Email' => \Config\Email::class,
        'Encryption' => \Config\Encryption::class,
        'Exceptions' => \Config\Exceptions::class,
        'Filters' => \Config\Filters::class,
        'ForeignCharacters' => \Config\ForeignCharacters::class,
        'Format' => \Config\Format::class,
        'Honeypot' => \Config\Honeypot::class,
        'Images' => \Config\Images::class,
        'Kint' => \Config\Kint::class,
        'Logger' => \Config\Logger::class,
        'Migrations' => \Config\Migrations::class,
        'Mimes' => \Config\Mimes::class,
        'Modules' => \Config\Modules::class,
        'Pager' => \Config\Pager::class,
        'Services' => \Config\Services::class,
        'Toolbar' => \Config\Toolbar::class,
        'UserAgents' => \Config\UserAgents::class,
        'Validation' => \Config\Validation::class,
        'View' => \Config\View::class,
    ]));

    //helper() - expectedArguments
    expectedArguments(
        \helper(),
        0,
        'array_helper',
        'cookie_helper',
        'date_helper',
        'filesystem_helper',
        'form_helper',
        'html_helper',
        'inflector_helper',
        'number_helper',
        'security_helper',
        'text_helper',
        'url_helper',
        'xml_helper',
    );

    //service() - override
    override(\service(), map([
        'cache' => \CodeIgniter\Cache\CacheInterface::class,
        'clirequest' => \CodeIgniter\HTTP\CLIRequest::class,
        'curlrequest' => \CodeIgniter\HTTP\CURLRequest::class,
        'email' => \CodeIgniter\Email\Email::class,
        'encrypter' => CodeIgniter\Encryption\EncrypterInterface::class,
        'exceptions' => \CodeIgniter\Debug\Exceptions::class,
        'filters' => \CodeIgniter\Filters\Filters::class,
        'honeypot' => \CodeIgniter\Honeypot\Honeypot::class,
        'image' => \CodeIgniter\Images\Handlers\BaseHandler::class,
        'iterator' => \CodeIgniter\Debug\Iterator::class,
        'logger' => \CodeIgniter\Log\Logger::class,
        'migrations' => \CodeIgniter\Database\MigrationRunner::class,
        'negotiator' => \CodeIgniter\HTTP\Negotiate::class,
        'pager' => \CodeIgniter\Pager\Pager::class,
        'parser' => \CodeIgniter\View\Parser::class,
        'renderer' => \CodeIgniter\View\View::class,
        'request' => \CodeIgniter\HTTP\IncomingRequest::class,
        'response' => \CodeIgniter\HTTP\Response::class,
        'redirectResponse' => \CodeIgniter\HTTP\Response::class,
        'routes' => \CodeIgniter\Router\RouteCollection::class,
        'router' => \CodeIgniter\Router\Router::class,
        'security' => \CodeIgniter\Security\Security::class,
        'session' => \CodeIgniter\Session\Session::class,
        'throttler' => \CodeIgniter\Throttle\Throttler::class,
        'timer' => \CodeIgniter\Debug\Timer::class,
        'toolbar' => \CodeIgniter\Debug\Toolbar::class,
        'uri' => \CodeIgniter\HTTP\URI::class,
        'validation' => \CodeIgniter\Validation\Validation::class,
        'viewcell' => \CodeIgniter\View\Cell::class,
        'typography' => \CodeIgniter\Typography\Typography::class,
    ]));

    //single_service() - override
    override(\single_service(), map([
        'cache' => \CodeIgniter\Cache\CacheInterface::class,
        'clirequest' => \CodeIgniter\HTTP\CLIRequest::class,
        'curlrequest' => \CodeIgniter\HTTP\CURLRequest::class,
        'email' => \CodeIgniter\Email\Email::class,
        'encrypter' => CodeIgniter\Encryption\EncrypterInterface::class,
        'exceptions' => \CodeIgniter\Debug\Exceptions::class,
        'filters' => \CodeIgniter\Filters\Filters::class,
        'honeypot' => \CodeIgniter\Honeypot\Honeypot::class,
        'image' => \CodeIgniter\Images\Handlers\BaseHandler::class,
        'iterator' => \CodeIgniter\Debug\Iterator::class,
        'logger' => \CodeIgniter\Log\Logger::class,
        'migrations' => \CodeIgniter\Database\MigrationRunner::class,
        'negotiator' => \CodeIgniter\HTTP\Negotiate::class,
        'pager' => \CodeIgniter\Pager\Pager::class,
        'parser' => \CodeIgniter\View\Parser::class,
        'renderer' => \CodeIgniter\View\View::class,
        'request' => \CodeIgniter\HTTP\IncomingRequest::class,
        'response' => \CodeIgniter\HTTP\Response::class,
        'redirectResponse' => \CodeIgniter\HTTP\Response::class,
        'routes' => \CodeIgniter\Router\RouteCollection::class,
        'router' => \CodeIgniter\Router\Router::class,
        'security' => \CodeIgniter\Security\Security::class,
        'session' => \CodeIgniter\Session\Session::class,
        'throttler' => \CodeIgniter\Throttle\Throttler::class,
        'timer' => \CodeIgniter\Debug\Timer::class,
        'toolbar' => \CodeIgniter\Debug\Toolbar::class,
        'uri' => \CodeIgniter\HTTP\URI::class,
        'validation' => \CodeIgniter\Validation\Validation::class,
        'viewcell' => \CodeIgniter\View\Cell::class,
        'typography' => \CodeIgniter\Typography\Typography::class,
    ]));

}
