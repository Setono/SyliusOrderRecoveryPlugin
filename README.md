# Setono SyliusOrderRecoveryPlugin

[![Latest Version][ico-version]][link-packagist]
[![Latest Unstable Version][ico-unstable-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Code Coverage][ico-code-coverage]][link-code-coverage]

This plugin solves a small, but important, part of this [issue](https://github.com/Sylius/Sylius/issues/10729).
As a quick summary the issue is that when a customer goes through checkout, and eventually goes to a third party payment
provider, but then decides to hit back in the browser, the customer sees an empty cart. This will undoubtedly result in
lost orders, i.e. the name of this plugin 'Order Recovery'.

[ico-version]: https://poser.pugx.org/setono/sylius-order-recovery-plugin/v/stable
[ico-unstable-version]: https://poser.pugx.org/setono/sylius-order-recovery-plugin/v/unstable
[ico-license]: https://poser.pugx.org/setono/sylius-order-recovery-plugin/license
[ico-github-actions]: https://github.com/Setono/SyliusOrderRecoveryPlugin/workflows/build/badge.svg
[ico-code-coverage]: https://codecov.io/gh/Setono/SyliusOrderRecoveryPlugin/branch/master/graph/badge.svg

[link-packagist]: https://packagist.org/packages/setono/sylius-order-recovery-plugin
[link-github-actions]: https://github.com/Setono/SyliusOrderRecoveryPlugin/actions
[link-code-coverage]: https://codecov.io/gh/Setono/SyliusOrderRecoveryPlugin
