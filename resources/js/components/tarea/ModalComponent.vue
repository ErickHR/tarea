<template>
    <div class="modal fade show" style="display: block; padding-right: 17px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" v-on:click="$emit('closeModal')">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <textarea cols="30" rows="10" v-model="dataTarea.name">
                    {{ dataTarea.name }}
                </textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="$emit('closeModal')">Cancelar</button>
                <button type="button" class="btn btn-primary" v-on:click="$emit( 'updateTarea', dataTarea )">Guardar Cambio</button>
            </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        props: {
            dataTarea: {
                type: Object,
                defaut: {
                    name: ''
                }
            }
        },

        mounted() {
        }

    }

</script>