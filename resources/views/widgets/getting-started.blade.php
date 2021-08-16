<div class="card p-0 content max-w-md mx-auto" x-data="{ showList: false }">
    <div class="py-3 px-4 border-b text-center">
        <h1>Welcome to Podcaster for Statamic!</h1>
        <p>Let's get this podcast going. Your listeners are waiting.</p>
    </div>
    <div class="py-3 px-6 space-y-3">
        <a href="{{ cp_route('globals.update', 'podcast') }}" class="p-2 flex items-start hover:bg-blue-100 rounded-md group">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)"><path d="M6.487,13.519a6.5,6.5,0,1,1,11.016.015" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5,16.5a9.5,9.5,0,1,1,14.02-.028" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.253,16.72a2,2,0,0,0-1.987-2.22H10.734a2,2,0,0,0-1.988,2.22l.557,5A2,2,0,0,0,11.29,23.5h1.42A2,2,0,0,0,14.7,21.72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.500 10.042 A2.500 2.500 0 1 0 14.500 10.042 A2.500 2.500 0 1 0 9.500 10.042 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Set up your podcast</h2>
                <p>Set your podcast's name, cover artwork, iTunes, categories, and other important details.</p>
            </div>
        </a>
        <a href="{{ cp_route('collections.entries.create', ['episodes', Statamic\Facades\Site::default()->handle()]) }}" class="p-2 flex items-start hover:bg-blue-100 rounded-md group">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)"><path d="M5 23.5L4 23.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 23.5L7 23.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11 23.5L10 23.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 23.5L13 23.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 23.5L16 23.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20 23.5L19 23.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17,10.5a5,5,0,0,1-10,0v-5a5,5,0,0,1,10,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 17.5L12 21" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13 0.6L13 3.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11 0.6L11 3.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.291 12.5L18.71 12.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7 6.5L10 6.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7 8.5L10 8.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 6.5L17 6.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 8.5L17 8.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5,9v1.5a7,7,0,0,0,14,0V9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            </div>
            <div class="flex-1">
                @if ($episodes > 0)
                    <h2 class="text-blue-darkest">{{ __('Add a new episode') }}</h2>
                    <p>Get that fresh episode out there, or make some tweaks to existing episodes.</p>
                @else
                    <h2 class="text-blue-darkest">{{ __('Create your first episode') }}</h2>
                    <p>Finished recording and editing? What are you waiting for — get that content out there!</p>
                @endif
            </div>
        </a>
        <a href="{{ cp_route('globals.update', 'theme') }}" class="p-2 flex items-start hover:bg-blue-100 rounded-md group">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)"><path d="M10.932,18.5a5,5,0,0,1-10,0V3.5a3,3,0,0,1,3-3h4a3,3,0,0,1,3,3Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.193,21.116,17.9,8.165a3,3,0,0,0-1.045-4.112L13.416,2.008a3,3,0,0,0-2.927-.078" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.932,10.1v8.4a5,5,0,0,1-2.55,4.359L21.5,15.736A3,3,0,0,0,22.7,11.668L20.8,8.153A3,3,0,0,0,18.32,6.588" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.932 3.500 L8.932 3.500 L8.932 6.500 L2.932 6.500 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.932 8.500 L8.932 8.500 L8.932 11.500 L2.932 11.500 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.932 13.500 L8.932 13.500 L8.932 16.500 L2.932 16.500 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.932,19.749a.25.25,0,1,1-.25.25.25.25,0,0,1,.25-.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Tweak your site theme</h2>
                <p>Customize colors, social media links, and other settings to make the site more uniquely you!</p>
            </div>
        </a>
        <button x-on:click="showList = true" class="p-2 flex text-left items-star rounded-md group" x-bind:class="!showList && 'hover:bg-blue-100'">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                <svg viewBox="0 0 32 32" height="32" width="32" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(1.3333333333333333,0,0,1.3333333333333333,0,0)"><path d="M16,22.77a11.5,11.5,0,1,1,7.5-10.819" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M.673,9.985H6.757a3,3,0,0,1,2.122.878L10,11.984a3,3,0,0,1,.121,4.115L8.758,17.632A3,3,0,0,0,8,19.625V22.77" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.261,3.985h-5.8a2.25,2.25,0,0,0,0,4.5h.432a3,3,0,0,1,2.5,1.335l1.6,2.4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.500 21.485 A2.000 2.000 0 1 0 23.500 21.485 A2.000 2.000 0 1 0 19.500 21.485 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.500 15.485 A2.000 2.000 0 1 0 23.500 15.485 A2.000 2.000 0 1 0 19.500 15.485 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.500 18.985 A2.000 2.000 0 1 0 17.500 18.985 A2.000 2.000 0 1 0 13.500 18.985 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.224 17.979L19.774 16.491" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.346 19.754L19.654 20.715" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Distrubute your podcast</h2>
                <p>Once you're live, it's time to get your podcast feed out there. Here are some links to help you do that quickly.</p>
                <ul class="text-base space-y-2 mt-4 pt-4 border-t" x-show="showList" x-cloak>
                    <li>
                        <a target="_blank" href="https://podcastsconnect.apple.com/my-podcasts">Submit to Apple Podcasts (iTunes)</a>
                        <p class="mt-1"><b>Bonus!</b> Overcast and other popular networks pull directly from Apple.</p>
                    </li>
                    <li><a target="_blank" href="https://podcasters.spotify.com/">Submit to Spotify</a></li>
                    <li><a target="_blank" href="https://podcastsmanager.google.com/">Submit to Google Podcasts</a></li>
                    <li><a target="_blank" href="http://www.pocketcasts.com/submit">Submit to Pocket Casts</a></li>
                    <li><a target="_blank" href="https://www.stitcher.com/content-providers">Submit to Sticher</a></li>
                    <li><a target="_blank" href="https://www.podchaser.com/">Submit to Podchaser</a></li>
                </ul>
            </div>
        </button>
        @if (!Statamic::pro())
        <a href="https://statamic.dev/licensing" class="p-2 flex items-start hover:bg-blue-100 rounded-md group">
            <div class="h-12 w-12 mr-3 text-blue-900 rounded-full bg-blue-100 group-hover:bg-blue-200 p-1">
                @cp_svg('pro-ribbon')
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">{{ __('Need Pro Mode?') }}</h2>
                <p>If you need multiple user accounts, roles, permissions, or want to white label the control panel, it's time for Statamic Pro!</p>
            </div>
        </a>
        @endif
    </div>
</div>
