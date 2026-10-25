# NossoCR Collection Filtering and Desktop Sidebar

**Project:** NossoCR, a multi-brand fashion retailer in Costa Rica

**Platform:** WordPress and WooCommerce

**Role:** Nícolas Cartín Reyes, Lead Developer

**Date:** October 2026

**Status:** Deployed and validated on representative collection pages

## Overview

A product-discovery improvement for the NossoCR storefront, combining contextual Color and Size filters with a desktop sidebar. The work connected WooCommerce product attributes, YITH AJAX filtering, Elementor archive composition, custom PHP, responsive CSS, cache management, and release verification.

The project was directed by **Nícolas Cartín Reyes, Lead Developer**. The final experience was deliberately limited to the points where customers select products: leaf categories and brand collections. Parent category pages remained navigation-focused, and mobile and tablet pages retained their product area without the sidebar.

## The problem

The storefront needed a practical way to narrow collections by color and size. Adding a shared filter widget alone did not meet the experience requirements: a full-width block above products competed with the collection content, broad parent categories exposed filters too early, and the mobile layout was not suitable.

The requirements were to present an organized sidebar, resolve options against the collection being viewed, and avoid displaying a filter panel where it would interfere with navigation or the product layout.

## Lead Developer scope

Nícolas Cartín Reyes led the collection UX requirements and technical direction, including the sidebar layout, leaf-category eligibility, brand support, contextual attribute selection, and the final desktop-only decision. The project record preserves the implementation choices, release verification, operating constraints, and rollback path.

The scope covered storefront configuration and original PHP/CSS integration. It did not include changes to product prices, inventory, orders, customer data, WordPress core, or third-party plugin source.

## 1. Contextual filter architecture

The existing YITH AJAX Product Filter installation was reused rather than introducing another filtering stack. The preset uses WooCommerce's global Color and Size attributes, automatic term population, readable checkbox labels, and multiple selection with OR logic within each attribute.

A PHP eligibility layer permits the preset on product categories without children and on brand archives. Categories with child terms remain unfiltered navigation pages. A child term counts even when it is empty, making the rule structural rather than dependent on temporary catalog counts.

The filter engine resolves terms against the collection context. Representative category and brand pages displayed different options, and selecting a color narrowed the available sizes during a functional test.

OR selection intentionally permits adding other colors from the same collection. Contextual term availability does not guarantee stock for every exact color-and-size variation; that was not the claim or scope of this release.

## 2. Elementor integration and responsive UX

The preset was integrated through an explicit shortcode in the shared Elementor product archive. This replaced a native widget configuration whose preset selection did not persist reliably.

Scoped CSS reorganizes the archive into a left filter panel and a three-column product grid on desktop. The panel uses a neutral background, readable text, modest borders, rounded corners, and clear separation between Color and Size.

Following the final UX decision, the complete filter widget is hidden at viewport widths of 1024 px or less. The archive switches to a single content column, so mobile and tablet do not retain an empty sidebar area. Responsive behavior is determined by CSS rather than server-side device detection, preserving a consistent page-cache strategy.

## 3. Controlled release and cache verification

The custom PHP/CSS was saved through Code Snippets' supported import workflow, using replacement rather than creating another active copy. The final snippet was confirmed active before post-release verification.

Stale page-cache responses initially made saved changes appear absent. Comparing a diagnostic URL with the normal collection URL distinguished persistence issues from cached output. LiteSpeed's page cache was purged, and verification returned to normal URLs rather than relying on a cache-busting query as the publication method.

The implementation and restoration instructions are versioned in the private maintenance repository. Committing source to GitHub is a backup and documentation operation, not an automatic WordPress deployment.

## Results and deliverables

| Workstream | Completed output |
| --- | --- |
| Product discovery | Color and Size filtering connected to the active collection context |
| Archive eligibility | Filters limited to leaf product categories and brand archives |
| Desktop UX | Left sidebar beside the product collection |
| Mobile and tablet UX | Filter widget hidden without reserving a sidebar column |
| Layout verification | Seven DOM/layout assertions passed across two collections and one parent category |
| Functional verification | Selecting a color produced a single matching product and narrowed available size options |
| Maintainability | Versioned PHP/CSS snapshot, import backup, regression test, release evidence, and rollback instructions retained privately |

**Observed release outcome:** The final sidebar and eligibility rules were active in the storefront, and representative filtering and layout checks passed.

**Not measured:** Conversion rate, revenue, abandonment, time to find a product, or search-ranking impact. This case documents the deployed capability, not an unmeasured CRO uplift.

## Verification approach and limits

The recorded layout checks covered desktop at 1440 px, tablet at 1024 px, and mobile at 390 px on representative category and brand collections, plus a parent-category check. Manual browser interaction verified a color selection and the resulting product and size updates.

The automated checks validated rendered DOM, visibility, and computed layout, not universal HTTP availability. One collection's automated navigation recorded an initial HTTP 403 while its final collection DOM rendered; manual browser verification supplemented those layout results. This is not presented as an all-clients availability audit.

The release did not exhaustively test every leaf category, browser, empty collection, or product-variation combination. Future changes to Elementor structure, category hierarchy, or filtering plugins require regression testing.

## Lessons learned

- Place filtering at the product-selection stage rather than assuming every taxonomy page needs it.
- Reuse the existing commerce stack when it supports the requirement, and scope custom code to the missing behavior.
- Use explicit configuration when builder widget state does not persist reliably.
- Distinguish saved configuration from stale cache before repeating a release.
- Hide the complete sidebar container on smaller screens, not only its visual controls.
- Separate attribute-term availability from exact variation stock and measured business impact.
- Preserve both a readable case study and an operational record that another maintainer can use.

## Tools

WordPress, WooCommerce, Elementor Pro, YITH WooCommerce AJAX Product Filter, Code Snippets, PHP, CSS Grid, LiteSpeed Cache, Python, and Playwright/Chromium.

## Public files and privacy

This public addition contains the strategic case-study narrative only. Production snippet configuration, builder identifiers, the import file, detailed QA evidence, and restoration procedures remain in the private maintenance repository.

No hosting archive, database export, credentials, session cookies, administrative nonces, orders, customer information, SKU lists, prices, barcodes, or inventory values are included in this public case study.

**Project lead: Nícolas Cartín Reyes, Lead Developer.**
