# NossoCR Collection and Shop Filtering: Desktop Sidebar and Mobile Bottom Sheet

**Project:** NossoCR, a multi-brand fashion retailer in Costa Rica
**Platform:** WordPress and WooCommerce
**Role:** Nícolas Cartín Reyes, Lead Developer
**Date:** October 2026
**Status:** Deployed and validated on the shop and representative collection pages

## Overview

A product-discovery improvement that adds independent Categories and Brands filters to the shop while preserving the established contextual Color and Size filters on leaf-category and brand archives. The work combines responsive filtering, archive composition, accessibility, and release verification.

The shop and collection contexts select the appropriate facet set. Parent categories remain navigation-focused without filter controls. The direction and technical delivery were led by **Nícolas Cartín Reyes, Lead Developer**.

## The problem

A shared filter widget did not meet the experience requirements on its own. Shoppers needed to refine the full shop by category and brand without replacing the proven Color and Size experience in collection archives. The experience also needed to keep options contextual while matching each screen size.

## Contextual filtering

At `/tienda/`, Categories and Brands are available as independent shop facets. Multiple selections within a taxonomy use OR behavior, and shoppers can combine a category with a brand. Available options reflect the current view.

The existing Color and Size filtering on leaf-category and brand archives remains unchanged. The shop preset is separate, so each context presents the correct facets. Parent categories remain focused on navigation rather than exposing product filters.

The available terms are not a guarantee of stock for every exact product variation. This project did not add a variation-stock engine.

## Responsive experience

At widths above 1024 px, shop filters sit in a desktop sidebar beside the product collection. At 1024 px or below, a «Filtrar y ordenar» control opens a bottom sheet with filter choices, close and backdrop dismissal, keyboard Escape support, clear and apply actions, focus and scroll management, and reduced-motion behavior. The product grid remains suited to the smaller viewport, and ineligible archive pages do not display filter controls.

## Release and verification

An initial cache issue was resolved and caching was reenabled before final validation. Nineteen new shop and regression checks passed at 390 px and 1280 px using a diagnostic query parameter, covering responsive interaction, filtering, reset behavior, horizontal overflow, and the established Verde Musgo filter path. Separate live checks on normal canonical URLs verified the shop panel, a Bottoms plus Lunender combination, and clean resets; these are not added retroactively to the 19-check total.

The Playwright evidence recorded an initial HTTP 403 for one navigation even though the page DOM rendered and its assertions passed. Final direct Chrome and iPhone checks of the canonical URL returned HTTP 200 from the cached current page. These results are reported distinctly; passing DOM checks are not presented as proof of a 200 response for the earlier Playwright navigation or universal availability.

## Results and limits

| Workstream | Outcome |
| --- | --- |
| Product discovery | Independent Categories and Brands filters in the shop; established Color and Size filters retained in collection archives |
| Desktop | Shop sidebar above 1024 px |
| Mobile/tablet | Shop bottom sheet at 1024 px or below |
| Eligibility | Context-specific facets; parent navigation pages remain filter-free |
| Responsive verification | 19/19 new shop and regression checks passed at 390 px and 1280 px |

Conversion rate, revenue, abandonment, time to find a product and search-ranking impact were not measured. This case documents a deployed capability, not an unmeasured CRO uplift. No exact-variation stock guarantee is implied.

Production code, detailed configuration, QA records and restoration procedures remain in the private maintenance repository. This public case study is a sanitized narrative only.

**Project lead: Nícolas Cartín Reyes, Lead Developer.**
