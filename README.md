# Disable Animated Subsizes

See [readme.txt](readme.txt) for plugin behavior, compatibility, and installation.

To enable deployment, first obtain WordPress.org approval for the `disable-animated-subsizes` slug and add the repository Actions secrets `SVN_USERNAME` and `SVN_PASSWORD` for an account with SVN commit access. Use the WordPress.org SVN password for the latter.

For a release, make the plugin header version and readme stable tag match, commit the changes, and push a matching numeric Git tag, such as `1.0.0` (without a `v` prefix). The [deployment workflow](.github/workflows/deploy.yml) publishes the tagged plugin and directory assets using [10up's deployment action](https://github.com/10up/action-wordpress-plugin-deploy). A separate GitHub Release is optional.

Editable artwork lives in [assets](assets); WordPress.org PNGs live in [.wordpress-org](.wordpress-org). The design is adapted from [Disable Client Side Media](https://github.com/adamsilverstein/disable-client-side-media).
