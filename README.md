<!-- statamic:hide -->
# Podcaster
> A Turn-Key Podcasting Starter Kit for Statamic 3
<!-- /statamic:hide -->

## Features

This kit is deceptively simple – it may look like a 3 page site but there's a whole treasure trove of business logic and UI detail just under the surface.
### Turbo Powered

Podcaster's frontend uses [Turbo](https://turbo.hotwire.dev/) to eliminate full page reloads, allowing the podcast player to persist across page changes without having to build and maintain the site as a SPA (single page application). State changes to the UI (such as which episode is playing) are persisted using [Alpine.js](https://alpinejs.dev).

### The Player

The player is powered by [Plyr](https://plyr.io/) and [Alpine.js](https://alpinejs.dev).

An [Alpine Store](https://alpinejs.dev/magics/store) is used to configure the player, persist which episode is playing, and show details about it. This store is used by the main player and button components:

- `resources/views/partials/player.antlers.html`
- `resources/views/partials/play-buton.antlers.html`

### Configurable Colors

Your primary and secondary colors are used to generate a color pallet that files the vertical wave graphic that makes your site look awesome. We recommend using a bold color for the primary, and a darker, more desaturated one for secondary, but feel free to experiment. If it looks good, use it.

The primary color is also used as an accent color in the player.

### The RSS Feed

A podcast's RSS feed is the only way the world interacts with your podcast when off your site. Advanced features implemented in the feed include:

- Funding Links
- Locking
- Completion
- Mark as Explicit
- Spoken Language
- Google/iTunes Blocking

Your feed URL is set to `example.com/feed.xml` and is configurable in `routes/web.php`.  You can access the feed URL with the following methods:

```php
route('feed')
```

```antlers
{{ route:feed }}
```


### PubSubHubbub

Podcast feeds usually rely on podcast directories crawling their
RSS feeds periodically looking for updates. Google's [PubHubHubbub](https://pubsubhubbub.appspot.com) helps your podcast update faster by broadcasting updates & new episodes.

Enable PubSubHubbub in `config/podcaster.php` or with the following ENV variable.

```env
PODCASTER_PUBSUBHUBBUB_ENABLED=true
```

### Additional Frontend Build Details

- Built with [TailwindCSS](https://tailwindcss.com)
- Dynamic favicon based on your podcast artwork
- Podcast platform links and badges
- Configurable social media links and icons
- Full [static site](https://github.com/statamic/ssg) support
- [SEO Pro](https://statamic.com/addons/statamic/seo-pro) support with basic meta and Open Graph fallbacks.
- Mobile/Responsive friendly

### Custom Functionality

Just a few extra things built on the PHP/Laravel site to make the experience better.

- Duration Modifier
- AddSlashes Modifier
- PubSubHubbub Event Listener
- Getting Started Dashboard Widget
