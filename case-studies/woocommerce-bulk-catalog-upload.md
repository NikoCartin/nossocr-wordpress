# NossoCR Melissa Catalog, SEO, and Campaign Update

**Project:** NossoCR, a multi-brand fashion retailer in Costa Rica
**Platform:** WordPress and WooCommerce
**Role:** Lead Developer
**Date:** October 2026

## Overview

A three-part e-commerce operations project covering WooCommerce bulk-import preparation, product SEO copy, and campaign design for the Melissa collection. The work combined catalog analysis, Python-based data validation, search-ready Spanish copy, image preparation, and bilingual Reels creative.

## 1. Bulk catalog import preparation

The catalog had hundreds of size and color variations, inconsistent attributes and categories, and product information and photography coming from several sources. Preparing changes manually would have been slow and error-prone.

- Analyzed an 840-row working dataset containing 90 products and 750 variations, mapping categories, brands, attributes, and product-variation relationships. The raw export is not included here.
- Built WooCommerce-compatible CSV templates to prepare updates to 22 existing products and create records for 21 new products.
- Used Python and pandas to validate duplicate identifiers, parent-variation consistency, required fields, prices, and variation completeness before import.
- Tested the import workflow with an isolated product and separated the update and new-product files to reduce the risk of unintended catalog changes.
- Reviewed 185 received photos, linked 117 relevant photos through the WordPress Media Library, and prepared 276 image URLs. A confirmed color photo was assigned to 159 of 204 new variations.
- Resolved import-preparation issues involving attribute delimiters, parent/variation processing order, and Google Drive image links by using WooCommerce-compatible values and canonical WordPress Media Library URLs.

**Status:** The CSV update files were prepared, but the final full import was not confirmed. Counts above describe the prepared work, not a confirmed completed catalog import.

## 2. SEO title and short-description update

The 21 new Melissa product pages had generic long-description text with only the product name swapped, no short descriptions, and inconsistent title patterns. The requested work was to prepare unique SEO copy in the short-description field and standardize the titles.

- Wrote 21 unique Spanish short descriptions, each 55 to 72 words, using a consistent structure: a keyword-led opening with “en Costa Rica” and a product benefit, model-specific verified details, then shipping, secure payment by link, and in-store pickup information.
- Kept each opening sentence between 111 and 134 characters so it could also serve as a search snippet for the site's AIOSEO setup.
- Standardized titles using product type, brand, model, and audience, with one exception where the product name was already long.
- Used only confirmed catalog facts. Avoided unsupported product specifications and left sizes out so the copy would not become stale.
- Aligned each description's opening with its title and validated by script that all 21 titles were unique and each title opened its matching description.
- Prepared a SKU-matched update CSV with the new title and short description and an empty long-description field. The final import was not confirmed.

The English SEO CSV in this repository is a portfolio translation and does not replace the Spanish store copy. No search-ranking results are claimed; performance would need to be measured later in Search Console.

## 3. Melissa campaign design

The brief was to announce that the Melissa collection had been updated and communicate nationwide shipping, secure payment by link, and pickup at the Nosso store.

- Explored layout directions with Gemini, then reviewed the draft and identified problems with text placement, the Instagram interface's safe zones, product-photo fidelity, and logo/text preservation.
- Built the final Spanish and English 9:16 artwork directly in Python/Pillow using the supplied Nosso and Melissa Costa Rica logos, the original product image, and the Poppins typeface.
- Kept the final copy and benefits inside the Instagram safe area, used a transparent product cutout, and applied a rose accent to complement the product.
- Preserved the supplied logos and product photography without generatively redrawing them.

**Final format:** Two language versions, each 1080 x 1920 pixels.

## Results and deliverables

| Workstream | Prepared or completed output |
| --- | --- |
| Bulk import | 840 catalog rows analyzed; templates prepared for 21 new products and updates to 22 existing products; 117 relevant photos linked |
| SEO update | 21 unique titles and short descriptions prepared and validated; final import not confirmed |
| Design | Spanish and English 1080 x 1920 Melissa Reels artwork |

## Lessons learned

- Validate catalog structure and import rules before applying a bulk change.
- Separate product creation and updates, and test the workflow with an isolated item to limit operational risk.
- SEO copy should use confirmed product facts and align the title, opening sentence, and short description; ranking impact must be measured rather than assumed.
- AI can help explore layouts, while direct programmatic composition keeps supplied logos, copy, and product imagery under control.

## Tools

WordPress, WooCommerce CSV Importer, Python, pandas, Pillow, Excel, Google Drive, AIOSEO, Gemini, and Poppins.

## Public files and privacy

This repository contains the case-study narrative, a sanitized English SEO-copy sample, and approved portfolio artwork only. It does not include WooCommerce exports, prices, stock or inventory values, barcodes, product identifiers, SKU lists, orders, customer data, or credentials.

Brand logos and trademarks belong to their respective owners and are shown for portfolio purposes only.
