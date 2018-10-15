<template>
    <div class="alert alert-danger" role="alert">
        <strong>Something went wrong while creating this {{created}}</strong>
    </div>
</template>
<script>
    export default {
        props:['created']
    }
</script>