# NossoCR Cart and Checkout Workflow: Responsive Cart, Delivery Address, and Shipping Choice

**Project:** NossoCR, a multi-brand fashion retailer in Costa Rica

**Platform:** WordPress and WooCommerce

**Role:** Nícolas Cartín Reyes, Lead Developer

**Date:** October 2026

**Status:** Targeted cart and checkout improvements deployed; the full purchase workflow is not approved

## Overview

A focused commerce-workflow improvement for the cart and checkout experience. The changes address mobile cart readability, redundant per-product subtotals, Costa Rica-specific delivery information and clearer shipping choices. Validation also identified integration issues that require further work before the full purchase workflow can be approved.

## The problem

The cart and checkout needed a more practical path from product review to delivery selection. On small screens, cart product thumbnails required clearer presentation. The cart also showed a repeated product-level subtotal alongside the order summary, creating unnecessary visual duplication.

At checkout, the flow needed to capture a Costa Rican delivery address with the fields required for fulfillment, retain essential contact details for both delivery and pickup, and offer a clear relationship between shipping and billing addresses. Shipping also needed sensible initial behavior while protecting later valid customer choices.

## Role

**Nícolas Cartín Reyes, Lead Developer**, led the implementation direction, scope decisions, and technical delivery for the cart and checkout workflow.

Manus assisted with execution and focused quality-assurance activities. The public account attributes project leadership to Nícolas Cartín Reyes and does not present assistance as a substitute for that role.

## Solution

### Mobile cart clarity and simplified totals

The cart experience now presents product thumbnails more clearly on mobile layouts. The change is limited to presentation and does not change products, quantities, prices, cart data, or checkout calculations.

The repeated subtotal for each product is hidden in the cart table while the summary subtotal and final total remain visible. This simplifies review of the order without changing the underlying WooCommerce calculations.

### Costa Rica delivery address and contact flow

The checkout flow uses a Costa Rica delivery-address format that collects Province, Canton, District, and an exact address. Phone number and email remain required when local pickup is selected.

A shared-address checkbox begins selected so customers can use one address for billing and delivery instead of entering it twice. Customers can instead choose separate addresses. The broader cart-to-checkout inheritance issues remain subject to the validation findings below.

### Conditional San Jose shipping protection

Free delivery for San Jose is restricted to deliveries in the San Jose province. The protection is enforced on the server, rather than relying only on browser presentation. When a paid shipping option is selected, the province remains editable. Local pickup does not require a delivery address when a valid pickup choice is in place.

### Default shipping choice that respects later selection

Correos de Costa Rica is presented as the initial shipping option when it is available for a first cart visit. A valid later customer selection is respected rather than being reset on subsequent cart views.

This targeted behavior does not change shipping amounts, delivery eligibility rules, address fields, payments, or order creation.

## Evidence

Focused validation covered Chromium on desktop at 1280 x 900 and mobile emulation at 390 x 844, with isolated guest sessions. The evidence combines manual assisted review and automated checks; these sources are independent, and not every scenario was repeated manually one by one.

The available focused evidence recorded the following:

- Cart thumbnails were visible and loaded at 320, 390, 768, and 1280 px; no horizontal overflow was reported at the three smaller checked widths.
- The simplified cart retained visible prices, quantities, summary subtotal, and final total. Existing checks at 390, 768, and 1280 px reported no amount change in the tested scenario.
- Address and contact behavior was reviewed for the stated delivery and pickup requirements, including the shared-address path.
- The San Jose shipping rule had reported interface and rule-level checks, including a rejected negative request that did not create an order.
- The default Correos behavior had reported focused desktop and mobile checks, along with a later focused recheck of numeric outcomes.

The cart and checkout improvements are deployed. However, the complete workflow remains **not approved**. The audit found three open issues that require independent revalidation:

1. **Address inheritance:** checkout can retain previous address details after only the exact-address field is edited and the customer advances without updating.
2. **Shipping-choice preservation:** Correos can change to local pickup when advancing with an initial address without updating.
3. **Empty filter state:** a product-filter panel can appear empty despite products being present.

The latest default-shipping recheck is focused evidence only. It does not prove that the checkout issues above are closed.

No orders were created, no payments were processed, and no personal customer information was used during the documented workflow checks.

## Limits

This is a public, sanitized portfolio narrative. It does not include production code, configuration, session or security mechanics, personal customer information, private source links, or detailed QA records.

The documented coverage does not establish compatibility across all themes, plugins, browsers, devices, products, sessions, or future cart states. Mobile emulation does not replace testing on Safari or an iPhone device. No real purchase, payment authorization, order creation, email delivery, or post-purchase fulfillment workflow was validated.

The San Jose rule requires address fields but does not verify geographic accuracy or delivery capability. The shared-address behavior is described as an implemented mapping and is not a guarantee of identical behavior across all payment or third-party checkout integrations.

No conversion, sales, revenue, performance, abandonment, or search-impact gains were measured. Publishing this case study does not deploy code to WordPress.

**Project lead: Nícolas Cartín Reyes, Lead Developer.**
