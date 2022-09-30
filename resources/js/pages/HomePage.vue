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
    name: 'HomePage',
    components:{
        PostCard,
    },

    data:function(){
        return{
            posts : [],
            postsCurrentPage: 1,
            postsLastPage: null,
            postsLoading : false,
        }
    },
    methods: {
        getPosts(postsPage = 1){
            axios.get('/api/posts',{
                page: postsPage
            }).then((response) => {
                this.posts = response.data.results.data;
                console.log(response.data.results.data);
                this.postsCurrentPage = response.data.results.current_page;
                this.postsLastPage = response.data.results.last_page;
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
