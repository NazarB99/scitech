<template>
    <div>
        <main-content v-bind:articles="parsedArticles"></main-content>
        <additional-topics v-bind:articles="parsedArticles"></additional-topics>
    </div>
</template>
<script>
    import MainContent from '../components/MainContent.vue';
    import AdditionalTopics from '../components/AdditionalTopics.vue';

    export default {
        props: ['articles'],
        components: {
            MainContent,
            AdditionalTopics
        },
        computed: {
            parsedArticles() {
                return JSON.parse(this.articles)
            }
        }
    }
</script>