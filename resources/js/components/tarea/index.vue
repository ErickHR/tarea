<template>
    <div class="tarea__wrapper">
        <Form-Component v-on:addData="addData" />
        <Table-Component ref="tableComponent" />
    </div>
</template>

<script>

    import FormComponent from './FormComponent.vue'
    import TableComponent from './TableComponent.vue'

    export default {
        components: {
            FormComponent,
            TableComponent
        },
        methods: {
            addData( ) {
                this.$refs.tableComponent.getDataList( )
            }
        },
        mounted(){
        }
    }

</script>