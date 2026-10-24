# Bulk Catalog Upload for WooCommerce

**Project:** NossoCR, a multi-brand fashion retailer in Costa Rica
**Platform:** WordPress and WooCommerce
**Role:** Lead Developer
**Date:** October 2026

## Overview

I took a Melissa catalog update from data review through validated import, search-ready product copy, and campaign artwork. The work combined WooCommerce operations, Python-based data checks, image preparation, and SEO content. The workflow was completed in one working day.

## The problem

Preparing a large group of size and color variations manually was slow and error-prone. The existing catalog also had inconsistent attributes and categories, while product information and photography came from multiple sources. New product pages relied on generic descriptions that did not clearly communicate product details.

## Process

1. **Reviewed the catalog structure.** Analyzed an 840-row working dataset containing 90 products and 750 variations. Mapped the existing categories, brands, attributes, and variation relationships. The source export and its row-level data are not included in this repository.
2. **Built repeatable import templates.** Prepared WooCommerce-compatible templates with valid categories and attribute values, separating updates to existing products from new product creation.
3. **Validated data before import.** Used Python and pandas to check duplicate identifiers, parent-variation consistency, required catalog fields, and variation completeness. No product identifiers or store values are published here.
4. **Tested and imported in controlled steps.** Verified the import path with a single product, then ran the update and creation files separately to reduce the risk of unintended catalog changes.
5. **Prepared product photography.** Reviewed 185 received photos and linked 117 relevant images through the WordPress Media Library. The import referenced 276 image URLs, with a confirmed color photo assigned to 159 of 204 new variations.
6. **Improved search copy.** Wrote 21 distinct product titles and short descriptions based on confirmed product facts. The examples are included in `examples/seo_titles_descriptions_sample_en.csv`; they do not claim ranking improvements.
7. **Created campaign artwork.** Designed a 1080 x 1920 vertical Melissa collection graphic for Instagram Reels using the supplied brand assets and Python/Pillow, preserving the original logos and text.

## Results

| Measure | Result |
| --- | --- |
| Catalog structure reviewed | 840 rows: 90 products and 750 variations |
| Existing products updated | 22 products and 255 variations |
| New products loaded | 21 products and 204 variations |
| Photos reviewed and linked | 117 of 185 received; 276 image URLs referenced |
| New variations with a confirmed color photo | 159 of 204 |
| Product SEO copy prepared | 21 unique titles and descriptions |
| Campaign creative | One 1080 x 1920 vertical design |

## Technical challenges and solutions

- **The storefront could not be crawled for catalog analysis.** I used a controlled WooCommerce export as the working source and kept the source file private.
- **Attribute values were formatted incorrectly in the first import template.** WooCommerce expected comma-separated values, so I corrected the affected rows before import.
- **A few parent and variation identifiers conflicted during import.** I separated the relevant rows and adjusted processing order, without publishing the identifiers.
- **Google Drive photo links were not accepted by the native importer.** I uploaded the images to the WordPress Media Library and used the canonical media URLs.
- **Some image links did not exactly match the URLs stored in WordPress.** I aligned the import values with the Media Library URLs before retrying.
- **Variation color names differed between the product source and the store taxonomy.** I used an equivalence table and assigned only clear matches, leaving uncertain values for confirmation.
- **Image generation tools changed brand marks and text.** I used a controlled, programmatic layout with the original supplied assets instead.

## Lessons learned

- Validate the import structure before making a full catalog change.
- A one-product test catches format and media issues with limited operational risk.
- Use confirmed product facts in titles and descriptions, and treat SEO performance as something to measure later rather than claim in advance.
- For brand-sensitive campaign creative, preserve approved assets and control the layout directly.

## Tools

WordPress, WooCommerce CSV Importer, Python, pandas, Pillow, Excel, Google Drive, and the WordPress Media Library.

## Public files and privacy

This repository contains the case-study narrative, a sanitized SEO-copy example, and the approved portfolio graphic only. It does not include WooCommerce exports, prices, stock or inventory values, barcodes, product identifiers, SKU lists, orders, customer data, or credentials.

Brand logos and trademarks belong to their respective owners and are shown for portfolio purposes only.
