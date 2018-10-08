<template>
    <section
        class="container"
        :class="{
            'container--no-padding': noPadding
        }"
    >
    <div class="bg-grey px-8 py-4">
        <slot></slot>
    </div>
    </section>
</template>
<script>
    export default {
        props: {
            noPadding: {
                type: Boolean,
                default: false
            }
        }
    }
</script>
<style lang="scss" scoped>
    .container {
        display: block;
        position: relative;
        clear: both;
        width: 1200px;
        min-width: 100%;
        margin:0 auto;
        padding:0 15px;
    }

    .container--no--padding {
        padding: 0;
    }
</style>
