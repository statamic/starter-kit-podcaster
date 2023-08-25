import Plyr from 'plyr';
import chroma from "chroma-js";

Alpine.store('ui', {
    colors: chroma.scale([
        window.primaryColor,
        window.secondaryColor
    ]).colors(5),
});

let plyr = new Plyr('audio', {
    controls: ['play', 'rewind', 'progress', 'fast-forward', 'current-time', 'settings'],
    iconUrl: '/img/plyr-sprite.svg',
    seekTime: 15
});

Alpine.store('player', {
    plyr: null,
    playing: false,
    audio_file: null,
    episode_url: null,
    title: null,
    show: false,
    init() {
        plyr.on('playing', event => {
            Alpine.store('player').playing = true
        });
        plyr.on('pause', event => {
            Alpine.store('player').playing = false
        });
        plyr.on('ended', event => {
            Alpine.store('player').playing = false
        });
    },
    playEpisode(title, audio_file, mime_type, episode_url) {
        if (this.audio_file !== audio_file) {
            plyr.source = {
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
            plyr.pause();

            // Events not sent when calling pause programmatically
            // after setting .source
            Alpine.store('player').playing = false
            return;
        }
        plyr.togglePlay()
    },
});
