# Curated NossoCR code

This folder contains a small, filtered set of site-specific customizations extracted from the submitted WordPress export. It does not contain the database, WordPress core, vendor themes/plugins, customer data, production credentials, logs, or uploaded media.

## Included sources

- `php/nossocr-child-enqueue-styles.php`: the one active PHP entry from the Code Snippets table (stored under the label `Shortcode Top Products`). Its code enqueues a child-theme stylesheet; it does not define a top-products shortcode despite the stored label.
- `css/customizer-fastest-store.css` and `css/customizer-hello-elementor.css`: published WordPress Customizer CSS entries.
- `html/promo-bar.html`: the Elementor HTML widget from the published Inicio page.
- `html/whatsapp-float.html` and `css/whatsapp-float.css`: the published footer WhatsApp widget and its inline styles. The live phone number has been replaced with `WHATSAPP_NUMBER`; substitute the authorized business number when deploying.

No custom JavaScript was identified in the reviewed snippets or published Elementor HTML widgets. Four inactive stock Code Snippets examples and generated builder CSS/JS assets are intentionally omitted.
