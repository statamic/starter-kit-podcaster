import * as Turbo from "@hotwired/turbo"
import Plyr from 'plyr';
import Alpine from 'alpinejs';
import chroma from "chroma-js";

Alpine.store('ui', {
    colors: chroma.scale([
        window.primaryColor,
        window.secondaryColor
    ]).colors(5),
});

// Dark Blues: ['062e56', '001122']

Alpine.store('player', {
    plyr: null,
    playing: false,
    audio_file: null,
    episode_url: null,
    title: null,
    show: false,
    init() {
        this.plyr = new Plyr('audio', {
            controls: ['play', 'rewind', 'progress', 'fast-forward', 'current-time', 'settings'],
            iconUrl: '/img/plyr-sprite.svg',
            seekTime: 15
        });
        this.plyr.on('playing', event => {
            Alpine.store('player').playing = true
        });
        this.plyr.on('pause', event => {
            Alpine.store('player').playing = false
        });
        this.plyr.on('ended', event => {
            Alpine.store('player').playing = false
        });
    },
    playEpisode(title, audio_file, mime_type, episode_url) {
        if (this.audio_file !== audio_file) {
            this.plyr.source = {
                type: 'audio',
                title: title,
                audio_file: audio_file,
                sources: [{ src: audio_file, type: mime_type }]
            };
        }
        this.toggle(audio_file);
        this.title = title;
        this.audio_file = audio_file;
        this.episode_url = episode_url;
        this.show = true;
    },
    toggle(file) {
        if (this.playing && file === this.audio_file) {
            this.plyr.pause();

            // Events not sent when calling pause programatically
            // after setting .source
            Alpine.store('player').playing = false
            return;
        }
        this.plyr.togglePlay()
    },
});

Alpine.start();
window.Alpine = Alpine;

// Turbo + Alpine.js 3 bridge
// via: https://gist.github.com/calebporzio/20cf74af4a015644c7bef5166cffd86c
document.addEventListener('turbo:before-render', () => {
    let permanents = document.querySelectorAll('[data-turbo-permanent]')

    let undos = Array.from(permanents).map(el => {
        el._x_ignore = true

        return () => {
            delete el._x_ignore
        }
    })

    document.addEventListener('turbo:render', function handler() {
        while(undos.length) undos.shift()()

        document.removeEventListener('turbo:render', handler)
    })
})
