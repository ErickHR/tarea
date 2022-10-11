<template>

    <form v-on:submit="createData" class="tarea__form d-flex">
    
        <input 
            type="text" 
            v-model="dataForm.name" 
            placeholder="Nueva Tarea"
            class="tarea__input flex-grow-1 mr-2"
        >
        <button type="submit" class="btn btn--create"> + </button>

    </form>

</template>

<script>
import axios from '../../helpers/axios-helpers';

    export default {
        data() {
            return {
                dataForm: {
                    name: '',
                    status: true
                }
            }
        },
        methods: {

            async createData(){
                event.preventDefault()
                
                try {
                    if( !this.dataForm.name ) return
                    const body = { name: this.dataForm.name }
                    const response = await axios.axiosPost( '/api/tarea', body )
                    this.dataForm.name = ''
                    this.$emit( 'addData' )
                } catch (error) {
                    console.log( error )
                }

            }

        },  
        mounted() {
            
        }
    }
</script>