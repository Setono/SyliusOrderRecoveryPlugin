<?php

declare(strict_types=1);

namespace Setono\SyliusOrderRecoveryPlugin\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

final class OrderCookieSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => 'setCookie',
        ];
    }

    public function setCookie(ResponseEvent $event): void
    {
        if (!$event->isMasterRequest()) {
            return;
        }

        $request = $event->getRequest();

        $route = $request->attributes->get('_route');
        if (!is_string($route)) {
            return;
        }

        if ('sylius_shop_order_pay' !== $route) {
            return;
        }

        $tokenValue = $request->attributes->get('tokenValue');
        if (!is_string($tokenValue)) {
            return;
        }

        $event->getResponse()->headers->setCookie(Cookie::create('ssor_order', $tokenValue, new \DateTime('+7 days'))); // todo configuration option, cookie time. Should probably be the same time as the cancellation period in Sylius
    }
}
