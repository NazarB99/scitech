<template>
    <div class="alert " :class="getClass()" role="alert">
        <strong v-if="success">{{created}} successfully created</strong>
        <strong v-if="failed">Something went wrong while creating this {{created}}</strong>
    </div>
</template>
<script>
    export default {
        props:['created','success','failed'],
        methods:{
            getClass(){
                if(this.success === true){
                    return 'alert-success'
                }
                if(this.failed === true){
                    return 'alert-danger'
                }
            }
        }
    }
</script>