<template>

    <div>
        <text-input :value="value" @input="update" />
    </div>

</template>

<script>
/**
 * Register this component with:
 * Vue.component('dummy_fieldtype-fieldtype', require('./path/to/DummyFieldtype.vue'))
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
