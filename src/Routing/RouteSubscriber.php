<?php
namespace Drupal\rdm_islandora_orcid\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

    /**
     * {@inheritdoc}
     */
    protected function alterRoutes(RouteCollection $collection) {
        if ($route = $collection->get('orcid.oauth_redirect')) {
            $route->setOption('no_cache', 'TRUE');
        }
    }

}
