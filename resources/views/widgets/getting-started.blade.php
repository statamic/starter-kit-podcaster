<ui-empty-state-menu
    heading="Welcome to Podcaster for Statamic!"
    subheading="Let's get this podcast going. Your listeners are waiting."
>
    <ui-empty-state-item
        href="{{ cp_route('globals.update', 'podcast') }}"
        icon="rss"
        heading="Set up your podcast"
        description="Set your podcast's name, cover artwork, iTunes, categories, and other important details."
    ></ui-empty-state-item>

    <ui-empty-state-item
        href="{{ cp_route('collections.entries.create', ['episodes', Statamic\Facades\Site::default()->handle()]) }}"
        icon="computer-voice-mail-microphone"
        heading="{{ $episodes > 0 ? 'Add a new episode' : 'Create your first episode' }}"
        description="{{ $episodes > 0 ? 'Get that fresh episode out there, or make some tweaks to existing episodes.' : 'Finished recording and editing? What are you waiting for — get that content out there!' }}"
    ></ui-empty-state-item>

    <ui-empty-state-item
        href="{{ cp_route('globals.update', 'theme') }}"
        icon="edit-paint-palette"
        heading="Tweak your site theme"
        description="Customize colors, social media links, and other settings to make the site more uniquely you!"
    ></ui-empty-state-item>

    <ui-empty-state-item
        icon="earth"
        heading="Distribute your podcast"
        description="Once you're live, it's time to get your podcast feed out there. Here are some links to help you do that quickly."
    >
        <a target="_blank" href="https://podcastsconnect.apple.com/my-podcasts" class="text-blue-600 text-sm rtl:ml-2 ltr:mr-2" v-tooltip="'Overcast and other popular networks pull directly from Apple.'">
            Submit to Apple Podcasts (iTunes)
        </a>
        <a target="_blank" href="https://podcasters.spotify.com" class="block text-blue-600 text-sm rtl:ml-2 ltr:mr-2">Submit to Spotify</a>
        <a target="_blank" href="http://www.pocketcasts.com/submit" class="block text-blue-600 text-sm rtl:ml-2 ltr:mr-2">Submit to Pocket Casts</a>
        <a target="_blank" href="https://www.stitcher.com/content-providers" class="block text-blue-600 text-sm rtl:ml-2 ltr:mr-2">Submit to Sticher</a>
        <a target="_blank" href="https://www.podchaser.com" class="block text-blue-600 text-sm rtl:ml-2 ltr:mr-2">Submit to Podchaser</a>
    </ui-empty-state-item>

    @unless(Statamic::pro())
        <ui-empty-state-item
            href="https://statamic.dev/licensing"
            icon="pro-ribbon"
            heading="Need Pro Mode?"
            description="If you need multiple user accounts, roles, permissions, or want to white label the control panel, it's time for Statamic Pro!"
        ></ui-empty-state-item>
    @endunless
</ui-empty-state-menu>