<template>
    <div>
        <button class="btn my-button" :type="type" v-text="text">soy un botón</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'text',
            'type',
        ]
    }
</script>


<style>
    .btn.my-button{
        background-color: #ff9cfd;
        color: white;
        padding: 15px 5px;
    }
</style>
