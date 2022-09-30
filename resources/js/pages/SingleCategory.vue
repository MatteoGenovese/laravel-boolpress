<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="p-3 m-3">
                                Recent posts:
                            </h1>
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
                    <PostCard v-for="post in posts" :key="post.id" :post="post"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import PostCard from '../components/PostCard.vue';

export default {
    name: 'SingleCategory',
    components:{
        PostCard,
    },

    data:function(){
        return{
            posts : [],
            postsLoading : true,
        }
    },
    methods: {
        getPosts(){
            const id = this.$route.params.id;
            axios.get(`/api/categories/${id}`)
            .then((response) => {
                this.posts = response.data.results;
                console.log(this.posts);
                this.postsLoading = false;
            }).catch((error) => {
                console.error(error);
            })
        },
    },
    created(){
        this.getPosts()
    }

};
</script>

<style>

</style>
