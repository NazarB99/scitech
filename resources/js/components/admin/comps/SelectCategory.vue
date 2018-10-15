<template>
    <select class="form-control">
        <option disabled value="" selected>Please select category of article</option>
        <option v-for="category in categories" :value="category.id">
            {{category.category}}
        </option>
    </select>
</template>
<script>
    export default {
        props:['categories']
    }
</script>