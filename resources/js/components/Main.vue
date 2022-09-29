<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h1 class="p-3 m-3">
                        Recent posts:
                    </h1>
                    <Card v-for="post in posts" :key="post.id" :post="post"/>
                </div>
                <div class="col-3">
                    <h1 class="p-3 m-3">
                        Tags:
                    </h1>
                    <Tag v-for="tag in tags" :key="tag.id" :tag="tag"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import Card from './Card.vue';
    import Tag from './Tag.vue';

export default {
    components:{
        Card,
        Tag
    },

    data:function(){
        return{
            posts : [],
            postsCurrentPage: 1,
            postsLastPage: null,
            postsLoading : false,
            tags :[],
            tagsLoading : false,
        }
    },
    methods: {
        getPosts(postsPage = 1){
            axios.get('/api/posts',{
                page: postsPage
            }).then((response) => {
                this.posts = response.data.results.data;
                this.postsCurrentPage = response.data.results.current_page;
                this.postsLastPage = response.data.results.last_page;
                this.postsLoading = false;
            }).catch((error) => {
                console.error(error);
            })
        },
        getTags(){
            axios.get('/api/tags')
            .then((response) => {
                this.tags = response.data.results;
                console.log(this.tags);
                this.tagsLoading = false;
            }).catch((error) => {
                console.error(error);
            })
        }
    },
    created(){
        this.getPosts()
        this.getTags()
    }

};
</script>

<style>

</style>
