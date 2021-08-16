<template>

    <div>
        <text-input :value="value" @input="update" />
    </div>

</template>

<script>
/**
 * Register this component with:
 * Vue.component('i_tunes_category-fieldtype', require('./path/to/ITunesCategory.vue'))
 */
export default {

    mixins: [Fieldtype],

    data() {
        return {
            //
        };
    }

};
</script>
