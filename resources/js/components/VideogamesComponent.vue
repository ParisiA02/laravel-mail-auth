<template>
    <div id="videogames">
        <h1>Videogames</h1>
        <div v-for="videogame,i in videogames" :key="i">
            Id: {{videogame.id}} |
            Titolo: {{videogame.titolo}} |
            Sottotitolo: {{videogame.sottotitolo}} |
            Rating: {{videogame.rating}} |
            <span v-if="user">
                <!-- <a :href="`/api/videogame/delete/${videogame.id}`" class="btn btn-danger">
                    delete
                </a> -->
                <button @click="videogameDelete(videogame.id)">Delete</button>
            </span>
        </div>
    </div>
</template>
<script>
export default {
    data: function() {
        return{
            videogames:[]
        }
    },
    props: {
        user: String
    },
    methods:{
        videogameDelete(id){
            axios.get(`/api/videogame/delete/${id}`)
                 .then(r => {
                     const ind = this.getIndexById(id);
                     console.log(id);
                     this.videogames.splice(ind, 1);
                 })
                 .catch(e => console.error('e',e))
        },

        getIndexById(id){
            for (let x=0; x<this.videogames.lenght; x++){
                const videogame = this.videogames[x];
                if(videogame.id == id)

                    return x;
                
            }
            return -1;
        }
    },
    mounted(){
        axios.get('/api/videogames/list')
             .then(r => this.videogames = r.data)
             .catch(e => console.error(e));
    }
}
</script>