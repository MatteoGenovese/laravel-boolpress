<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6 ">
                            <nav class="navbar navbar-light bg-light d-flex justify-content-end">
                                <form class="form-inline d-flex justify-content-end">
                                    <input class="form-control mr-sm-2 d-flex justify-content-end" type="search" placeholder="Search title" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0 d-flex justify-content-end" type="submit">Search</button>
                                </form>
                            </nav>

                        </div>

                    </div>
                    <PostCard :key="post.id" :post="post"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import PostCard from '../components/PostCard.vue';

export default {
    name: 'SinglePost',
    components:{
        PostCard,
    },

    data:function(){
        return{
            post : [],
            postLoading : true,
        }
    },
    methods: {
        getPost(){
            const id= this.$route.params.id;
            axios.get(`/api/posts/${id}`)
            .then((response) => {
                this.post = response.data.results.data;
                console.log(this.post);
                this.postLoading = false;
            }).catch((error) => {
                console.error(error);
            })
        },
    },
    created(){
        this.getPost()
    }

};
</script>

<style>

</style>
