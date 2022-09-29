<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="p-3 m-3">
                        Recent posts:
                    </h1>
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
