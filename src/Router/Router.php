<?php

namespace App\Router;

use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Exception\NoConfigurationException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RouterInterface;

class Router implements RouterInterface
{
    public function __construct(
        private RouterInterface $innerRouter
    ) {
    }

    public function setContext(RequestContext $context)
    {
        return $this->innerRouter->setContext($context);
    }

    public function getContext(): RequestContext
    {
        return $this->innerRouter->getContext();
    }

    public function getRouteCollection()
    {
        return $this->innerRouter->getRouteCollection();
    }

    public function generate(string $name, array $parameters = [], int $referenceType = self::ABSOLUTE_PATH): string
    {
        return $this->generate($name, $parameters, $referenceType);
    }

    public function match(string $pathinfo): array
    {
        return $this->innerRouter->match($pathinfo);
    }
}
