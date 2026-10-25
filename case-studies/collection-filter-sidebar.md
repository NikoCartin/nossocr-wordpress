# NossoCR Collection Filtering: Desktop Sidebar and Mobile Drawer

**Project:** NossoCR, a multi-brand fashion retailer in Costa Rica
**Platform:** WordPress and WooCommerce
**Role:** Nícolas Cartín Reyes, Lead Developer
**Date:** October 2026
**Status:** Deployed and validated on representative collection pages

## Overview

A product-discovery improvement pairing contextual Color and Size filters with a responsive experience: a desktop sidebar and a mobile/tablet bottom sheet. The work combined product attributes, AJAX filtering, archive composition, custom front-end integration, accessibility and release verification.

Filters are available only where shoppers are choosing products: leaf categories and brand collections. Parent categories remain navigation-focused. The direction and technical delivery were led by **Nícolas Cartín Reyes, Lead Developer**.

## The problem

A shared filter widget did not meet the experience requirements on its own. A large block competed with the collection, broad parent pages exposed filters too early, and a persistent sidebar did not suit narrow screens. The experience needed to keep options contextual while matching each screen size.

## Contextual filtering

The storefront's existing commerce filtering capability was reused to provide Color and Size choices based on the active collection. Multiple values can be selected within an attribute. Parent categories remain focused on navigation rather than exposing product filters.

The available terms are not a guarantee of stock for every exact color-and-size variation. This project did not add a variation-stock engine.

## Responsive experience

On desktop, filters sit in a sidebar beside the product collection. On mobile and tablet, a «Filtrar y ordenar» control opens a bottom sheet with filter choices, close and backdrop dismissal, keyboard Escape support, clear and apply actions, focus and scroll management, and reduced-motion behavior. The product grid remains suited to the smaller viewport, and ineligible archive pages do not display filter controls.

## Release and verification

The deployed experience was checked on normal canonical collection URLs. After an initial stale-cache issue, the published view was rechecked without relying on a cache-busting URL. Responsive QA covered 390 px mobile, 768 px tablet and 1280 px desktop, with representative leaf, parent and brand pages. All 19 recorded checks passed, including drawer interaction, AJAX filtering, apply/clear behavior and horizontal overflow.

The Playwright evidence recorded an initial HTTP 403 for one navigation even though the page DOM rendered and its assertions passed. A separate direct iPhone check returned HTTP 200. These are reported distinctly; passing DOM checks are not presented as proof of a 200 response for that Playwright navigation or universal availability.

## Results and limits

| Workstream | Outcome |
| --- | --- |
| Product discovery | Contextual Color and Size filtering |
| Desktop | Sidebar beside the collection |
| Mobile/tablet | Bottom sheet for filters and actions |
| Eligibility | Leaf categories and brand collections, not parent navigation pages |
| Responsive verification | 19/19 recorded checks passed at three viewport sizes |

Conversion rate, revenue, abandonment, time to find a product and search-ranking impact were not measured. This case documents a deployed capability, not an unmeasured CRO uplift. No exact-variation stock guarantee is implied.

Production code, detailed configuration, QA records and restoration procedures remain in the private maintenance repository. This public case study is a sanitized narrative only.

**Project lead: Nícolas Cartín Reyes, Lead Developer.**
