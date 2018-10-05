<template>
    <div>
        <main-content v-bind:articles="articles"></main-content>
        <additional-topics v-bind:articles="articles"></additional-topics>
    </div>
</template>
<script>
    import MainContent from '../components/MainContent.vue';
    import AdditionalTopics from '../components/AdditionalTopics.vue';
    export default {
        props:['articles'],
        components:{
            MainContent,
            AdditionalTopics
        },
    }
</script>