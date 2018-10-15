<template>
    <div>
        <router-link v-for="category in categories" :key="category.id"
                     :to="{name:'getArticleByCategory',params:{id:category.id}}" class="btn btn-dark mr-2">
            {{category.category}} <span class="badge badge-light">{{category.articles.length}}</span>
        </router-link>
    </div>
</template>
<script>
    export default {
        props:['categories'],
    }
</script>