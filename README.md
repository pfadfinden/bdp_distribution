# TYPO3 BdP Distribution

This is the "Bund der Pfadfinderinnen und Pfadfinder e.V. (BdP)" TYPO3 Starting Package.

It comes with a full-fledged website based on the bdp_template, with simple options to customize the base theme.
With this extension you can set up a ready-to-use BdP website. Regional associations and groups can adapt the theme in just a few steps.

## Installation
- Start with a new [TYPO3 BdP Composer installation](https://github.com/pfadfinden/bdp_template/wiki/Installation)
- Install this extension with `composer req pfadfinden/bdp_distribution`
- Start the TYPO3-Setup. Select in the last step "Take me straight to the backend"
- run `vendor/bin/typo3 extension:setup` to activate and import the Starting Package
- After the first import this extension can be removed from your installation
- change the Page identifiers (pid) of the 404 error page [TYPO3 Dokumentation](https://docs.typo3.org/m/typo3/reference-coreapi/11.5/en-us/ApiOverview/SiteHandling/Basics.html)
- change the pids of the routing configuration to match the imported page (NewsDetail,NewsList, etc.) in the site configuration `Sites/main/config.yaml`
- Update in robots.txt of the site configuration the Sitemap to your domain.
