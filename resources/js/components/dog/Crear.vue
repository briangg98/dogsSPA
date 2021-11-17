<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Añadir Nuevo Perro</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-5 mb-2">
                                <div class="form-group">
                                    <label><b>Raza</b></label>
                                    <input type="text" class="form-control" v-model="dog.raza">
                                </div>
                            </div>
                             <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label><b>Tamaño</b></label>
                                    <select v-model="dog.tamaño">
                                        <option disabled value="">Seleccione un elemento</option>
                                        <option>Pequeño</option>
                                        <option>Mediano</option>
                                        <option>Grande</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label><b>Color</b></label><br>
                                    <input type="radio" id="Negro" value="Negro" v-model="dog.color">
                                    <label for="Negro">Negro</label>
                                    <input type="radio" id="Blanco" value="Blanco" v-model="dog.color">
                                    <label for="Blanco">Blanco</label>
                                    <input type="radio" id="Gris" value="Gris" v-model="dog.color">
                                    <label for="Gris">Gris</label>
                                    <input type="radio" id="Marron" value="Marron" v-model="dog.color">
                                    <label for="Marron">Marron</label>
                                    <input type="radio" id="Otros" value="Otros" v-model="dog.color">
                                    <label for="Otros">Otros</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"crear-dog",
    data(){
        return {
            dog:{
                raza:"",
                tamaño:"",
                color:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/dog',this.dog).then(response=>{
                this.$router.push({name:"mostrarDogs"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>