<template>
<div class="container">
    <div class="row">

        <div class="col-lg-12 mb-4">
            <router-link :to='{name:"crearDog"}' class="btn btn-success"><i class="fas fa-plus fa-fw"></i>Añadir Perro<i class="fas fa-paw fa-fw"></i></router-link>
        </div>

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Raza</th>
                            <th>Tamaño</th>
                            <th>Color</th>
                            <!-- <th>Foto</th> -->
                            <th>Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr v-for="dog in dogs" :key="dog.id">
                            <td>{{ dog.id }}</td>
                            <td>{{ dog.raza }}</td>
                            <td>{{ dog.tamaño }}</td>
                            <td>{{ dog.color }}</td>
                            <!-- <td>{{  dog.foto  }}</td> -->
                            <td>
                                <router-link :to='{name:"editarDog", params:{id:dog.id}}' class="btn btn-info"><i class="far fa-edit"></i></router-link>
                                <a type="button" @click="borrarDog(dog.id)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</template>
<script>
export default {
    name:"dogs",
    data(){
        return{
            dogs:[]
        }
    },
    mounted(){
        this.mostrarDogs()
    },
    methods:{
        async mostrarDogs(){
            await this.axios.get('/api/dog')
            .then(response=>{
                this.dogs = response.data
            })
            .catch(error=>{
                this.dog = []
            })
        },
        borrarDog(id){
            if (confirm("Confirma eliminar el registro?")){
                this.axios.delete(`/api/dog/${id}`)
                .then(response=>{
                this.mostrarDogs()
            })
            .catch(error=>{
                console
            })
            }
        }
    }
    
}
</script>