<template>
    <div class="container d-flex justify-content-center">
        <Tarea/>
    </div>
</template>

<script>

    import Tarea from './tarea'

    export default {
        components: {
            Tarea
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
